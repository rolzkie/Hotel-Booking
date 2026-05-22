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
    <link rel="stylesheet" href="styles/room.css" />
    <link rel="icon" href="assets/icon/iconred.png" />
    <title>Rooms | Aurora Hotel</title>
  </head>
  <body>
    <header class="header">
      <nav>
        <div class="nav__bar">
          <div class="logo">
         <a href="index.php"><img src="assets/svg/Logo.svg" alt="logo" class="nav-logo" /></a>
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
      <div class="slideshow-bg">
          <div class="slideshow-item" style="background-image: url('assets/room/presidential(png)/Presidential3.png')"></div>
          <div class="slideshow-item" style="background-image: url('assets/room/presidential(png)/Presidentialbed.png')"></div>
        <div class="slideshow-item" style="background-image: url('assets/room/presidential(png)/Presidentialmain.png')"></div>
        <button class="slideshow-arrow left" onclick="slideshowPrev()">&#10094;</button>
        <button class="slideshow-arrow right" onclick="slideshowNext()">&#10095;</button>
      </div>
      <div class="section__container header__container" id="home">
        <p>Premium Accommodations</p>
        <h1>Explore Aurora Hotel's<br />Exceptional Room Collection</h1>
      </div>
    </header>

    <section class="section__container room__container">
      <p class="section__subheader">OUR ROOMS</p>
      <h2 class="section__header">Select Your Perfect Room at Aurora Hotel</h2>
      <div class="room__grid">
        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/room-1.jpg" alt="Deluxe Ocean View" />
            <img class="room__img secondary" src="assets/PremierRoom.png" alt="Deluxe alternate" />
           
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/1.png" alt="option 1" /></div>
            <div class="room__thumb"><img src="assets/2.png" alt="option 2" /></div>
            <div class="room__thumb"><img src="assets/2.1.png" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Deluxe Premier Room</h4>
            <p>An upgraded deluxe experience with a more spacious interior, elegant furnishings, city or pool view, premium bedding, and complimentary breakfast for two.</p>
            <h5>From <span>₱5,200 / night</span></h5>
            <a href="Check-In-Page.php"><button class="btn">Book Now</button></a>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/room-2.jpg" alt="Executive Cityscape" />
            <img class="room__img secondary" src="assets/about.jpg" alt="City alternate" />
           
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/room-2.jpg" alt="option 1" /></div>
            <div class="room__thumb"><img src="assets/explore.jpg" alt="option 2" /></div>
            <div class="room__thumb"><img src="assets/about.jpg" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Deluxe Premier</h4>
            <p>Sophisticated urban living at Aurora Hotel with panoramic city vistas. Perfect for the business traveler seeking comfort and convenience.</p>
            <h5>From <span>₱9,499/night</span></h5>
            <a href="Check-In-Page.php"><button class="btn">Book Now</button></a>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/room-3.jpg" alt="Family Garden Retreat" />
            <img class="room__img secondary" src="assets/explore.jpg" alt="Garden alternate" />
           
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/service.jpg" alt="option 1" /></div>
            <div class="room__thumb"><img src="assets/room-3.jpg" alt="option 2" /></div>
            <div class="room__thumb"><img src="assets/1.png" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Family Garden Retreat</h4>
            <p>Spacious and welcoming family suite at Aurora Hotel, ideal for creating cherished memories with loved ones and garden views.</p>
            <h5>From <span>₱11,999/night</span></h5>
            <a href="Check-In-Page.php"><button class="btn">Book Now</button></a>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/about.jpg" alt="Junior Suite" />
            <img class="room__img secondary" src="assets/service.jpg" alt="Suite alternate" />
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/2.png" alt="option 1" /></div>
            <div class="room__thumb"><img src="assets/2.1.png" alt="option 2" /></div>
            <div class="room__thumb"><img src="assets/room-1.jpg" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Junior Suite</h4>
            <p>Bright, contemporary suite with premium fixtures and modern conveniences. Ideal for short stays at Aurora Hotel.</p>
            <h5>From <span>₱8,499/night</span></h5>
            <a href="Check-In-Page.php"><button class="btn">Book Now</button></a>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/explore.jpg" alt="Premium Retreat" />
            <img class="room__img secondary" src="assets/room-2.jpg" alt="Premium alternate" />
           
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/room-1.jpg" alt="option 1" /></div>
            <div class="room__thumb"><img src="assets/about.jpg" alt="option 2" /></div>
            <div class="room__thumb"><img src="assets/service.jpg" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Premium Retreat</h4>
            <p>Refined elegance and exceptional space with personalized touches for an unforgettable luxury stay at Aurora Hotel.</p>
            <h5>From <span>₱16,999/night</span></h5>
            <a href="Check-In-Page.php"><button class="btn">Book Now</button></a>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/service.jpg" alt="Signature Suite" />
            <img class="room__img secondary" src="assets/room-3.jpg" alt="Signature alternate" />
           
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/room-2.jpg" alt="option 1" /></div>
            <div class="room__thumb"><img src="assets/1.png" alt="option 2" /></div>
            <div class="room__thumb"><img src="assets/2.png" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Signature Suite</h4>
            <p>Aurora Hotel's crown jewel - an exclusive suite experience with premium seating, modern design, and impeccable service.</p>
            <h5>From <span>₱19,999/night</span></h5>
            <a href="Check-In-Page.php"><button class="btn">Book Now</button></a>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer" id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="logo">
            <a href="index.php"><img src="assets/logo.png" alt="logo" /></a>
          </div>
          <p class="section__description">
            Discover a world of comfort, luxury, and adventure as you explore our curated selection of rooms.
          </p>
          <a href="Check-In-Page.php"><button class="btn">Book Now</button></a>
        </div>
        <div class="footer__col">
          <h4>QUICK LINKS</h4>
          <ul class="footer__links">
            <li><a href="index.php">Home</a></li>
            <li><a href="room.php">Rooms</a></li>
            <li><a href="hotel-facilities.php">Facilities</a></li>
            <li><a href="index.php#service">Services</a></li>
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
            <li><a href=\"mailto:info@aurorahotel.com\">info@aurorahotel.com</a></li>
          </ul>
          <div class="footer__socials">
            <a href="#"><img src="assets/facebook.png" alt="facebook" /></a>
            <a href="#"><img src="assets/instagram.png" alt="instagram" /></a>
            <a href="#"><img src="assets/youtube.png" alt="youtube" /></a>
            <a href="#"><img src="assets/twitter.png" alt="twitter" /></a>
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
