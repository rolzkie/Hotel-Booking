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
    <link rel="stylesheet" href="styles/reviews.css" />
  <link rel="icon" href="assets/icon/ICON.png" />
    <title>Reviews | Aurora Hotel</title>
  </head>
  <body>
    <div id="loader-wrapper">
      <div class="loader">
        <img src="./assets/svg/ICON.svg" alt="">
      </div>
    </div>
    <header class="header">
      <nav>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
        <a href="index.php" class="nav__brand"><img src="assets/svg/AURORA.svg" alt="Aurora logo" /></a>
        <a href="Check-In-Page.php" class="btn nav__btn">Book Now</a>
        <ul class="nav__links" id="nav-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="room.php">Rooms</a></li>
          <li><a href="hotel-facilities.php">Facilities</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="reviews.php">Reviews</a></li>
          <li><a href="contactus.php">Contact</a></li>
        </ul>
      </nav>
    </header>

    <section class="section__container review__container">
      <p class="section__subheader">REVIEWS</p>
      <h2 class="section__header">Hear what guests love about their stay.</h2>
      
      <div class="rating__summary">
        <div class="overall__rating">
          <h3>Overall Guest Rating</h3>
          <div class="rating__display">
            <span class="rating__number">4.9</span>
            <span class="rating__max">/ 5.0</span>
          </div>
          <div class="stars">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-half-line"></i>
          </div>
          <p class="rating__count">Based on 487 reviews</p>
        </div>
        <div class="rating__breakdown">
          <div class="rating__bar">
            <span>5 Stars</span>
            <div class="bar"><div class="fill" style="width: 70%"></div></div>
            <span>70%</span>
          </div>
          <div class="rating__bar">
            <span>4 Stars</span>
            <div class="bar"><div class="fill" style="width: 20%"></div></div>
            <span>20%</span>
          </div>
          <div class="rating__bar">
            <span>3 Stars</span>
            <div class="bar"><div class="fill" style="width: 7%"></div></div>
            <span>7%</span>
          </div>
          <div class="rating__bar">
            <span>2 Stars</span>
            <div class="bar"><div class="fill" style="width: 2%"></div></div>
            <span>2%</span>
          </div>
          <div class="rating__bar">
            <span>1 Star</span>
            <div class="bar"><div class="fill" style="width: 1%"></div></div>
            <span>1%</span>
          </div>
        </div>
      </div>

      <div class="review__grid">
        <article class="review__card">
          <div class="review__avatar">
            <img src="assets/reviews/anon1.jpg" alt="reviewer" />
          </div>
          <h4>Anna S.</h4>
          <p>"A perfect stay from arrival to checkout. The rooms were clean, the staff were attentive, and the breakfast was exceptional."</p>
          <div class="review__rating">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <span>5.0 / 5.0</span>
          </div>
        </article>
        <article class="review__card">
          <div class="review__avatar">
            <img src="assets/reviews/anon2.jpg" alt="reviewer" />
          </div>
          <h4>Michael T.</h4>
          <p>"The event night was beautiful, and the service made our anniversary unforgettable. Highly recommended!"</p>
          <div class="review__rating">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-half-line"></i>
            <span>4.9 / 5.0</span>
          </div>
        </article>
        <article class="review__card">
          <div class="review__avatar">
            <img src="assets/reviews/anon3.jpg" alt="reviewer" />
          </div>
          <h4>Sophia R.</h4>
          <p>"Loved the decor, the amenities, and the calm ambiance. The fitness center and dining options were a great bonus."</p>
          <div class="review__rating">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-half-line"></i>
            <span>4.8 / 5.0</span>
          </div>
        </article>
        <article class="review__card">
          <div class="review__avatar">
            <img src="assets/reviews/anon4.jpg" alt="reviewer" />
          </div>
          <h4>Jason P.</h4>
          <p>"Everything was on point — from check-in to room service. A wonderful place for a relaxing city escape."</p>
          <div class="review__rating">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <span>5.0 / 5.0</span>
          </div>
        </article>
        <article class="review__card">
          <div class="review__avatar">
            <img src="assets/reviews/anon5.jpg" alt="reviewer" />
          </div>
          <h4>Emily W.</h4>
          <p>"Exceptional hospitality and attention to detail. The concierge team went above and beyond to make our stay special. We'll definitely be back!"</p>
          <div class="review__rating">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <span>5.0 / 5.0</span>
          </div>
        </article>
        <article class="review__card">
          <div class="review__avatar">
            <img src="assets/reviews/anon6.jpg" alt="reviewer" />
          </div>
          <h4>David K.</h4>
          <p>"Great location with stunning views. The spa facilities were world-class, and the staff made everything so convenient."</p>
          <div class="review__rating">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <span>4.9 / 5.0</span>
          </div>
        </article>
        <article class="review__card">
          <div class="review__avatar">
            <img src="assets/reviews/anon1.jpg" alt="reviewer" />
          </div>
          <h4>Isabella M.</h4>
          <p>"Our family had the most wonderful vacation here. The kids' activities were fun, and the family suites were spacious and comfortable!"</p>
          <div class="review__rating">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-half-line"></i>
            <span>4.8 / 5.0</span>
          </div>
        </article>
        <article class="review__card">
          <div class="review__avatar">
            <img src="assets/reviews/anon2.jpg" alt="reviewer" />
          </div>
          <h4>Christopher L.</h4>
          <p>"Top-notch business facilities and reliable WiFi made my stay productive. The restaurant food was outstanding!"</p>
          <div class="review__rating">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <span>5.0 / 5.0</span>
          </div>
        </article>
        <article class="review__card">
          <div class="review__avatar">
            <img src="assets/reviews/anon3.jpg" alt="reviewer" />
          </div>
          <h4>Victoria N.</h4>
          <p>"The executive lounge was an amazing perk. Free refreshments, quiet workspace, and helpful staff made it perfect for business travelers."</p>
          <div class="review__rating">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <span>4.9 / 5.0</span>
          </div>
        </article>
        <article class="review__card">
          <div class="review__avatar">
            <img src="assets/reviews/anon4.jpg" alt="reviewer" />
          </div>
          <h4>Robert G.</h4>
          <p>"Clean rooms, courteous staff, and great amenities. The location is perfect for exploring the city. Highly satisfied!"</p>
          <div class="review__rating">
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-fill"></i>
            <i class="ri-star-half-line"></i>
            <span>4.8 / 5.0</span>
          </div>
        </article>
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
