<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Speak Now Driver – Real-Time Voice Translation for Gig Workers</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Example Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Work Sans', sans-serif;
      background-color: #f9f9f9;
      color: #333;
      line-height: 1.5;
    }
    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1.5rem 2rem;
      background: #fff;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    header h1 {
      margin: 0;
      font-size: 1.5rem;
      font-weight: 600;
      color: #333;
    }
    .hero {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      padding: 2rem;
      background-color: #ffffff;
      max-width: 1200px;
      margin: 0 auto;
    }
    .hero-text {
      flex: 1;
      min-width: 300px;
      margin-right: 2rem;
    }
    .hero-text h2 {
      font-size: 2rem;
      margin-bottom: 1rem;
      color: #333;
    }
    .hero-text p {
      font-size: 1rem;
      margin-bottom: 1.5rem;
      color: #555;
    }
    .hero-image {
      flex: 1;
      min-width: 300px;
      text-align: center;
      margin-top: 1rem;
    }
    .hero-image img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
    }
    .section {
      max-width: 1000px;
      margin: 2rem auto;
      padding: 0 1rem;
    }
    .section h2 {
      font-size: 1.8rem;
      margin-bottom: 1rem;
      color: #333;
      text-align: center;
    }
    .section p {
      margin-bottom: 1rem;
      text-align: center;
      color: #555;
    }
    .pricing {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2rem;
      margin-top: 2rem;
    }
    .pricing-plan {
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      flex: 1 1 300px;
      max-width: 300px;
      padding: 1.5rem;
      text-align: center;
    }
    .pricing-plan h3 {
      margin-top: 0;
      margin-bottom: 0.5rem;
      font-size: 1.4rem;
      color: #333;
    }
    .pricing-plan .price {
      font-size: 2rem;
      margin: 1rem 0;
      color: #2a5d79;
    }
    .pricing-plan p {
      color: #555;
      font-size: 0.95rem;
      margin-bottom: 1rem;
      line-height: 1.4;
    }
    .pricing-plan .btn {
      display: inline-block;
      padding: 0.75rem 1.5rem;
      background-color: #2a5d79;
      color: #fff;
      border-radius: 4px;
      text-decoration: none;
      margin-top: 1rem;
      font-weight: 600;
      transition: background-color 0.2s;
    }
    .pricing-plan .btn:hover {
      background-color: #1d455a;
    }
    footer {
      text-align: center;
      padding: 1rem;
      background: #fff;
      box-shadow: 0 -1px 4px rgba(0,0,0,0.1);
      margin-top: 3rem;
    }
    footer p {
      margin: 0;
      color: #777;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <header>
    <h1>Speak Now, Driver</h1>
  </header>

  <!-- HERO SECTION -->
  <section class="hero">
    <div class="hero-text">
      <h2>Real-Time Translation for Food Delivery</h2>
      <p>
        Having trouble getting calls from customers who speak another language? 
        <strong>Speak Now, Driver</strong> provides a dedicated phone number that instantly translates your calls, live. 
        Earn better ratings and better tips* by breaking language barriers on the spot.
      </p>
    </div>
    <div class="hero-image">
      <!-- Replace with an Envato stock image: "food delivery driver talking on phone" -->
      <img 
        src="https://via.placeholder.com/500x300.png?text=Hero+Image" 
        alt="Envato stock image: gig worker or food delivery driver on phone" />
    </div>
  </section>

  <!-- ORIGIN & PURPOSE SECTION -->
  <section class="section">
    <h2>Where It All Began</h2>
    <p>
      It started with a late-night food delivery. Another driver was stuck outside a customer’s home, 
      unable to confirm directions because they didn’t share the same language. The frustration was 
      clear, and the driver felt embarrassed—and possibly on the verge of a poor rating. 
      That’s when the idea for Speak Now Driver took shape.
    </p>
    <p>
      Our goal is simple: <strong>help food delivery gig workers</strong> communicate better with customers, 
      even when they don’t share a common language. Whether you’re juggling 
      Uber Eats, DoorDash, or Grubhub, we’re here to ensure smooth deliveries, 
      happier customers, and a more confident driver experience.
    </p>
  </section>

  <!-- PRICING SECTION -->
  <section class="section">
    <h2>Transparent Pricing</h2>
    <p>
      No hidden fees or cryptic contracts. We keep it simple so you can focus on 
      delivering food and building trust—without getting stuck over a language barrier.
    </p>

    <div class="pricing">
      <!-- PLAN 1 -->
      <div class="pricing-plan">
        <h3>Side Hustle</h3>
        <div class="price">$2.99</div>
        <p>
          Includes automatic call translation<br>
          + 20 free minutes monthly<br>
          Then <strong>$0.09/min</strong> afterwards*
            <!-- *Add tooltip saying something to the effect of, "But this is rarely needed for most drivers"
        </p>
        <!-- Replace with your sign-up link / CTA -->
        <a href="#" class="btn">Get Basic</a>
      </div>

      <!-- PLAN 2 -->
      <div class="pricing-plan">
        <h3>Full Time</h3>
        <div class="price">$9.99</div>
        <p>
          Perfect for non-native speakers who need<br>
          more than help with just a few orders per day<br>
          Enjoy <strong>$0.045/min</strong> on all calls<br>
          No monthly call limit by Lu got g am
        </p>
        <!-- Replace with your sign-up link / CTA -->
        <a href="#" class="btn">Go Pro</a>
      </div>
    </div>
    <!-- Something about purchased minutes ALWAYS rolling over, for as long as their service is active, and refunded if they ever terminate or the account goes inactive for 90 days -->
  </section>

  <!-- VALUE SECTION -->
  <section class="section">
    <div class="worth-it">
      <h3>How Much Does It Cost?</h3>
      <div class="cost">
        <div class="side-image">
      <!-- Replace with an Envato stock image: "" -->
      <img 
        src="https://via.placeholder.com/250x150.png?text=Side+Image" 
        alt="Envato stock image:food delivery driver delivering food to customer" />
    </div>
        <p>
          While we've just outlined the <i>price</i>, the actual cost of <strong>Speak Now, Driver</strong> to you may suprise you.
        </p>
        <h4>Speak Now, Driver Can Pay For Itself</h4>
        <p>
          Customer calls are rare, but important.
          The average delivery will be completed wothout customer contact. When customer contact is needed due to a problem experienced on the driver's side, a translator app can be used to easily reach out to the custimer and translate their reply.
          Existing solutions work great for most situations, but an unexpected call from a customer through the delivery app represents a meaningful issue for a non English speaker.
          Every call represents a problem the customer is experiencing: they entered the wrong address, forgot a detail of their order, need additional condaments or utensils; they need something, and they need it urgently enough that they are calling you.
          Every call is a problem that can either be solved for the customer, hopfully resulting in an exceptional experience, or it will be a problem that will lead to firther frustration for them if you are not able to handle their call, even when that's due to an uncontrollable language barrier.
          Every call, in turn, represents a situation that can result in an opportunity to earn an extra tip, or one that can end up in receiving a negative review. In extream situations this can even lead to a driver being reported by the customer.
          Most people are understanding, reasonable, and will muddle through the language barrier or switch to text messaging. Others arent as accepting or accomodatong, and can take their existing frustration with the order (the reason they're trying to call in the first place) out on the driver in the form of a negative review.
          If negative experiences stack up, even if only occationally, it can and does affect overall earning potential:
          <ol>
            <li>possibly losing that delivery's base pay</li>
            <li>likely losing that delivery's tip</li>
            <li>being offered fewer gigs</li>
            <li>losing eligibility for performance-based bonuses</li>
          </ol>
          Conversely, if a user is having a hard time with their order (likely due to a mistake they made), they are <strong>often</strong> excited to give you an additional tip - either in the app or in person upon delivery along with an almost guaranteed 5-star rating on every metric.
          It's hard to know exactly what a customer "would have done" if things had gone differently with an order.
          <ul>
            <li>How much extra would they have tipped if a driver did understand what they were calling about and was able to help - when in reality they didnt.
            <li>How upset they would have been in a situation where a driver wasnt able to understand their concern on a call - when in reality they did and helped out.
            <li>How much more or less they would have tipped had a driver been able to use live translation vs having to switch to texting despite their urgent request. 
          </ul>
          but ultimately if we just say every one of these interactions could result in an overwhelmingly bad experience costing you reviews and tips, or result in a supprisingly positive experience where you go the extra mile to understand and then meet their needs; earning a great review and often additional tips, then its easy to see handling these situations with care is worth real money.
          </p>
      </div>
      <div class="value">
        <h4>How about a dollar?</h4>
        <p>
          we are pretty confident its more than a dollar, like a lot more, but let's assume it's a just dollar. lets assume you need to use the service 0 times most days, once a week on average. That's $4 a month. We charge $2.99.
          We think it's actually more like $20-$140 a month in value if you're delivering part time (One to two 2-3 min phone calls per week), but we wanted to make this service accessible to even infrequent gig workers experiencing this problem.
          Further, we wanted to underestimate so much that it's clear to you we're trying to help you make <i>you</i> more money, and not us wanting to take money out of the hands of gig workers.
          Finally, if you find yourself running out of included minutes, thats okay! The more calls you're taking, the more you will be earning from the value it adds to your service as a driver. Additional minutes are just $1 and never expire! 
        </p>
      </div>
      <div class="value-per-call">
        Base Pay + Tip (not lost) | $0.70
        <!--Tooltip: assuming just a 1 in 10 chance of an order being canceled, where all 10 of those orders are the kind requiring a call from a customer and an average $7.00 base pay + tip amount -->
        Tip increase (current order) | $2.00
        Priority Pay (App Incentive) - averaged | $0.50
        Order availability - averaged | $0.25
        Total | $3.45 in estimated additional earning potential for you, per call
      </div>
      <div class="value-chart">
        deliveries / day/week | usage | cost | value | net gains
        dormant | 0 calls | $2.99 | $1 (tooltip needed, or something more obvious - free pack of non expiring minutes added to their account) | ($1.99) cost / mo
        intermittent | ~1 call / mo | $2.99 | ~$3.40 | ~Free
        4 deliveries / day | 2 calls / mo | $2.99 | $6.80 | $3.81*
        16 / day | 1-2 calls / week | $2.99 / mo | $27.60 | $24.61
        30 / day | 15 calls / mo | $5.24 (tooltip needed) / mo | $51.00 | $45.76
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <p>&copy; 2024 Speak Now, Driver. Helping gig workers break language barriers - one delivery at a time.</p>
  </footer>

</body>
</html>