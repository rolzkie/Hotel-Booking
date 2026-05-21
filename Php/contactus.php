<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./Styles/index.css" />
    <link rel="stylesheet" href="./Styles/contactus.css" />
    <link rel="icon" href="./Assets/iconred.png" />
    <title>Contact Us | Rayal Park Hotel</title>
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
          <li><a href="#contact">Contact</a></li>
        </ul>
        <button class="btn nav__btn">Book Now</button>
      </nav>
      <div class="section__container header__container" id="home">
        <p>Contact & Assistance</p>
        <h1>Get In Touch<br />With Our Team.</h1>
      </div>
    </header>

    <section class="section__container contact__container">
      <div class="contact__overview">
        <p class="section__subheader">CONTACT US</p>
        <h2 class="section__header">Need help with booking or a stay?</h2>
        <p class="section__description">
          Reach out to our guest services team for quick assistance, tailored recommendations, and the latest offers.
        </p>
      </div>
      <div class="contact__grid">
        <div class="contact__card contact__phone">
          <h4>Phone Number</h4>
          <p>(632) 8-525-3000</p>
          <p>(632) 8-525-3001</p>
        </div>
        <div class="contact__card contact__address">
          <h4>Office Address</h4>
          <p>Roxas Boulevard, corner Dr. J. Quintos Street, Manila, Philippines 1000</p>
        </div>
        <div class="contact__card contact__hours">
          <h4>Office Hours</h4>
          <p>Mon - Sun / 8:00 AM - 9:00 PM</p>
        </div>
      </div>
    </section>

    <section class="section__container contact__form__section">
      <div class="contact__form__wrapper">
        <div class="contact__form__content">
          <p class="section__subheader">SEND US A MESSAGE</p>
          <h2 class="section__header">We are here for your questions.</h2>
          <form class="contact__form">
            <div class="form__row">
              <input type="text" placeholder="Full Name" />
              <input type="email" placeholder="Email Address" />
            </div>
            <div class="form__row">
              <input type="text" placeholder="Phone" />
              <input type="text" placeholder="Subject" />
            </div>
            <textarea placeholder="Write your message here"></textarea>
            <button class="btn">Submit</button>
          </form>
        </div>
        <div class="contact__image">
          <img src="./Assets/service.jpg" alt="Contact support" />
        </div>
      </div>
    </section>

    <footer class="footer" id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="logo">
            <a href="index.php"><img src="./Assets/logo.png" alt="logo" /></a>
          </div>
          <p class="section__description">
            Discover a world of comfort, luxury, and adventure as you explore our curated selection of rooms.
          </p>
          <button class="btn">Book Now</button>
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
            <li><a href="#">Wellness & Recreation</a></li>
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
