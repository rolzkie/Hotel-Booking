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
    <link rel="icon" href="assets/ICON.png" />
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
        <a href="./Php/Check-In-Page.php"><button class="btn nav__btn">Book Now</button></a>
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
          <button class="btn">BOOK NOW</button>
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
        <div class="about__btn">
          <button class="btn">Learn More</button>
        </div>
      </div>
    </section>

    <section class="section__container room__container">
      <p class="section__subheader">OUR ROOMS</p>
      <h2 class="section__header">Discover Aurora Hotel's Finest Accommodations</h2>
      <div class="room__grid">
        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/room-1.jpg" alt="Deluxe Ocean View" />
            <img class="room__img secondary" src="assets/PremierRoom.png" alt="Deluxe Ocean View alternate" />
            <div class="room__hover-btn">
              <button class="btn">View Details</button>
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
            <p>
              Tamasahin ang kasiyahan ng maikling oras na may kagandahang view ng dagat mula sa iyong pribadong suite.
            </p>
            <h5>Nagsisimula sa <span>$299/gabi</span></h5>
            <button class="btn">Mag-Book Na</button>
          </div>
        </div>
        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/room-2.jpg" alt="Executive Cityscape Room" />
            <img class="room__img secondary" src="assets/about.jpg" alt="Executive Cityscape alternate" />
            <div class="room__hover-btn">
              <button class="btn">View Details</button>
            </div>
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/2.1.png" alt="option 1" /></div>
            <div class="room__thumb"><img src="assets/about.jpg" alt="option 2" /></div>
            <div class="room__thumb"><img src="assets/room-2.jpg" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Executive Cityscape Room</h4>
            <p>
              Maranasan ang urban elegance at modernong kaginhawahan sa puso ng siyudad.
            </p>
            <h5>Nagsisimula sa <span>$199/gabi</span></h5>
            <button class="btn">Mag-Book Na</button>
          </div>
        </div>
        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/room-3.jpg" alt="Family Garden Retreat" />
            <img class="room__img secondary" src="assets/explore.jpg" alt="Family Garden alternate" />
            <div class="room__hover-btn">
              <button class="btn">View Details</button>
            </div>
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/explore.jpg" alt="option 1" /></div>
            <div class="room__thumb"><img src="assets/service.jpg" alt="option 2" /></div>
            <div class="room__thumb"><img src="assets/room-3.jpg" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Family Garden Retreat</h4>
            <p>
              Malawak at mainit, perpekto para sa paglikha ng mga alaala kasama ang mga mahal sa buhay.
            </p>
            <h5>Nagsisimula sa <span>$249/gabi</span></h5>
            <button class="btn">Mag-Book Na</button>
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
