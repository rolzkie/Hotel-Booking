<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../styles/index.css" />
    <link rel="stylesheet" href="../styles/reviews.css" />
    <link rel="icon" href="./Assets/iconred.png" />
    <title>Reviews | Rayal Park Hotel</title>
  </head>
  <body>
    <header class="header">
      <nav>
        <div class="nav__bar">
          <div class="logo">
            <a href="index.php"><img src="./Assets/logo.png" alt="logo" /></a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="room.php">Rooms</a></li>
          <li><a href="hotel-facilities.php">Facilities</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="reviews.php">Reviews</a></li>
          <li><a href="contactus.php">Contact</a></li>
        </ul>
        <a href="Check-In-Page.php"><button class="btn nav__btn">Book Now</button></a>
      </nav>
      <div class="section__container header__container" id="home">
        <p>Guest Stories</p>
        <h1>Real Reviews<br />From Our Visitors.</h1>
      </div>
    </header>

    <section class="section__container review__container">
      <p class="section__subheader">REVIEWS</p>
      <h2 class="section__header">Hear what guests love about their stay.</h2>
      <div class="review__grid">
        <article class="review__card">
          <div class="review__avatar">
            <img src="./Assets/room-1.jpg" alt="reviewer" />
          </div>
          <h4>Anna S.</h4>
          <p>"A perfect stay from arrival to checkout. The rooms were clean, the staff were attentive, and the breakfast was exceptional."</p>
          <span>5.0 / 5.0</span>
        </article>
        <article class="review__card">
          <div class="review__avatar">
            <img src="./Assets/room-2.jpg" alt="reviewer" />
          </div>
          <h4>Michael T.</h4>
          <p>"The event night was beautiful, and the service made our anniversary unforgettable. Highly recommended!"</p>
          <span>4.9 / 5.0</span>
        </article>
        <article class="review__card">
          <div class="review__avatar">
            <img src="./Assets/room-3.jpg" alt="reviewer" />
          </div>
          <h4>Sophia R.</h4>
          <p>"Loved the decor, the amenities, and the calm ambiance. The fitness center and dining options were a great bonus."</p>
          <span>4.8 / 5.0</span>
        </article>
        <article class="review__card">
          <div class="review__avatar">
            <img src="./Assets/about.jpg" alt="reviewer" />
          </div>
          <h4>Jason P.</h4>
          <p>"Everything was on point — from check-in to room service. A wonderful place for a relaxing city escape."</p>
          <span>5.0 / 5.0</span>
        </article>
      </div>
    </section>

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="logo">
            <a href="index.php"><img src="./Assets/logo.png" alt="logo" /></a>
          </div>
          <p class="section__description">
            Read guest reviews and see why our hotel is a top choice for travelers and special occasions.
          </p>
          <a href="Check-In-Page.php"><button class="btn">Book Now</button></a>
        </div>
        <div class="footer__col">
          <h4>QUICK LINKS</h4>
          <ul class="footer__links">
            <li><a href="index.php">Home</a></li>
            <li><a href="room.php">Rooms</a></li>
            <li><a href="hotel-facilities.php">Facilities</a></li>
            <li><a href="events.php">Events</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>OUR SERVICES</h4>
          <ul class="footer__links">
            <li><a href="#">Concierge Assistance</a></li>
            <li><a href="#">Flexible Booking Options</a></li>
            <li><a href="#">Airport Transfers</a></li>
            <li><a href="#">Spa & Fitness</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>CONTACT US</h4>
          <ul class="footer__links">
            <li><a href="mailto:rayalpark@info.com">rayalpark@info.com</a></li>
          </ul>
          <div class="footer__socials">
            <a href="#"><img src="./Assets/facebook.png" alt="facebook" /></a>
            <a href="#"><img src="./Assets/instagram.png" alt="instagram" /></a>
            <a href="#"><img src="./Assets/youtube.png" alt="youtube" /></a>
            <a href="#"><img src="./Assets/twitter.png" alt="twitter" /></a>
          </div>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2026 Rayal Park Hotel. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
  </body>
</html>
