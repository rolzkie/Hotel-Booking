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
    <link rel="stylesheet" href="styles/contactus.css" />
    <link rel="icon" href="assets/icon/iconred.png" />
    <title>Contact Us | Aurora Hotel</title>
  </head>
  <body>
    <header class="header">
      <nav>
        <div class="nav__bar">
          <div class="logo">
            <a href="index.php"><img src="assets/logo.png" alt="logo" /></a>
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

    <section class="section__container collaborators__section">
      <p class="section__subheader">TEAM</p>
      <h2 class="section__header">Website Collaborators</h2>
      <div class="collaborators__grid">
        <article class="collab__card">
          <div class="collab__avatar">A</div>
          <div class="collab__info">
            <h4>Andrea Cruz</h4>
            <p class="collab__role">Front-End Developer</p>
            <p>+63 912 345 6789</p>
            <div class="collab__socials">
              <a href="#" aria-label="Facebook"><i class="ri-facebook-fill"></i></a>
              <a href="#" aria-label="Instagram"><i class="ri-instagram-fill"></i></a>
              <a href="#" aria-label="GitHub"><i class="ri-github-fill"></i></a>
            </div>
          </div>
        </article>
        <article class="collab__card">
          <div class="collab__avatar">B</div>
          <div class="collab__info">
            <h4>Bernard Lim</h4>
            <p class="collab__role">UI/UX Designer</p>
            <p>+63 917 234 5678</p>
            <div class="collab__socials">
              <a href="#" aria-label="Facebook"><i class="ri-facebook-fill"></i></a>
              <a href="#" aria-label="Instagram"><i class="ri-instagram-fill"></i></a>
              <a href="#" aria-label="GitHub"><i class="ri-github-fill"></i></a>
            </div>
          </div>
        </article>
        <article class="collab__card">
          <div class="collab__avatar">C</div>
          <div class="collab__info">
            <h4>Carlos De Leon</h4>
            <p class="collab__role">Back-End Developer</p>
            <p>+63 918 456 7890</p>
            <div class="collab__socials">
              <a href="#" aria-label="Facebook"><i class="ri-facebook-fill"></i></a>
              <a href="#" aria-label="Instagram"><i class="ri-instagram-fill"></i></a>
              <a href="#" aria-label="GitHub"><i class="ri-github-fill"></i></a>
            </div>
          </div>
        </article>
        <article class="collab__card">
          <div class="collab__avatar">D</div>
          <div class="collab__info">
            <h4>Diana Salazar</h4>
            <p class="collab__role">Content Strategist</p>
            <p>+63 919 567 8901</p>
            <div class="collab__socials">
              <a href="#" aria-label="Facebook"><i class="ri-facebook-fill"></i></a>
              <a href="#" aria-label="Instagram"><i class="ri-instagram-fill"></i></a>
              <a href="#" aria-label="GitHub"><i class="ri-github-fill"></i></a>
            </div>
          </div>
        </article>
        <article class="collab__card">
          <div class="collab__avatar">E</div>
          <div class="collab__info">
            <h4>Elijah Torres</h4>
            <p class="collab__role">Project Coordinator</p>
            <p>+63 920 678 9012</p>
            <div class="collab__socials">
              <a href="#" aria-label="Facebook"><i class="ri-facebook-fill"></i></a>
              <a href="#" aria-label="Instagram"><i class="ri-instagram-fill"></i></a>
              <a href="#" aria-label="GitHub"><i class="ri-github-fill"></i></a>
            </div>
          </div>
        </article>
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
          <img src="assets/bg/services.jpeg" alt="Contact support" />
        </div>
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
              <li><a href="#">Browse All Rooms</a></li>
              <li><a href="#">Special Offers</a></li>
              <li><a href="#">Room Types & Amenities</a></li>
              <li><a href="#">Guest Reviews</a></li>
              <li><a href="#">Travel Guides</a></li>
            </ul>
          </div>
          <div class="footer__col">
            <h4>OUR SERVICES</h4>
            <ul class="footer__links">
              <li><a href="#">Concierge Service</a></li>
              <li><a href="#">Flexible Booking</a></li>
              <li><a href="#">Airport Transfers</a></li>
              <li><a href="#">Wellness & Recreation</a></li>
            </ul>
          </div>
          <div class="footer__col">
            <h4>CONTACT US</h4>
            <ul class="footer__links">
              <li><a href="mailto:info@aurorahotel.com">info@aurorahotel.com</a></li>
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
