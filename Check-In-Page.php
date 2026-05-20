<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/index.css" />
    <link rel="stylesheet" href="styles/checkin.css" />
    <link rel="icon" href="assets/iconred.png" />
    <title>Check-In | Hotel Booking</title>
</head>
<body>
    <!-- Navigation Header -->
    <header class="header checkin-header">
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
                <li><a href="index.php#home">Home</a></li>
                <li><a href="index.php#about">About</a></li>
                <li><a href="room.php">Rooms</a></li>
                <li><a href="hotel-facilities.php">Facilities</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="reviews.php">Reviews</a></li>
                <li><a href="index.php#contact">Contact</a></li>
            </ul>
            <button class="btn nav__btn">Book Now</button>
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
                    <p>Select Rooms & Rates</p>
                </div>
                <div class="step__line"></div>
                <div class="step">
                    <div class="step__circle">
                        <i class="ri-check-double-line"></i>
                    </div>
                    <p>Booking Confirmation</p>
                </div>
            </div>

            <!-- Booking Form -->
            <div class="booking__section">
                <h2 class="section__header">Complete Your Reservation</h2>
                
                <form class="booking__form" id="checkinForm">
                    <div class="form__grid">
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

                        <!-- Room Type -->
                        <div class="form__group">
                            <label for="roomtype">Room Type</label>
                            <div class="input__wrapper">
                                <i class="ri-home-smile-2-fill"></i>
                                <select id="roomtype" name="roomtype" required>
                                    <option value="">Select a room type</option>
                                    <option value="single">Single Room</option>
                                    <option value="double">Double Room</option>
                                    <option value="suite">Suite</option>
                                    <option value="deluxe">Deluxe Suite</option>
                                </select>
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

                    <!-- Calendar Display -->
                    <div class="calendar__section">
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

                    <!-- Guest Information -->
                    <div class="guest__info">
                        <h3>Guest Information</h3>
                        <div class="form__grid">
                            <div class="form__group full-width">
                                <label for="fullname">Full Name</label>
                                <div class="input__wrapper">
                                    <i class="ri-user-line"></i>
                                    <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required />
                                </div>
                            </div>
                            <div class="form__group full-width">
                                <label for="email">Email Address</label>
                                <div class="input__wrapper">
                                    <i class="ri-mail-line"></i>
                                    <input type="email" id="email" name="email" placeholder="Enter your email" required />
                                </div>
                            </div>
                            <div class="form__group full-width">
                                <label for="phone">Phone Number</label>
                                <div class="input__wrapper">
                                    <i class="ri-phone-line"></i>
                                    <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required />
                                </div>
                            </div>
                            <div class="form__group full-width">
                                <label for="comments">Special Requests (Optional)</label>
                                <textarea id="comments" name="comments" placeholder="Any special requests or needs?"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="form__actions">
                        <button type="submit" class="btn btn-primary">Continue to Room Selection</button>
                        <button type="reset" class="btn btn-secondary">Clear Form</button>
                    </div>
                </form>
            </div>

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

    <script src="main.js"></script>
    <script src="checkin.js"></script>
</body>
</html>
