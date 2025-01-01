# Speak-Now-Driver

## Overview

Speak-Now-Driver is an open source real-time voice translation service designed specifically for gig workers, such as food delivery drivers. It provides a dedicated phone number that translates calls live, helping drivers communicate effectively with customers who speak different languages. This service aims to improve customer satisfaction, increase driver ratings, and potentially boost tips by breaking down language barriers.

## Features

- **Real-Time Translation**: Instantly translates phone calls between drivers and customers.
- **Dedicated Phone Number**: Each driver receives a unique phone number for translation services.
- **Flexible Pricing Plans**: Offers different pricing plans to suit the needs of part-time and full-time gig workers.
- **Increased Earnings Potential**: By improving communication, drivers can enhance their service quality, leading to better reviews and tips.

## How It Works

1. **Inbound Call Handling**: When a customer calls, the system connects the driver and records the customer's message for translation.
2. **Speech-to-Text (STT)**: Converts the recorded audio into text using Google Cloud's Speech-to-Text service.
3. **Translation**: Translates the text into the driver's preferred language using Google Cloud's Translate API.
4. **Text-to-Speech (TTS)**: Converts the translated text back into speech for the driver using Google Cloud's Text-to-Speech service.
5. **Response Handling**: The driver can respond, and the process repeats, translating the driver's message back to the customer.

## Technical Details

- **Backend**: Built with Node.js and Express.
- **APIs Used**: Twilio for call handling, Google Cloud for STT, TTS, and translation.
- **In-Memory Audio Storage**: Temporary storage for TTS audio files, suitable for MVP. Consider using cloud storage for production.

## Installation

1. Clone the repository.
2. Install dependencies using `npm install`.
3. Set up environment variables in a `.env` file:
   - `TWILIO_ACCOUNT_SID`
   - `TWILIO_AUTH_TOKEN`
   - `DRIVER_PHONE_NUMBER`
   - `DRIVER_LANG_BCP47`
   - `PUBLIC_URL`
   - `PORT` (default: 3000)
4. Start the server with `npm start`.

## Usage

- **Inbound Calls**: Handled by the `/call-inbound` endpoint.
- **Recording Processing**: Managed by the `/process-recording` endpoint.
- **Audio Serving**: TTS audio files are served from the `/audio/:id.mp3` endpoint.

## License

This project is licensed under the GNU General Public License v3.0. See the [LICENSE](LICENSE) file for details.

## Contributing

Contributions are welcome! Please read the [CONTRIBUTING](CONTRIBUTING.md) guidelines before submitting a pull request.

## Contact and Support

For questions or support, please open an issue or submit a pull request on the GitHub repository. We welcome contributions and feedback from the community!
