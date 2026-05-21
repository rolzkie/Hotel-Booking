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
    <link rel="icon" href="assets/iconred.png" />
    <title>Rooms | Rayal Park Hotel</title>
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
          <li><a href="../index.php">Home</a></li>
          <li><a href="room.php">Rooms</a></li>
          <li><a href="hotel-facilities.php">Facilities</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="reviews.php">Reviews</a></li>
          <li><a href="contactus.php">Contact</a></li>
        </ul>
        <a href="Check-In-Page.php"><button class="btn nav__btn">Book Now</button></a>
      </nav>
      <div class="slideshow-bg">
        <div class="slideshow-item" style="background-image: url('assets/room-1.jpg')"></div>
        <div class="slideshow-item" style="background-image: url('assets/room-2.jpg')"></div>
        <div class="slideshow-item" style="background-image: url('assets/room-3.jpg')"></div>
        <button class="slideshow-arrow left" onclick="slideshowPrev()">&#10094;</button>
        <button class="slideshow-arrow right" onclick="slideshowNext()">&#10095;</button>
      </div>
      <div class="section__container header__container" id="home">
        <p>Elegant Stays & Comfort</p>
        <h1>I-browse ang Aming Mga Kwarto<br />Dinisenyo Para sa Bawat Panatili.</h1>
      </div>
    </header>

    <section class="section__container room__container">
      <p class="section__subheader">MGA KWARTO</p>
      <h2 class="section__header">Piliin ang perpektong kwarto para sa inyong susunod na bakasyon.</h2>
      <div class="room__grid">
        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/room-1.jpg" alt="Deluxe Ocean View" />
            <img class="room__img secondary" src="assets/PremierRoom.png" alt="Deluxe alternate" />
            <div class="room__hover-btn">
              <button class="btn">Tingnan ang Detalye</button>
            </div>
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
            <h4>Deluxe Ocean View</h4>
            <p>Gumising sa nakakagandang view ng dagat sa isang stylish at malawak na suite.</p>
            <h5>Mula sa <span>$299/gabi</span></h5>
            <a href="Check-In-Page.php"><button class="btn">Mag-Book Na</button></a>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/room-2.jpg" alt="Executive Cityscape" />
            <img class="room__img secondary" src="assets/about.jpg" alt="City alternate" />
            <div class="room__hover-btn">
              <button class="btn">Tingnan ang Detalye</button>
            </div>
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
            <h4>Executive Cityscape</h4>
            <p>Stylish na kaginhawahan at view ng lungsod sa premium na urban retreat.</p>
            <h5>Mula sa <span>$219/gabi</span></h5>
            <a href="Check-In-Page.php"><button class="btn">Mag-Book Na</button></a>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/room-3.jpg" alt="Family Garden Retreat" />
            <img class="room__img secondary" src="assets/explore.jpg" alt="Garden alternate" />
            <div class="room__hover-btn">
              <button class="btn">Tingnan ang Detalye</button>
            </div>
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
            <p>Malawak, mainit, at perpekto para sa mga pamilyang naghahanap ng extra comfort.</p>
            <h5>Mula sa <span>$249/gabi</span></h5>
            <a href="Check-In-Page.php"><button class="btn">Mag-Book Na</button></a>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/about.jpg" alt="Junior Suite" />
            <img class="room__img secondary" src="assets/service.jpg" alt="Suite alternate" />
            <div class="room__hover-btn">
              <button class="btn">Tingnan ang Detalye</button>
            </div>
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
            <p>Isang maliwanag na suite na may premium amenities, perpekto para sa maikling panatili.</p>
            <h5>Mula sa <span>$179/gabi</span></h5>
            <a href="Check-In-Page.php"><button class="btn">Mag-Book Na</button></a>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/explore.jpg" alt="Premium Retreat" />
            <img class="room__img secondary" src="assets/room-2.jpg" alt="Premium alternate" />
            <div class="room__hover-btn">
              <button class="btn">Tingnan ang Detalye</button>
            </div>
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
            <p>Refined design, extra space, at thoughtful touches para sa luxury stay.</p>
            <h5>Mula sa <span>$339/gabi</span></h5>
            <a href="Check-In-Page.php"><button class="btn">Mag-Book Na</button></a>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/service.jpg" alt="Signature Suite" />
            <img class="room__img secondary" src="assets/room-3.jpg" alt="Signature alternate" />
            <div class="room__hover-btn">
              <button class="btn">Tingnan ang Detalye</button>
            </div>
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
            <p>Exclusive suite experience na may premium seating at modern design.</p>
            <h5>Mula sa <span>$399/gabi</span></h5>
            <a href="Check-In-Page.php"><button class="btn">Mag-Book Na</button></a>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer" id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="logo">
            <a href="../index.php"><img src="assets/logo.png" alt="logo" /></a>
          </div>
          <p class="section__description">
            Discover a world of comfort, luxury, and adventure as you explore our curated selection of rooms.
          </p>
          <a href="Check-In-Page.php"><button class="btn">Book Now</button></a>
        </div>
        <div class="footer__col">
          <h4>QUICK LINKS</h4>
          <ul class="footer__links">
            <li><a href="../index.php">Home</a></li>
            <li><a href="room.php">Rooms</a></li>
            <li><a href="hotel-facilities.php">Facilities</a></li>
            <li><a href="../index.php#service">Services</a></li>
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
            <a href="#"><img src="assets/facebook.png" alt="facebook" /></a>
            <a href="#"><img src="assets/instagram.png" alt="instagram" /></a>
            <a href="#"><img src="assets/youtube.png" alt="youtube" /></a>
            <a href="#"><img src="assets/twitter.png" alt="twitter" /></a>
          </div>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2026 Rayal Park Hotel. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../Js/main.js"></script>
  </body>
</html>
