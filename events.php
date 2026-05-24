<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles/index.css" />
    <link rel="stylesheet" href="styles/events.css" />
     <link rel="icon" href="assets/icon/ICON.png" />
    <title>Events | Aurora Hotel</title>
  </head>
  <body>
    <div id="loader-wrapper">
      <div class="loader">
        <img src="./assets/svg/ICON.svg" alt="">
      </div>
    </div>
    <header class="header">
      <nav>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
        <a href="index.php" class="nav__brand"><img src="assets/svg/AURORA.svg" alt="Aurora logo" /></a>
        <a href="Check-In-Page.php" class="btn nav__btn">Book Now</a>
      <ul class="nav__links" id="nav-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="room.php">Rooms</a></li>
          <li><a href="hotel-facilities.php">Facilities</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="reviews.php">Reviews</a></li>
          <li><a href="contactus.php">Contact</a></li>
        </ul>
      </nav>
      <section class="section__container event__container">
      <p class="section__subheader">EVENTS</p>
      <h2 class="section__header">Join our curated experiences this season.</h2>
      <div class="event__grid">
        <article class="event__card">
          <div class="event__image">
            <img src="assets/events/GourmetDinnerNight.png" alt="Gourmet Dinner" />
          </div>
          <div class="event__details">
            <h4>Gourmet Dinner Night</h4>
            <p>Enjoy a candlelit dinner with a specially crafted seasonal menu.</p>
            <span>April 24, 2026</span>
          </div>
        </article>
        <article class="event__card">
          <div class="event__image">
            <img src="assets/events/LiveMusicLounge.png" alt="Live Music" />
          </div>
          <div class="event__details">
            <h4>Live Music Lounge</h4>
            <p>Relax with live jazz and cocktails at our lobby lounge.</p>
            <span>May 2, 2026</span>
          </div>
        </article>
        <article class="event__card">
          <div class="event__image">
            <img src="assets/facilities/gym 1.jpeg" alt="Wellness Retreat" />
          </div>
          <div class="event__details">
            <h4>Wellness Retreat</h4>
            <p>Recharge with yoga, spa treatments, and guided wellness sessions.</p>
            <span>May 15, 2026</span>
          </div>
        </article>
        <article class="event__card">
          <div class="event__image">
            <img src="assets/events/Skyterracesocial.png" alt="Sky Terrace" />
          </div>
          <div class="event__details">
            <h4>Sky Terrace Social</h4>
            <p>Watch the sunset with signature drinks and rooftop vibes.</p>
            <span>May 20, 2026</span>
          </div>
        </article>
        <article class="event__card">
          <div class="event__image">
            <img src="assets/events/Family brunch.png" alt="Family Brunch" />
          </div>
          <div class="event__details">
            <h4>Family Brunch</h4>
            <p>Brunch favorites for the whole family with a relaxed atmosphere.</p>
            <span>May 28, 2026</span>
          </div>
        </article>
        <article class="event__card">
          <div class="event__image">
            <img src="assets/events/Art&Culture Night.png" alt="Art Showcase" />
          </div>
          <div class="event__details">
            <h4>Art & Culture Night</h4>
            <p>Discover local art, creative talks, and signature refreshments.</p>
            <span>June 5, 2026</span>
          </div>
        </article>
      </div>
    </section>

     <footer class="footer" id="contact">
        <div class="section__container footer__container">
          <div class="footer__col">
            <div class="logo">
              <a href="#home"><img src="assets/icon/ICON.png" alt="logo" /></a>
            </div>
            <p class="section__description">
              Discover a world of elegance, luxury, and unforgettable moments as you explore Aurora Hotel's carefully curated accommodations and world-class amenities.
            </p>
            <a href="Check-In-Page.php"><button class="btn">Book Now</button></a>
          </div>
          <div class="footer__col">
            <h4>QUICK LINKS</h4>
            <ul class="footer__links">
              <li><a href="room.php">Browse All Rooms</a></li>
              <li><a href="room-types.php">Room Types & Amenities</a></li>
              <li><a href="reviews.php">Guest Reviews</a></li>
              <li><a href="events.php">Events</a></li>
            </ul>
          </div>
          <div class="footer__col">
            <h4>OUR SERVICES</h4>
            <ul class="footer__links">
              <li>Concierge Service</li>
              <li>Flexible Booking</li>
              <li>Airport Transfers</li>
              <li>Wellness & Recreation</li>
            </ul>
          </div>
          <div class="footer__col">
            <h4>CONTACT US</h4>
            <ul class="footer__links">
                <li><a href="mailto:aurora.hotelresort@gmail.com">aurora.hotelresort@gmail.com</a></li>
            </ul>
            <div class="footer__socials">
              <a href="#"><img src="assets/icon/facebook.png" alt="facebook" /></a>
              <a href="#"><img src="assets/icon/instagram.png" alt="instagram" /></a>
              <a href="#"><img src="assets/icon/youtube.png" alt="youtube" /></a>
              <a href="#"><img src="assets/icon/twitter.png" alt="twitter" /></a>
            </div>
          </div>
        </div>
        <div class="footer__bar">
          Copyright © 2026 Aurora Hotel. All rights reserved.
        </div>
      </footer>

      <script src="https://unpkg.com/scrollreveal"></script>
      <script src="Js/main.js"></script>
    </body>
  </html>
