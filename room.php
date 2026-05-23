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
      <video autoplay muted loop id="header-Video">
        <source src="assets/vid/headerVideo.mp4">
      </video>
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
            <img class="room__img primary" src="assets/rooms/deluxeroom/Deluxebedroom.jpeg" alt="Deluxe Ocean View" />
            <img class="room__img secondary" src="assets/rooms/deluxeroom/deluxelivingroom.jpeg" alt="Deluxe alternate" />
           
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/rooms/deluxeroom/deluxecr.jpeg" alt="option 1" /></div>
            <div class="room__thumb"><img src="assets/rooms/deluxeroom/deluxekitchen.jpeg" alt="option 2" /></div>
            <div class="room__thumb"><img src="assets/rooms/deluxeroom/deluxelaundry.jpeg" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Deluxe Room</h4>
            <p>A cozy and stylish room perfect for solo travelers or couples. Features a queen-sized bed, smart TV, air conditioning, free Wi-Fi, minibar, and modern bathroom amenities for a relaxing stay.</p>
            <span>₱3,500 / night</span>
            <div class="room__card__actions">
              <a href="Check-In-Page.php" class="btn">Book Now</a>
              <a href="room.php" class="btn btn--alt">View Details</a>
            </div>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/rooms/deluxepremier/PremierBed.png" alt="Executive Cityscape" />
            <img class="room__img secondary" src="assets/rooms/deluxepremier/premierlivingroom.png" alt="City alternate" />
           
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/rooms/deluxepremier/2.1.png" alt="option 1" /></div>
            <div class="room__thumb"><img src="assets/rooms/deluxepremier/2.png" alt="option 2" /></div>
            <div class="room__thumb"><img src="assets/rooms/deluxepremier/premiercr.jpeg" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Deluxe Premier Room</h4>
            <p>An upgraded deluxe experience with a more spacious interior, elegant furnishings, city or pool view, premium bedding, and complimentary breakfast for two.</p>
            <span>₱5,200 / night</span>
            <div class="room__card__actions">
              <a href="Check-In-Page.php" class="btn">Book Now</a>
              <a href="room.php" class="btn btn--alt">View Details</a>
            </div>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/rooms/executive(jpeg)/executive1.1.jpeg" alt="Family Garden Retreat" />
            <img class="room__img secondary" src="assets/rooms/executive(jpeg)/executive3.jpeg" alt="Garden alternate" />
           
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/rooms/executive(jpeg)/executive2.2.jpeg" alt="option 1" /></div>
            <div class="room__thumb"><img src="assets/rooms/executive(jpeg)/executive4.1.jpeg" alt="option 2" /></div>
            <div class="room__thumb"><img src="assets/rooms/executive(jpeg)/executive4.jpeg" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Executive Suite</h4>
            <p>Designed for business and luxury travelers, this suite includes a separate living area, work desk, king-sized bed, high-speed Wi-Fi, minibar, and exclusive comfort for longer stays.</p>
            <span>₱7,800 / night</span>
            <div class="room__card__actions">
              <a href="Check-In-Page.php" class="btn">Book Now</a>
              <a href="room.php" class="btn btn--alt">View Details</a>
            </div>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/rooms/FamilySuite/fsbed.jpeg" alt="Junior Suite" />
            <img class="room__img secondary" src="assets/rooms/FamilySuite/FSLR.jpeg" alt="Suite alternate" />
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/rooms/FamilySuite/kitchen.jpeg" alt="option 1" /></div>
            <div class="room__thumb"><img src="assets/rooms/FamilySuite/FSCR.jpeg" alt="option 2" /></div>
            <div class="room__thumb"><img src="assets/rooms/FamilySuite/terrace.jpeg" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Family Suite</h4>
            <p>A spacious suite ideal for families or groups. Includes multiple beds, a comfortable lounge area, dining space, large bathroom, and entertainment features to make every stay enjoyable.</p>
            <span>₱9,500 / night</span>
            <div class="room__card__actions">
              <a href="Check-In-Page.php" class="btn">Book Now</a>
              <a href="room.php" class="btn btn--alt">View Details</a>
            </div>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/rooms/RoyalSuite/RoyalBedroom.jpeg" alt="Royal Suite" />
            <img class="room__img secondary" src="assets/rooms/RoyalSuite/RoyalLivingRoom.jpeg" alt="Royal Suite" />
           
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/rooms/RoyalSuite/RoyalBedroom.jpeg" alt="option 1" /></div>
            <div class="room__thumb"><img src="assets/rooms/RoyalSuite/RoyalLivingRoom.jpeg" alt="option 2" /></div>
            <div class="room__thumb"><img src="assets/rooms/RoyalSuite/RoyalDiningRoom.jpeg" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Royal Suite</h4>
            <p>Experience elegance and sophistication with premium interiors, a luxurious king-sized bed, private lounge area, scenic views, and exclusive amenities for a first-class stay.</p>
            <span>₱14,500 / night</span>
            <div class="room__card__actions">
              <a href="Check-In-Page.php" class="btn">Book Now</a>
              <a href="room.php" class="btn btn--alt">View Details</a>
            </div>
          </div>
        </div>

        <div class="room__card">
          <div class="room__card__image">
            <img class="room__img primary" src="assets/rooms/presidential(png)/presidentialbed.jpeg" alt="Presidential Suite" />
            <img class="room__img secondary" src="assets/rooms/presidential(png)/livingroom.jpeg" alt="Presidential alternate" />
           
            <div class="room__card__icons">
              <span><i class="ri-heart-fill"></i></span>
            </div>
          </div>
          <div class="room__thumbs">
            <div class="room__thumb"><img src="assets/presidential(png)/winestorage.jpeg" alt="option 1" /></div>
            <div class="room__thumb"><img src="assets/presidential(png)/MasterBathroom.jpeg" alt="option 2" /></div>
            <div class="room__thumb"><img src="assets/presidential(png)/massageroom.jpeg" alt="option 3" /></div>
          </div>
          <div class="room__card__details">
            <h4>Presidential Suite</h4>
            <p>The most luxurious accommodation in the hotel featuring a grand living room, dining area, master bedroom, premium furnishings, panoramic views, VIP amenities, and personalized service for an unforgettable experience.</p>
            <span>₱25,000 / night</span>
            <div class="room__card__actions">
              <a href="Check-In-Page.php" class="btn">Book Now</a>
              <a href="room.php" class="btn btn--alt">View Details</a>
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
