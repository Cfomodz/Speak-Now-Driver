require('dotenv').config();
const express = require('express');
const bodyParser = require('body-parser');
const axios = require('axios');
const { VoiceResponse } = require('twilio').twiml;

// Google Cloud
const speech = require('@google-cloud/speech');
const textToSpeech = require('@google-cloud/text-to-speech');
const { Translate } = require('@google-cloud/translate').v2;

// Load env vars
const {
  TWILIO_ACCOUNT_SID,
  TWILIO_AUTH_TOKEN,
  DRIVER_PHONE_NUMBER,
  DRIVER_LANG_BCP47,
  PUBLIC_URL,
  PORT = 3000,
} = process.env;

// Twilio client (not strictly necessary for basic TWiML, but we use it to fetch recordings)
const twilioClient = require('twilio')(TWILIO_ACCOUNT_SID, TWILIO_AUTH_TOKEN);

// Google clients
const speechClient = new speech.SpeechClient();
const ttsClient = new textToSpeech.TextToSpeechClient();
const translateClient = new Translate();

// Express app
const app = express();
app.use(bodyParser.urlencoded({ extended: false }));

// In-memory store for TTS audio, for the MVP. Real production code might store in S3 or GCS.
const inMemoryAudioStore = {};

/**
 * Inbound call handler:
 * - Connect to driver (Dial)
 * - Then Record the "customer" (English speaker) for the first turn
 */
app.post('/call-inbound', (req, res) => {
  const twiml = new VoiceResponse();

  // 1) Dial driver so they're in the same call
  twiml.dial({ answerOnBridge: true }).number(DRIVER_PHONE_NUMBER);

  // 2) Start with the customer's turn (English)
  twiml.say('Customer, please speak now. Pause briefly when you are done.');
  twiml.record({
    action: '/process-recording?turn=customer',  // Next: /process-recording
    method: 'POST',
    maxLength: 30,      // up to 30 seconds per chunk
    maxSilence: 2,      // stops recording after 2s of silence
    playBeep: true
  });

  // If no speech occurs at all, Twilio continues here
  twiml.say('No speech was detected. Goodbye.');
  twiml.hangup();

  res.type('text/xml');
  res.send(twiml.toString());
});

/**
 * Handle each finished recording chunk
 * We know whose turn it was via ?turn=customer or ?turn=driver
 */
app.post('/process-recording', async (req, res) => {
  const turn = req.query.turn; // "customer" or "driver"
  const recordingUrl = req.body.RecordingUrl;

  const twiml = new VoiceResponse();

  try {
    // 1) Download the recorded audio from Twilio
    const audioBuffer = await downloadAudioFromTwilio(recordingUrl);

    // 2) Decide "fromLang" and "toLang" based on turn
    //    Customer (English) => Driver (driverLang) => TTS => <Play>
    //    Driver (driverLang) => English => <Say>
    let fromLang, toLang;
    let useTwilioSay = false;  // If true, we'll just say the result (English)
    if (turn === 'customer') {
      // Customer speaks English -> Translate -> driverLang -> TTS -> <Play>
      fromLang = 'en-US';
      toLang = DRIVER_LANG_BCP47;
      useTwilioSay = false; // We do TTS for driverLang
    } else {
      // turn === 'driver'
      // Driver speaks driverLang -> Translate -> English -> <Say>
      fromLang = DRIVER_LANG_BCP47;
      toLang = 'en-US';
      useTwilioSay = true;
    }

    // 3) STT
    const transcript = await doSpeechToText(audioBuffer, fromLang);

    // 4) Translate
    const translatedText = await doTranslate(transcript, toLang);

    // 5) Output: either <Say> if it's English, or TTS + <Play> if driverLang
    if (useTwilioSay) {
      // Turn = driver => we produce English
      twiml.say({ voice: 'Polly.Joanna' }, translatedText);
    } else {
      // Turn = customer => we produce driverLang
      const audioUrl = await doTtsAndHostMp3(translatedText, toLang);
      twiml.play(audioUrl);
    }

    // 6) Next turn
    const nextTurn = (turn === 'customer') ? 'driver' : 'customer';
    if (nextTurn === 'driver') {
      twiml.say('Driver, please speak now. Pause briefly when you are done.');
      twiml.record({
        action: '/process-recording?turn=driver',
        method: 'POST',
        maxLength: 30,
        maxSilence: 2,
        playBeep: true
      });
    } else {
      twiml.say('Customer, please speak now. Pause briefly when you are done.');
      twiml.record({
        action: '/process-recording?turn=customer',
        method: 'POST',
        maxLength: 30,
        maxSilence: 2,
        playBeep: true
      });
    }

    // If no speech next turn, eventually:
    twiml.say('No speech detected. Goodbye.');
    twiml.hangup();

  } catch (error) {
    console.error('Error in /process-recording:', error);
    twiml.say('An error occurred. Goodbye.');
    twiml.hangup();
  }

  res.type('text/xml');
  res.send(twiml.toString());
});

