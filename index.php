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
      <link rel="icon" href="assets/svg/ICON.svg" />
      <title>Aurora Hotel | Your Perfect Escape Awaits</title>
    </head>
    <body>
      <header class="header">
        <video autoplay muted loop id="header-Video">
          <source src="assets/headerVideo.mp4">
        </video>
        <nav>
          <div class="nav__bar">
            <div class="logo">
              <a href="index.php"><img src="assets/Logo.svg" alt="logo" class="nav-logo" /></a>
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
    
        
      <section class="section__container booking__container">
        <form action="/" class="booking__form">
          <div class="input__group">
            <span><i class="ri-calendar-2-fill"></i></span>
            <div>
              <label for="check-in">CHECK-IN</label>
            <input type="date" id="checkin" name="checkin" />

            </div>
          </div>
          <div class="input__group">
            <span><i class="ri-calendar-2-fill"></i></span>
            <div>
              <label for="check-out">CHECK-OUT</label>
              <input type="date" placeholder="Check Out" /> 
            </div>  
          </div>
          <div class="input__group">
            <span><i class="ri-user-fill"></i></span>
            <div>
              <label for="guest">GUEST</label>
              <input type="number" placeholder=" " />
            </div>
          </div>
          <div class="input__group input__btn">
   <!-- Use just a link instead of a button inside a form -->
   <a href="Check-In-Page.php" class="btn nav__btn">Book Now</a>
</div>
        </form>
      </section>

      <section class="section__container about__container" id="about">
        <div class="about__image">
          <img src="assets/about.jpg" alt="about" />
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
              <img class="room__img primary" src="assets/PremierRoom.png" alt="Deluxe Ocean View" />
              <img class="room__img secondary" src="assets/PremierRoom.png" alt="Deluxe Ocean View alternate" /> <div class="room__card__icons">
                <span><i class="ri-heart-fill"></i></span>
              </div>
            </div>
            <div class="room__thumbs">
              <div class="room__thumb"><img src="assets/PremierBed.png" alt="option 1" /></div>
              <div class="room__thumb"><img src="assets/2.png" alt="option 2" /></div>
              <div class="room__thumb"><img src="assets/2.1.png" alt="option 3" /></div>
            </div>
            <div class="room__card__details">
              <h4>Deluxe Premier Room</h4>
              <p>
                An upgraded deluxe experience with a more spacious interior, elegant furnishings, city or pool view, premium bedding, and complimentary breakfast for two.
              </p>
              <span>₱5,200 / night</span>
              <button class="btn">Book Now</button>
            </div>
          </div>
          <div class="room__card">
            <div class="room__card__image">
              <img class="room__img primary" src="assets/executive1.jpeg" alt="Executive Cityscape Room" />
              <img class="room__img secondary" src="assets/executive1.1.jpeg " alt="Executive Cityscape alternate" />
              <div class="room__card__icons">
                <span><i class="ri-heart-fill"></i></span>
              </div>
            </div>
            <div class="room__thumbs">
              <div class="room__thumb"><img src="assets/executive2.jpeg" alt="option 1" /></div>
              <div class="room__thumb"><img src="assets/executive3.1.jpeg" alt="option 2" /></div>
              <div class="room__thumb"><img src="assets/executive4.jpeg" alt="option 3" /></div>
            </div>
            <div class="room__card__details">
              <h4>Executive Cityscape Room</h4>
              <p>
               Designed for business and luxury travelers, this suite includes a separate living area, work desk, king-sized bed, high-speed Wi-Fi, minibar, and exclusive comfort for longer stays.
              </p>
            <span>₱7,800 / night</span>
              <button class="btn">Book Now</button>
            </div>
          </div>
          <div class="room__card">
            <div class="room__card__image">
              <img class="room__img primary" src="assets/Presidentialbed.png" alt="Family Garden Retreat" />
              <img class="room__img secondary" src="assets/Presidentialmain.png" alt="Family Garden alternate" />
              <div class="room__card__icons">
                <span><i class="ri-heart-fill"></i></span>
              </div>
            </div>
            <div class="room__thumbs">
              <div class="room__thumb"><img src="assets/Presidentialbed.png" alt="option 1" /></div>
              <div class="room__thumb"><img src="assets/Presidential3.png" alt="option 2" /></div>
              <div class="room__thumb"><img src="assets/Presidential4.png" alt="option 3" /></div>
            </div>
            <div class="room__card__details">
              <h4>Presidential Suite</h4>
              <p>
               The most luxurious accommodation in the hotel featuring a grand living room, dining area, master bedroom, premium furnishings, panoramic views, VIP amenities, and personalized service for an unforgettable experience.
              </p>
              <span>₱25,000 / night</span>
              <button class="btn">Book Now</button>
            </div>
          </div>
        </div>
      </section>

      <section class="service" id="service">
        <div class="section__container service__container">
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
            <button class="btn">View Events</button>
          </div>
        </div>
      </section>

      <footer class="footer" id="contact">
        <div class="section__container footer__container">
          <div class="footer__col">
            <div class="logo">
              <a href="#home"><img src="assets/logo.png" alt="logo" /></a>
            </div>
            <p class="section__description">
              Discover a world of elegance, luxury, and unforgettable moments as you explore Aurora Hotel's carefully curated accommodations and world-class amenities.
            </p>
            <a href="./Php/Check-In-Page.php"><button class="btn">Book Now</button></a>
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
      <script src="./Js/main.js"></script>
    </body>
  </html>
