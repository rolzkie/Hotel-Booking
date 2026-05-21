<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../styles/index.css" />
    <link rel="stylesheet" href="../styles/room.css" />
    <link rel="icon" href="./Assets/iconred.png" />
    <title>Rooms | Rayal Park Hotel</title>
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
          <li><a href="room.php">Rooms</a></li>
          <li><a href="hotel-facilities.php">Facilities</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="reviews.php">Reviews</a></li>
          <li><a href="contactus.php">Contact</a></li>
        </ul>
        <a href="Check-In-Page.php"><button class="btn nav__btn">Book Now</button></a>
      </nav>
      <div class="section__container header__container" id="home">
        <p>Elegant Stays & Comfort</p>
        <h1>Browse Our Rooms<br />Designed For Every Stay.</h1>
      </div>
    </header>

    <section class="section__container room__container">
      <p class="section__subheader">ROOMS</p>
      <h2 class="section__header">Choose the perfect room for your next getaway.</h2>
      <div class="room__grid">
        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="./Assets/room-1.jpg" alt="Deluxe Ocean View" />
            <img class="room__img secondary" src="./Assets/PremierRoom.png" alt="Deluxe alternate" />
            <div class="room__hover-btn">
              <button class="btn">View Details</button>
            </div>
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="./Assets/1.png" alt="option 1" /></div>
            <div class="room__thumb"><img src="./Assets/2.png" alt="option 2" /></div>
            <div class="room__thumb"><img src="./Assets/2.1.png" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Deluxe Ocean View</h4>
            <p>Wake up to shimmering ocean views in a stylish, spacious suite.</p>
            <h5>From <span>$299/night</span></h5>
            <button class="btn">Book Now</button>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="./Assets/room-2.jpg" alt="Executive Cityscape" />
            <img class="room__img secondary" src="./Assets/about.jpg" alt="City alternate" />
            <div class="room__hover-btn">
              <button class="btn">View Details</button>
            </div>
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="./Assets/room-2.jpg" alt="option 1" /></div>
            <div class="room__thumb"><img src="./Assets/explore.jpg" alt="option 2" /></div>
            <div class="room__thumb"><img src="./Assets/about.jpg" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Executive Cityscape</h4>
            <p>Stylish comfort and city views in a premium urban retreat.</p>
            <h5>From <span>$219/night</span></h5>
            <button class="btn">Book Now</button>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="./Assets/room-3.jpg" alt="Family Garden Retreat" />
            <img class="room__img secondary" src="./Assets/explore.jpg" alt="Garden alternate" />
            <div class="room__hover-btn">
              <button class="btn">View Details</button>
            </div>
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="./Assets/service.jpg" alt="option 1" /></div>
            <div class="room__thumb"><img src="./Assets/room-3.jpg" alt="option 2" /></div>
            <div class="room__thumb"><img src="./Assets/1.png" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Family Garden Retreat</h4>
            <p>Roomy, warm, and perfect for families looking for extra comfort.</p>
            <h5>From <span>$249/night</span></h5>
            <button class="btn">Book Now</button>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="./Assets/about.jpg" alt="Junior Suite" />
            <img class="room__img secondary" src="./Assets/service.jpg" alt="Suite alternate" />
            <div class="room__hover-btn">
              <button class="btn">View Details</button>
            </div>
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="./Assets/2.png" alt="option 1" /></div>
            <div class="room__thumb"><img src="./Assets/2.1.png" alt="option 2" /></div>
            <div class="room__thumb"><img src="./Assets/room-1.jpg" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Junior Suite</h4>
            <p>A bright suite with premium amenities, ideal for short stays.</p>
            <h5>From <span>$179/night</span></h5>
            <button class="btn">Book Now</button>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="./Assets/explore.jpg" alt="Premium Retreat" />
            <img class="room__img secondary" src="./Assets/room-2.jpg" alt="Premium alternate" />
            <div class="room__hover-btn">
              <button class="btn">View Details</button>
            </div>
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="./Assets/room-1.jpg" alt="option 1" /></div>
            <div class="room__thumb"><img src="./Assets/about.jpg" alt="option 2" /></div>
            <div class="room__thumb"><img src="./Assets/service.jpg" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Premium Retreat</h4>
            <p>Refined design, extra space, and thoughtful touches for a luxury stay.</p>
            <h5>From <span>$339/night</span></h5>
            <button class="btn">Book Now</button>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="./Assets/service.jpg" alt="Signature Suite" />
            <img class="room__img secondary" src="./Assets/room-3.jpg" alt="Signature alternate" />
            <div class="room__hover-btn">
              <button class="btn">View Details</button>
            </div>
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="./Assets/room-2.jpg" alt="option 1" /></div>
            <div class="room__thumb"><img src="./Assets/1.png" alt="option 2" /></div>
            <div class="room__thumb"><img src="./Assets/2.png" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Signature Suite</h4>
            <p>Exclusive suite experience with premium seating and modern design.</p>
            <h5>From <span>$399/night</span></h5>
            <button class="btn">Book Now</button>
          </div>
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
            <li><a href="#">rayalpark@info.com</a></li>
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
