<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../Styles/index.css" />
    <link rel="stylesheet" href="../Styles/room.css" />
    <link rel="icon" href="../Assets/ICON.png" />
    <title>Web Design Mastery | Rayal Park</title>
  </head>
  <body>
    <header class="header">
      <video autoplay muted loop id="header-Video">
        <source src="../Assets/headerVideo.mp4">
      </video>
      <nav>
        <div class="nav__bar">
          <div class="logo">
            <a href="./index.php"><img src="../Assets/Logo.svg" alt="logo" class="nav-logo" /></a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="room.php">Rooms</a></li>
          <li><a href="#service">Services</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="reviews.php">Reviews</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <a href = "Check-In-Page.php"><button class="btn nav__btn">Book Now</button></a>
      </nav>
      <div class="section__container header__container" id="home">
        <p>Simple - Unique - Friendly</p>
        <h1>Make Yourself At Home<br />In Our <span>Hotel</span>.</h1>
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
        <img src="../Assets/about.jpg" alt="about" />
      </div>
      <div class="about__content">
        <p class="section__subheader">ABOUT US</p>
        <h2 class="section__header">The Best Holidays Start Here!</h2>
        <p class="section__description">
          With a focus on quality accommodations, personalized experiences, and
          seamless booking, our platform is dedicated to ensuring that every
          traveler embarks on their dream holiday with confidence and
          excitement.
        </p>
        <div class="about__btn">
          <button class="btn">Read More</button>
        </div>
      </div>
    </section>

    <section class="section__container room__container">
      <p class="section__subheader">OUR LIVING ROOM</p>
      <h2 class="section__header">The Most Memorable Rest Time Starts Here.</h2>
      <div class="room__grid">
        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="../Assets/room-1.jpg" alt="Deluxe Ocean View" />
            <img class="room__img secondary" src="../Assets/PremierRoom.png" alt="Deluxe Ocean View alternate" />
            <div class="room__hover-btn">
              <button class="btn">View Details</button>
            </div>
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="../Assets/1.png" alt="option 1" /></div>
            <div class="room__thumb"><img src="../Assets/2.png" alt="option 2" /></div>
            <div class="room__thumb"><img src="../Assets/2.1.png" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
<<<<<<< HEAD:index.php
=======
            <div class="room__card__badge">
              <img src="../Assets/PremierBed.png" alt="bed" />
            </div>
>>>>>>> 0ab50a91d12b60a52e9b6b7c885dbfcf5b16ab6f:Php/index.php
            <h4>Deluxe Ocean View</h4>
            <p>
              Bask in luxury with breathtaking ocean views from your private
              suite.
            </p>
            <h5>Starting from <span>$299/night</span></h5>
            <button class="btn">Book Now</button>
          </div>
        </div>
        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="../Assets/room-2.jpg" alt="Executive Cityscape Room" />
            <img class="room__img secondary" src="../Assets/about.jpg" alt="Executive Cityscape alternate" />
            <div class="room__hover-btn">
              <button class="btn">View Details</button>
            </div>
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="../Assets/2.1.png" alt="option 1" /></div>
            <div class="room__thumb"><img src="../Assets/about.jpg" alt="option 2" /></div>
            <div class="room__thumb"><img src="../Assets/room-2.jpg" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
<<<<<<< HEAD:index.php
=======
            <div class="room__card__badge">
              <img src="../Assets/room-2.jpg" alt="city room" />
            </div>
>>>>>>> 0ab50a91d12b60a52e9b6b7c885dbfcf5b16ab6f:Php/index.php
            <h4>Executive Cityscape Room</h4>
            <p>
              Experience urban elegance and modern comfort in the heart of the
              city.
            </p>
            <h5>Starting from <span>$199/night</span></h5>
            <button class="btn">Book Now</button>
          </div>
        </div>
        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="../Assets/room-3.jpg" alt="Family Garden Retreat" />
            <img class="room__img secondary" src="../Assets/explore.jpg" alt="Family Garden alternate" />
            <div class="room__hover-btn">
              <button class="btn">View Details</button>
            </div>
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="../Assets/explore.jpg" alt="option 1" /></div>
            <div class="room__thumb"><img src="../Assets/service.jpg" alt="option 2" /></div>
            <div class="room__thumb"><img src="../Assets/room-3.jpg" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
<<<<<<< HEAD:index.php
=======
            <div class="room__card__badge">
              <img src="../Assets/room-3.jpg" alt="garden room" />
            </div>
>>>>>>> 0ab50a91d12b60a52e9b6b7c885dbfcf5b16ab6f:Php/index.php
            <h4>Family Garden Retreat</h4>
            <p>
              Spacious and inviting, perfect for creating cherished memories
              with loved ones.
            </p>
            <h5>Starting from <span>$249/night</span></h5>
            <button class="btn">Book Now</button>
          </div>
        </div>
      </div>
    </section>

    <section class="service" id="service">
      <div class="section__container service__container">
        <div class="service__content">
          <p class="section__subheader">SERVICES</p>
          <h2 class="section__header">Strive Only For The Best.</h2>
          <ul class="service__list">
            <li>
              <span><i class="ri-shield-star-line"></i></span>
              High Class Security
            </li>
            <li>
              <span><i class="ri-24-hours-line"></i></span>
              24 Hours Room Service
            </li>
            <li>
              <span><i class="ri-headphone-line"></i></span>
              Conference Room
            </li>
            <li>
              <span><i class="ri-map-2-line"></i></span>
              Tourist Guide Support
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="section__container banner__container">
      <div class="banner__content">
        <div class="banner__card">
          <h4>25+</h4>
          <p>Properties Available</p>
        </div>
        <div class="banner__card">
          <h4>350+</h4>
          <p>Bookings Completed</p>
        </div>
        <div class="banner__card">
          <h4>600+</h4>
          <p>Happy Customers</p>
        </div>
      </div>
    </section>

    <section class="explore" id="events">
      <p class="section__subheader">EVENTS</p>
      <h2 class="section__header">What's Happening This Month.</h2>
      <div class="explore__bg">
        <div class="explore__content">
          <p class="section__description">10th MAR 2026</p>
          <h4>Join our special hotel experiences and seasonal celebrations.</h4>
          <button class="btn">See Events</button>
        </div>
      </div>
    </section>

    <footer class="footer" id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="logo">
            <a href="#home"><img src="../Assets/logo.png" alt="logo" /></a>
          </div>
          <p class="section__description">
            Discover a world of comfort, luxury, and adventure as you explore
            our curated selection of hotels, making every moment of your getaway
            truly extraordinary.
          </p>
          <button class="btn">Book Now</button>
        </div>
        <div class="footer__col">
          <h4>QUICK LINKS</h4>
          <ul class="footer__links">
            <li><a href="#">Browse Destinations</a></li>
            <li><a href="#">Special Offers & Packages</a></li>
            <li><a href="#">Room Types & Amenities</a></li>
            <li><a href="#">Customer Reviews & Ratings</a></li>
            <li><a href="#">Travel Tips & Guides</a></li>
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
            <li><a href="#">rayalpark@info.com</a></li>
          </ul>
          <div class="footer__socials">
            <a href="#"><img src="../Assets/facebook.png" alt="facebook" /></a>
            <a href="#"><img src="../Assets/instagram.png" alt="instagram" /></a>
            <a href="#"><img src="../Assets/youtube.png" alt="youtube" /></a>
            <a href="#"><img src="../Assets/twitter.png" alt="twitter" /></a>
          </div>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2023 Web Design Mastery. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../Js/main.js"></script>
  </body>
</html>
