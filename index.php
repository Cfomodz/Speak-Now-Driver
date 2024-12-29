<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Speak Now Driver – Real-Time Voice Translation for Food Delivery</title>
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
    <h1>Speak Now Driver</h1>
  </header>

  <!-- HERO SECTION -->
  <section class="hero">
    <div class="hero-text">
      <h2>Real-Time Translation for Food Delivery</h2>
      <p>
        Having trouble confirming orders or addresses with customers who speak another language? 
        Speak Now Driver provides a dedicated phone line that instantly translates your calls. 
        Make each delivery run smoother and earn better ratings by breaking language barriers on the spot.
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
        <h3>Basic Driver</h3>
        <div class="price">$2.99</div>
        <p>
          Includes your personal<br>
          translation phone line<br>
          + 20 free minutes monthly<br>
          Then <strong>$0.09/min</strong> afterwards
        </p>
        <!-- Replace with your sign-up link or CTA -->
        <a href="#" class="btn">Get Basic</a>
      </div>

      <!-- PLAN 2 -->
      <div class="pricing-plan">
        <h3>Pro Driver</h3>
        <div class="price">$9.99</div>
        <p>
          Perfect for busy couriers who take<br>
          multiple orders daily<br>
          Enjoy <strong>$0.045/min</strong> on all calls<br>
          No monthly call limit
        </p>
        <!-- Replace with your sign-up link or CTA -->
        <a href="#" class="btn">Go Pro</a>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <p>&copy; 2024 Speak Now Driver. Helping gig workers break language barriers—one delivery at a time.</p>
  </footer>

</body>
</html>