/**
 * Serve TTS MP3 from our in-memory store (MVP approach)
 */
app.get('/audio/:id.mp3', (req, res) => {
  const mp3Data = inMemoryAudioStore[req.params.id];
  if (!mp3Data) {
    return res.status(404).send('Not found');
  }
  res.type('audio/mpeg');
  res.send(mp3Data);
});

/*======================================================
  HELPER FUNCTIONS
======================================================*/

/**
 * Download the recording from Twilio
 */
async function downloadAudioFromTwilio(recordingUrl) {
  const auth = {
    username: TWILIO_ACCOUNT_SID,
    password: TWILIO_AUTH_TOKEN
  };
  const response = await axios.get(recordingUrl, {
    responseType: 'arraybuffer',
    auth
  });
  return Buffer.from(response.data);
}

/**
 * Google Speech-to-Text
 * - fromLang: "en-US" or "fr-FR", etc.
 */
async function doSpeechToText(audioBuffer, fromLang) {
  // Convert to base64
  const audioContent = audioBuffer.toString('base64');
  // Attempt "LINEAR16" or "MULAW" as needed (Twilio recording is often MP3 or WAV).
  const [response] = await speechClient.recognize({
    audio: { content: audioContent },
    config: {
      encoding: 'LINEAR16', 
      sampleRateHertz: 8000, 
      languageCode: fromLang
    }
  });
  const transcription = response.results?.[0]?.alternatives?.[0]?.transcript || '';
  console.log(`STT (${fromLang}): ${transcription}`);
  return transcription;
}

/**
 * Google Translate
 * - toLang might be "en-US" or "fr-FR", but Google Translate typically wants "en" or "fr".
 */
async function doTranslate(text, toLang) {
  // We'll trim region code. e.g. "fr" from "fr-FR"
  const shortCode = toLang.split('-')[0];
  const [translated] = await translateClient.translate(text, shortCode);
  console.log(`Translated => (${shortCode}): ${translated}`);
  return translated;
}

/**
 * TTS (Google) + serve from in-memory. Return a URL for Twilio <Play>.
 */
const crypto = require('crypto');
async function doTtsAndHostMp3(text, languageCode) {
  // For TTS, keep full BCP-47 if Google TTS supports it. e.g. "fr-FR", "uz-UZ".
  const request = {
    input: { text },
    voice: {
      languageCode,
      ssmlGender: 'NEUTRAL'
    },
    audioConfig: {
      audioEncoding: 'MP3'
    }
  };
  const [response] = await ttsClient.synthesizeSpeech(request);
  const mp3Buffer = response.audioContent;

  // Store it in memory
  const id = crypto.randomBytes(8).toString('hex');
  inMemoryAudioStore[id] = mp3Buffer;

  // Return a URL that Twilio can <Play>
  const url = `https://${reqHost()}/audio/${id}.mp3`;
  console.log(`TTS => ${url} (length ${mp3Buffer.length} bytes)`);
  return url;
}

/**
 * We need the current request's host domain so Twilio can fetch the MP3.
 * In a real environment, you'd probably just have an ENV var for "PUBLIC_URL".
 */
function reqHost() {
  // Hardcode or read from env:
  return PUBLIC_URL || 'your-app-1234.ngrok.io';
}

/**
 * Start up
 */
app.listen(PORT, () => {
  console.log(`Server listening on port ${PORT}`);
});
