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
      <link rel="icon" href="assets/icon/ICON.png" />
      <title>Aurora Hotel | Your Perfect Escape Awaits</title>
    </head>
    <body>
      <div id="loader-wrapper">
        <div class="loader">
          <img src="./assets/svg/ICON.svg" alt="">
        </div>
      </div>

      <header class="header">
        <video autoplay muted loop id="header-Video">
          <source src="assets/vid/headerVidNew.mp4">
        </video>
        <nav>
          <div class="nav__bar">
            <div class="logo">
              <a href="index.php"><img src="assets/svg/AURORA.svg" alt="logo" class="nav-logo" /></a>
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
          <a href="Check-In-Page.php" class="btn nav__btn">Book Now</a>
        </nav>
        <div class="section__container header__container" id="home">
          <p>Elegance - Comfort - Excellence</p>
          <h1>Welcome to <span>Aurora Hotel</span><br />Your Perfect Escape Awaits.</h1>
        </div>
      </header>

      <section class="section__container about__container" id="about">
        <div class="about__image">
          <img src="assets/bg/modelsha.png" alt="about" />
        </div>
        <div class="about__content">
          <p class="section__subheader">ABOUT US</p>
          <h2 class="section__header">Experience Luxury at Aurora Hotel</h2>
          <p class="section__description">
            Aurora Hotel stands as a beacon of hospitality, dedicated to providing exceptional accommodations, personalized service, and seamless bookings. We ensure that every traveler begins their journey with confidence and unforgettable memories at our premium property.
          </p>
        </div>
      </section>

      <section class="section__container room__container">
        <p class="section__subheader">OUR ROOMS</p>
        <h2 class="section__header">Discover Aurora Hotel's Finest Accommodations</h2>
        <div class="room__grid">
          <div class="room__card">
            <div class="room__card__image">
              <img class="room__img primary" src="assets/rooms/deluxepremier/PremierBed.png" alt="Deluxe Ocean View" />
              <img class="room__img secondary" src="assets/rooms/deluxepremier/premierlivingroom.png" alt="Deluxe Ocean View alternate" /> <div class="room__card__icons">
                <span><i class="ri-heart-fill"></i></span>
              </div>
            </div>
            <div class="room__thumbs">
              <div class="room__thumb"><img src="assets/rooms/deluxepremier/premiercr.jpeg" alt="option 1" /></div>
              <div class="room__thumb"><img src="assets/rooms/deluxepremier/2.png" alt="option 2" /></div>
              <div class="room__thumb"><img src="assets/rooms/deluxepremier/2.1.png" alt="option 3" /></div>
            </div>
            <div class="room__card__details">
              <h4>Deluxe Premier Room</h4>
              <p>
                An upgraded deluxe experience with a more spacious interior, elegant furnishings, city or pool view, premium bedding, and complimentary breakfast for two.
              </p>
              <span>₱5,200 / night</span>
              <div class="room__card__actions">
                <a href="Check-In-Page.php" class="btn">Book Now</a>
              </div>
            </div>
          </div>
          <div class="room__card">
            <div class="room__card__image">
              <img class="room__img primary" src="assets/rooms/executive(jpeg)/executive1.jpeg" alt="Executive Cityscape Room" />
              <img class="room__img secondary" src="assets/rooms/executive(jpeg)/executive1.1.jpeg " alt="Executive Cityscape alternate" />
              <div class="room__card__icons">
                <span><i class="ri-heart-fill"></i></span>
              </div>
            </div>
            <div class="room__thumbs">
              <div class="room__thumb"><img src="assets/rooms/executive(jpeg)/executive2.jpeg" alt="option 1" /></div>
              <div class="room__thumb"><img src="assets/rooms/executive(jpeg)/executive3.1.jpeg" alt="option 2" /></div>
              <div class="room__thumb"><img src="assets/rooms/executive(jpeg)/executive4.jpeg" alt="option 3" /></div>
            </div>
            <div class="room__card__details">
              <h4>Executive Cityscape Room</h4>
              <p>
               Designed for business and luxury travelers, this suite includes a separate living area, work desk, king-sized bed, high-speed Wi-Fi, minibar, and exclusive comfort for longer stays.
              </p>
            <span>₱7,800 / night</span>
              <div class="room__card__actions">
                <a href="Check-In-Page.php" class="btn">Book Now</a>
              </div>
            </div>
          </div>
          <div class="room__card">
            <div class="room__card__image">
              <img class="room__img primary" src="assets/rooms/presidential(png)/presidentialbed.jpeg" alt="Family Garden Retreat" />
              <img class="room__img secondary" src="assets/rooms/presidential(png)/GuestRoom.jpeg" alt="Family Garden alternate" />
              <div class="room__card__icons">
                <span><i class="ri-heart-fill"></i></span>
              </div>
            </div>
            <div class="room__thumbs">
              <div class="room__thumb"><img src="assets/rooms/presidential(png)/MasterBathroom.jpeg" alt="option 1" /></div>
              <div class="room__thumb"><img src="assets/rooms/presidential(png)/livingroom.jpeg" alt="option 2" /></div>
              <div class="room__thumb"><img src="assets/rooms/presidential(png)/winestorage.jpeg" alt="option 3" /></div>
            </div>
            <div class="room__card__details">
              <h4>Presidential Suite</h4>
              <p>
               The most luxurious accommodation in the hotel featuring a grand living room, dining area, master bedroom, premium furnishings, panoramic views, VIP amenities, and personalized service for an unforgettable experience.
              </p>
              <span>₱25,000 / night</span>
              <div class="room__card__actions">
                <a href="Check-In-Page.php" class="btn">Book Now</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="service" id="service">
        <div class="section__container service__container">
          <div class="service__image">
            <img src="assets/bg/services.jpeg" alt="Aurora Hotel services" />
          </div>
          <div class="service__content">
            <p class="section__subheader">SERVICES</p>
            <h2 class="section__header">Excellence in Every Detail</h2>
            <ul class="service__list">
              <li>
                <span><i class="ri-shield-star-line"></i></span>
                Premium Security & Safety
              </li>
              <li>
                <span><i class="ri-24-hours-line"></i></span>
                24-Hour Concierge Service
              </li>
              <li>
                <span><i class="ri-headphone-line"></i></span>
                Event & Meeting Facilities
              </li>
              <li>
                <span><i class="ri-map-2-line"></i></span>
                Travel Concierge & Local Guides
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class="section__container banner__container">
        <div class="banner__content">
          <div class="banner__card">
            <h4>50+</h4>
            <p>Premium Rooms & Suites</p>
          </div>
          <div class="banner__card">
            <h4>5000+</h4>
            <p>Happy Guests Served</p>
          </div>
          <div class="banner__card">
            <h4>20+</h4>
            <p>Years of Excellence</p>
          </div>
        </div>
      </section>

      <section class="explore" id="events">
        <p class="section__subheader">EVENTS</p>
        <h2 class="section__header">Special Experiences at Aurora Hotel</h2>
        <div class="explore__bg">
          <div class="explore__content">
            <p class="section__description">March 10, 2026</p>
            <h4>Join Aurora Hotel for exclusive seasonal celebrations and premium experiences.</h4>
            <a href="events.php"><button class="btn">View Events</button></a>
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
