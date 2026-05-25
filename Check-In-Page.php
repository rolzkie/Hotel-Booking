<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/index.css" />
    <link rel="stylesheet" href="styles/checkin.css" />
    <link rel="stylesheet" href="styles/mobile.css" />
    <link rel="icon" href="assets/icon/ICON.png" />
    <title>Check-In | Hotel Booking</title>
</head>
<body>
    <div id="loader-wrapper">
      <div class="loader">
        <img src="./assets/svg/ICON.svg" alt="">
      </div>
    </div>

    <!-- Navigation Header -->
    <header class="header checkin-header">
        <nav>
            <div class="nav__menu__btn" id="menu-btn">
                <i class="ri-menu-line"></i>
            </div>
            <a href="index.php" class="nav__brand"><img src="./assets/svg/AURORA.svg" alt="Aurora logo" /></a>
          
       <ul class="nav__links" id="nav-links">
          <li><a href="./index.php">Home</a></li>
          <li><a href="room.php">Rooms</a></li>
          <li><a href="hotel-facilities.php">Facilities</a></li>
          <li><a href="events.php">Events</a></li>
          <li><a href="reviews.php">Reviews</a></li>
          <li><a href="contactus.php">Contact</a></li>
        </ul>
        </nav>
        <div class="section__container header__container checkin-title">
            <h1>Check-In & Booking</h1>
            <p>Reserve Your Perfect Stay</p>
        </div>
    </header>

    <!-- Main Check-in Section -->
    <section class="section__container checkin__container">
        <div class="checkin__wrapper">
            <!-- Progress Steps -->
            <div class="checkin__steps">
                <div class="step active">
                    <div class="step__circle">
                        <i class="ri-calendar-2-fill"></i>
                    </div>
                    <p>Check-in & Check-out</p>
                </div>
                <div class="step__line"></div>
                <div class="step">
                    <div class="step__circle">
                        <i class="ri-home-2-fill"></i>
                    </div>
                    <p>Select Room</p>
                </div>
                <div class="step__line"></div>
                <div class="step">
                    <div class="step__circle">
                        <i class="ri-user-line"></i>
                    </div>
                    <p>Guest Information</p>
                </div>
                <div class="step__line"></div>
                <div class="step">
                    <div class="step__circle">
                        <i class="ri-bank-card-line"></i>
                    </div>
                    <p>Payment</p>
                </div>
                <div class="step__line"></div>
                <div class="step">
                    <div class="step__circle">
                        <i class="ri-check-double-line"></i>
                    </div>
                    <p>Check-in Done</p>
                </div>
            </div>

            <!-- Booking Form -->
            <div class="booking__section">
                <h2 class="section__header">Complete Your Reservation</h2>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: start;">
                    <!-- Form Section -->
                    <div>
                        <form class="booking__form" id="checkinForm" method="post" action="room-selection.php">
                            <div class="form__grid" style="grid-template-columns: 1fr;">
                                <!-- Check-in Date -->
                                <div class="form__group">
                                    <label for="checkin-date">Check-in Date</label>
                                    <div class="input__wrapper">
                                        <i class="ri-calendar-2-fill"></i>
                                        <input type="date" id="checkin-date" name="checkin" required />
                                    </div>
                                </div>

                                <!-- Check-out Date -->
                                <div class="form__group">
                                    <label for="checkout-date">Check-out Date</label>
                                    <div class="input__wrapper">
                                        <i class="ri-calendar-2-fill"></i>
                                        <input type="date" id="checkout-date" name="checkout" required />
                                    </div>
                                </div>

                                <!-- Number of Nights -->
                                <div class="form__group">
                                    <label for="nights">Number of Nights</label>
                                    <div class="input__wrapper">
                                        <i class="ri-moon-clear-fill"></i>
                                        <input type="number" id="nights" name="nights" value="1" min="1" readonly />
                                    </div>
                                </div>

                                <!-- Number of Guests -->
                                <div class="form__group">
                                    <label for="guests">Number of Guests</label>
                                    <div class="input__wrapper">
                                        <i class="ri-user-multiple-fill"></i>
                                        <input type="number" id="guests" name="guests" value="1" min="1" max="8" required />
                                    </div>
                                </div>

                                <!-- Special Code -->
                                <div class="form__group">
                                    <label for="specialcode">Special Code (Optional)</label>
                                    <div class="input__wrapper">
                                        <i class="ri-coupon-2-fill"></i>
                                        <input type="text" id="specialcode" name="specialcode" placeholder="Enter code if you have one" />
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="form__actions">
                                <button type="submit" class="btn btn-primary" style="width: 100%;">Continue to Room Selection</button>
                                <button type="reset" class="btn btn-secondary" style="width: 100%;">Clear Form</button>
                            </div>
                        </form>
                    </div>

                    <!-- Calendar Display -->
                    <div class="calendar__section" style="margin-top: 0;">
                        <h3>Select Your Dates</h3>
                        <div class="calendar__wrapper">
                            <div class="calendar">
                                <div class="calendar__header">
                                    <button type="button" class="calendar__nav" id="prevMonth">
                                        <i class="ri-arrow-left-s-line"></i>
                                    </button>
                                    <h4 id="currentMonth"></h4>
                                    <button type="button" class="calendar__nav" id="nextMonth">
                                        <i class="ri-arrow-right-s-line"></i>
                                    </button>
                                </div>
                                <div class="calendar__days">
                                    <div class="day-label">SUN</div>
                                    <div class="day-label">MON</div>
                                    <div class="day-label">TUE</div>
                                    <div class="day-label">WED</div>
                                    <div class="day-label">THU</div>
                                    <div class="day-label">FRI</div>
                                    <div class="day-label">SAT</div>
                                </div>
                                <div class="calendar__dates" id="calendarDates"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Legend Section -->
    <section class="section__container legend__section">
        <h3>Calendar Legend</h3>
        <div class="legend__items">
            <div class="legend__item">
                <div class="legend__color available"></div>
                <span>Available</span>
            </div>
            <div class="legend__item">
                <div class="legend__color unavailable"></div>
                <span>Unavailable</span>
            </div>
            <div class="legend__item">
                <div class="legend__color selected"></div>
                <span>Selected</span>
            </div>
        </div>
    </section>

            <!-- Info Cards -->
            <div class="info__cards">
                <div class="info__card">
                    <i class="ri-time-line"></i>
                    <h4>Check-in Time</h4>
                    <p>3:00 PM</p>
                </div>
                <div class="info__card">
                    <i class="ri-time-line"></i>
                    <h4>Check-out Time</h4>
                    <p>12:00 PM</p>
                </div>
                <div class="info__card">
                    <i class="ri-shield-check-line"></i>
                    <h4>Best Rate Guarantee</h4>
                    <p>Lowest prices online</p>
                </div>
                <div class="info__card">
                    <i class="ri-customer-service-2-line"></i>
                    <h4>24/7 Support</h4>
                    <p>We're here to help</p>
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
      <script src="Js/checkin.js"></script>
      <script src="Js/main.js"></script>
    </body>
  </html>
