<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
      rel="styleheet"
    />
    <link rel="styleheet" href="./style/index.css" />
    <link rel="styleheet" href="./tyles/events.css" />
    <link rel="icon" href="./Assets/iconred.png" />
    <title>Events | Rayal Park Hotel</title>
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
          <li><a href="index.php#about">About</a></li>
          <li><a href="room.php">Rooms</a></li>
          <li><a href="hotel-facilities.php">Facilities</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="reviews.php">Reviews</a></li>
          <li><a href="contactus.php">Contact</a></li>
        </ul>
        <button class="btn nav__btn">Book Now</button>
      </nav>
      <div class="section__container header__container" id="home">
        <p>Events & Experiences</p>
        <h1>Upcoming Hotel Events<br />And Special Moments.</h1>
      </div>
    </header>

    <section class="section__container event__container">
      <p class="section__subheader">EVENTS</p>
      <h2 class="section__header">Join our curated experiences this season.</h2>
      <div class="event__grid">
        <article class="event__card">
          <div class="event__image">
            <img src="./Assets/room-1.jpg" alt="Gourmet Dinner" />
          </div>
          <div class="event__details">
            <h4>Gourmet Dinner Night</h4>
            <p>Enjoy a candlelit dinner with a specially crafted seasonal menu.</p>
            <span>April 24, 2026</span>
          </div>
        </article>
        <article class="event__card">
          <div class="event__image">
            <img src="./Assets/explore.jpg" alt="Live Music" />
          </div>
          <div class="event__details">
            <h4>Live Music Lounge</h4>
            <p>Relax with live jazz and cocktails at our lobby lounge.</p>
            <span>May 2, 2026</span>
          </div>
        </article>
        <article class="event__card">
          <div class="event__image">
            <img src="./Assets/service.jpg" alt="Wellness Retreat" />
          </div>
          <div class="event__details">
            <h4>Wellness Retreat</h4>
            <p>Recharge with yoga, spa treatments, and guided wellness sessions.</p>
            <span>May 15, 2026</span>
          </div>
        </article>
        <article class="event__card">
          <div class="event__image">
            <img src="./Assets/room-2.jpg" alt="Sky Terrace" />
          </div>
          <div class="event__details">
            <h4>Sky Terrace Social</h4>
            <p>Watch the sunset with signature drinks and rooftop vibes.</p>
            <span>May 20, 2026</span>
          </div>
        </article>
        <article class="event__card">
          <div class="event__image">
            <img src="./Assets/room-3.jpg" alt="Family Brunch" />
          </div>
          <div class="event__details">
            <h4>Family Brunch</h4>
            <p>Brunch favorites for the whole family with a relaxed atmosphere.</p>
            <span>May 28, 2026</span>
          </div>
        </article>
        <article class="event__card">
          <div class="event__image">
            <img src="./Assets/about.jpg" alt="Art Showcase" />
          </div>
          <div class="event__details">
            <h4>Art & Culture Night</h4>
            <p>Discover local art, creative talks, and signature refreshments.</p>
            <span>June 5, 2026</span>
          </div>
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
            Explore our hotel's events and discover something new to enjoy every time you visit.
          </p>
          <button class="btn">Book Now</button>
        </div>
        <div class="footer__col">
          <h4>QUICK LINKS</h4>
          <ul class="footer__links">
            <li><a href="index.php">Home</a></li>
            <li><a href="room.php">Rooms</a></li>
            <li><a href="hotel-facilities.php">Facilities</a></li>
            <li><a href="reviews.php">Reviews</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>OUR SERVICES</h4>
          <ul class="footer__links">
            <li><a href="#">Concierge Assistance</a></li>
            <li><a href="#">Flexible Booking Options</a></li>
            <li><a href="#">Event Support</a></li>
            <li><a href="#">Private Dining</a></li>
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
