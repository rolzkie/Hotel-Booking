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
    <link rel="stylesheet" href="styles/facilities.css" />
    <link rel="stylesheet" href="styles/room.css" />
    <link rel="icon" href="assets/iconred.png" />
    <title>Facilities | Aurora Hotel</title>
  </head>
  <body>
    <header class="header">
      <video autoplay muted loop id="header-Video">
        <source src="assets/vid/headerVideo.mp4">
      </video>
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
        <a href="Check-In-Page.php"><button class="btn nav__btn">Mag-Book Na</button></a>
      </nav>
      <div class="section__container header__container" id="home">
        <p>World-Class Amenities</p>
        <h1>Discover Aurora Hotel's<br />Premium Facilities</h1>
      </div>
    </header>

    <section class="section__container room__container">
      <p class="section__subheader">FACILITIES</p>
      <h2 class="section__header">Experience Excellence at Aurora Hotel</h2>
      <div class="room__grid">
        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/facilities/spa 1.jpeg" alt="Spa & Wellness" />
            <img class="room__img secondary" src="assets/facilities/spa 2.jpeg" alt="Spa alternate" />
          
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/facilities/spa 1.jpeg" alt="spa" /></div>
            <div class="room__thumb"><img src="assets/facilities/spa 2.jpeg" alt="wellness" /></div>
          </div>
          <div class="room__card__details">
            <h4>Spa & Wellness</h4>
            <p>Indulge in luxurious spa treatments, sauna, and wellness therapies at Aurora Hotel. Complete rejuvenation awaits.</p>
            <span>Available <span>24/7</span></span>
            <div class="room__card__actions">
              <a href="hotel-facilities.php" class="btn btn--alt">View Details</a>
            </div>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/facilities/pool 1.jpeg" alt="Pool & Terrace" />
            <img class="room__img secondary" src="assets/facilities/pool 2.jpeg" alt="Pool alternate" />
          
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/facilities/pool 3.jpeg" alt="pool" /></div>
            <div class="room__thumb"><img src="assets/facilities/pool 6.jpeg" alt="sunset" /></div>
            <div class="room__thumb"><img src="assets/facilities/pool 5.jpeg" alt="terrace" /></div>
          </div>
          <div class="room__card__details">
            <h4>Pool & Terrace</h4>
            <p>Swim, relax, and enjoy breathtaking views from Aurora Hotel's elegant outdoor terrace area.</p>
            <span>Open <span>7am - 10pm</span></span>
            <div class="room__card__actions">
              <a href="hotel-facilities.php" class="btn btn--alt">View Details</a>
            </div>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/facilities/gym 1.jpeg" alt="Gym & Fitness" />
            <img class="room__img secondary" src="assets/facilities/gym 2.jpeg" alt="Gym alternate" />
          
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/facilities/gym 1.jpeg" alt="fitness" /></div>
            <div class="room__thumb"><img src="assets/facilities/gym 2.jpeg" alt="cardio" /></div>
            <div class="room__thumb"><img src="assets/facilities/small gym 1.jpeg" alt="weights" /></div>
          </div>
          <div class="room__card__details">
            <h4>Gym & Fitness</h4>
            <p>State-of-the-art equipment and personal training spaces at Aurora Hotel for your fitness journey.</p>
            <span>Open <span>6am - 11pm</span></span>
            <div class="room__card__actions">
              <a href="hotel-facilities.php" class="btn btn--alt">View Details</a>
            </div>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/facilities/bar 1.jpeg" alt="Dining & Bar" />
            <img class="room__img secondary" src="assets/facilities/bar 2.jpeg" alt="Dining alternate" />
          
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/facilities/bar 1.jpeg" alt="dining" /></div>
            <div class="room__thumb"><img src="assets/facilities/bar 2.jpeg" alt="bar" /></div>
            <div class="room__thumb"><img src="assets/facilities/bar with human.jpeg" alt="restaurant" /></div>
          </div>
          <div class="room__card__details">
            <h4>Dining & Bar</h4>
            <p>Enjoy gourmet cuisine, signature cocktails, and premium coffee in Aurora Hotel's elegant dining venues.</p>
            <span>Open <span>7am - 12am</span></span>
            <div class="room__card__actions">
              <a href="hotel-facilities.php" class="btn btn--alt">View Details</a>
            </div>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/facilities/conference room 1.jpeg" alt="Conference Hall" />
            <img class="room__img secondary" src="assets/facilities/conference room 2.jpeg" alt="Conference alternate" />
          
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/facilities/conference room 1.jpeg" alt="conference" /></div>
            <div class="room__thumb"><img src="assets/facilities/conference room 2.jpeg" alt="events" /></div>
            <div class="room__thumb"><img src="assets/facilities/conference room 3.jpeg" /></div>
          </div>
          <div class="room__card__details">
            <h4>Conference Hall</h4>
            <p>Modern meeting spaces perfect for corporate events, presentations, and seminars at Aurora Hotel.</p>
            <span>Up to <span>120 guests</span></span>
            <div class="room__card__actions">
              <a href="hotel-facilities.php" class="btn btn--alt">View Details</a>
            </div>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/facilities/lobby 1.jpeg" alt="Lounge & Lobby" />
            <img class="room__img secondary" src="assets/facilities/lobby 2.jpeg" alt="Lounge alternate" />
          
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__card__details">
            <h4>Lounge & Lobby</h4>
            <p>Meet, relax, and unwind in Aurora Hotel's beautifully designed social spaces and elegant lobby.</p>
            <span>Open <span>All day</span></span>
            <div class="room__card__actions">
              <a href="hotel-facilities.php" class="btn btn--alt">View Details</a>
            </div>
          </div>
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
