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
    <link rel="icon" href="assets/iconred.png" />
    <title>Facilities | Rayal Park Hotel</title>
  </head>
  <body>
    <header class="header">
      <nav>
        <div class="nav__bar">
          <div class="logo">
            <a href="../index.php"><img src="assets/logo.png" alt="logo" /></a>
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
      <div class="slideshow-bg">
        <div class="slideshow-item" style="background-image: url('assets/service.jpg')"></div>
        <div class="slideshow-item" style="background-image: url('assets/explore.jpg')"></div>
        <div class="slideshow-item" style="background-image: url('assets/header.jpg')"></div>
        <button class="slideshow-arrow left" onclick="slideshowPrev()">&#10094;</button>
        <button class="slideshow-arrow right" onclick="slideshowNext()">&#10095;</button>
      </div>
      <div class="section__container header__container" id="home">
        <p>Premium Convenience</p>
        <h1>Tuklasin ang Mga Pasilidad ng Hotel<br />Binuo Para sa Inyong Kaginhawahan.</h1>
      </div>
    </header>

    <section class="section__container room__container">
      <p class="section__subheader">MGA PASILIDAD</p>
      <h2 class="section__header">I-explore ang mga kaginhawahan at amenities na available sa aming hotel.</h2>
      <div class="room__grid">
        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/service.jpg" alt="Spa & Wellness" />
            <img class="room__img secondary" src="assets/about.jpg" alt="Spa alternate" />
            <div class="room__hover-btn">
              <button class="btn">Tingnan ang Pasilidad</button>
            </div>
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/1.png" alt="spa" /></div>
            <div class="room__thumb"><img src="assets/2.png" alt="wellness" /></div>
            <div class="room__thumb"><img src="assets/2.1.png" alt="treatment" /></div>
          </div>
          <div class="room__card__details">
            <h4>Spa & Wellness</h4>
            <p>Mag-relax sa luxury spa treatments, sauna, at wellness therapies.</p>
            <h5>Available <span>24/7</span></h5>
            <a href="Check-In-Page.php"><button class="btn">Mag-Reserve</button></a>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/explore.jpg" alt="Pool & Terrace" />
            <img class="room__img secondary" src="assets/room-1.jpg" alt="Pool alternate" />
            <div class="room__hover-btn">
              <button class="btn">Tingnan ang Pasilidad</button>
            </div>
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/room-1.jpg" alt="pool" /></div>
            <div class="room__thumb"><img src="assets/2.png" alt="sunset" /></div>
            <div class="room__thumb"><img src="assets/about.jpg" alt="terrace" /></div>
          </div>
          <div class="room__card__details">
            <h4>Pool & Terrace</h4>
            <p>Lumangoy, mag-lounge, at mag-enjoy ng views mula sa aming stylish outdoor terrace.</p>
            <h5>Open <span>7am - 10pm</span></h5>
            <a href="Check-In-Page.php"><button class="btn">Mag-Reserve</button></a>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/header.jpg" alt="Gym & Fitness" />
            <img class="room__img secondary" src="assets/service.jpg" alt="Gym alternate" />
            <div class="room__hover-btn">
              <button class="btn">Tingnan ang Pasilidad</button>
            </div>
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/2.1.png" alt="fitness" /></div>
            <div class="room__thumb"><img src="assets/room-2.jpg" alt="cardio" /></div>
            <div class="room__thumb"><img src="assets/1.png" alt="weights" /></div>
          </div>
          <div class="room__card__details">
            <h4>Gym & Fitness</h4>
            <p>State-of-the-art training equipment at personal workout spaces.</p>
            <h5>Open <span>6am - 11pm</span></h5>
            <a href="Check-In-Page.php"><button class="btn">Mag-Reserve</button></a>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/about.jpg" alt="Dining & Bar" />
            <img class="room__img secondary" src="assets/room-3.jpg" alt="Dining alternate" />
            <div class="room__hover-btn">
              <button class="btn">Tingnan ang Pasilidad</button>
            </div>
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/room-3.jpg" alt="dining" /></div>
            <div class="room__thumb"><img src="assets/room-2.jpg" alt="bar" /></div>
            <div class="room__thumb"><img src="assets/1.png" alt="restaurant" /></div>
          </div>
          <div class="room__card__details">
            <h4>Dining & Bar</h4>
            <p>Tamasahin ang curated menus, cocktails, at coffee sa relaxing space.</p>
            <h5>Open <span>7am - 12am</span></h5>
            <a href="Check-In-Page.php"><button class="btn">Mag-Reserve</button></a>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/room-2.jpg" alt="Conference Hall" />
            <img class="room__img secondary" src="assets/explore.jpg" alt="Conference alternate" />
            <div class="room__hover-btn">
              <button class="btn">Tingnan ang Pasilidad</button>
            </div>
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/service.jpg" alt="conference" /></div>
            <div class="room__thumb"><img src="assets/2.png" alt="events" /></div>
            <div class="room__thumb"><img src="assets/1.png" alt="meeting" /></div>
          </div>
          <div class="room__card__details">
            <h4>Conference Hall</h4>
            <p>Flexible meeting space para sa events, presentations, at seminars.</p>
            <h5>Up to <span>120 guests</span></h5>
            <a href="Check-In-Page.php"><button class="btn">Mag-Reserve</button></a>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/room-1.jpg" alt="Lounge & Lobby" />
            <img class="room__img secondary" src="assets/service.jpg" alt="Lounge alternate" />
            <div class="room__hover-btn">
              <button class="btn">Tingnan ang Pasilidad</button>
            </div>
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/about.jpg" alt="lounge" /></div>
            <div class="room__thumb"><img src="assets/2.1.png" alt="lobby" /></div>
            <div class="room__thumb"><img src="assets/room-3.jpg" alt="social" /></div>
          </div>
          <div class="room__card__details">
            <h4>Lounge & Lobby</h4>
            <p>Magsama, mag-relax, at mag-unwind sa aming beautifully furnished lounge area.</p>
            <h5>Open <span>All day</span></h5>
            <a href="Check-In-Page.php"><button class="btn">Mag-Reserve</button></a>
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
            I-explore ang hotel amenities na ginagawang effortless at memorable ang bawat panatili.
          </p>
          <a href="Check-In-Page.php"><button class="btn">Mag-Book Na</button></a>
        </div>
        <div class="footer__col">
          <h4>MABILIS NA LINKS</h4>
          <ul class="footer__links">
            <li><a href="../index.php">Home</a></li>
            <li><a href="room.php">Mga Kwarto</a></li>
            <li><a href="hotel-facilities.php">Pasilidad</a></li>
            <li><a href="../index.php#service">Serbisyo</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>ANG AMING SERBISYO</h4>
          <ul class="footer__links">
            <li><a href="#">Concierge Assistance</a></li>
            <li><a href="#">Flexible Booking Options</a></li>
            <li><a href="#">Airport Transfers</a></li>
            <li><a href="#">Wellness & Recreation</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>MAKIPAG-UGNAYAN SA AMIN</h4>
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
        Copyright © 2026 Rayal Park Hotel. Lahat ng karapatan ay nireserba.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../Js/main.js"></script>
  </body>
</html>


















