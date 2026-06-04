<?php
    // Get booking and room data
    $room_type_id = $_POST['room_type_id'] ?? '';
    $check_in = $_POST['checkin'] ?? '';
    $check_out = $_POST['checkout'] ?? '';
    $num_of_nights = $_POST['nights'] ?? 0;
    $num_of_guests = $_POST['guests'] ?? 1;
    $special_code = $_POST['specialcode'] ?? '';

    // Room names for display
    $room_names = [
        '1' => 'Deluxe Room',
        '2' => 'Deluxe Premier Room',
        '3' => 'Executive Suite',
        '4' => 'Family Suite',
        '5' => 'Royal Suite',
        '6' => 'Presidential Suite'
    ];

    $selected_room = $room_names[$room_type_id] ?? 'Unknown Room';
?>

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
    <title>Guest Information | Hotel Booking</title>
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

        <!-- Desktop Navigation -->
        <nav class="nav-desktop">
          <a href="index.php" class="nav-desktop__brand"><img src="./assets/svg/AURORA.svg" alt="Aurora logo" /></a>
          <ul class="nav-desktop__menu">
            <li><a href="./index.php">Home</a></li>
            <li><a href="room.php">Rooms</a></li>
            <li><a href="hotel-facilities.php">Facilities</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="reviews.php">Reviews</a></li>
            <li><a href="contactus.php">Contact</a></li>
          </ul>
          <div class="nav-desktop__right"></div>
        </nav>

        <div class="section__container header__container checkin-title">
            <h1>Complete Your Booking</h1>
            <p>Enter Your Guest Information</p>
        </div>
    </header>

    <!-- Progress Steps -->
    <section class="section__container" style="padding: 2rem 1rem; background-color: #f9f7f4;">
        <div class="section__container" style="max-width: var(--max-width); margin: auto;">
            <div class="checkin__steps">
                <div class="step completed">
                    <div class="step__circle">
                        <i class="ri-calendar-2-fill"></i>
                    </div>
                    <p>Check-in & Check-out</p>
                </div>
                <div class="step__line"></div>
                <div class="step completed">
                    <div class="step__circle">
                        <i class="ri-home-2-fill"></i>
                    </div>
                    <p>Select Room</p>
                </div>
                <div class="step__line"></div>
                <div class="step active">
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
        </div>
    </section>

    <!-- Main Check-in Section -->
    <section class="section__container checkin__container">
        <div class="checkin__wrapper">
            <!-- Booking Form -->
            <div class="booking__section">
                <h2 class="section__header">Your Booking Summary</h2>
                
                <!-- Booking Summary -->
                <div class="booking__summary" style="background: #f0f8ff; padding: 1.5rem; border-radius: 12px; margin-bottom: 2rem; border-left: 4px solid var(--primary-color);">
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem;">
                        <div>
                            <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 0.25rem;">Check-in Date</p>
                            <h4 style="margin: 0; color: var(--text-dark);"><?php echo date('F j, Y', strtotime($check_in)); ?></h4>
                        </div>
                        <div>
                            <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 0.25rem;">Check-out Date</p>
                            <h4 style="margin: 0; color: var(--text-dark);"><?php echo date('F j, Y', strtotime($check_out)); ?></h4>
                        </div>
                        <div>
                            <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 0.25rem;">Number of Nights</p>
                            <h4 style="margin: 0; color: var(--text-dark);"><?php echo $num_of_nights; ?> night(s)</h4>
                        </div>
                        <div>
                            <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 0.25rem;">Number of Guests</p>
                            <h4 style="margin: 0; color: var(--text-dark);"><?php echo $num_of_guests; ?> guest(s)</h4>
                        </div>
                        <div>
                            <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 0.25rem;">Selected Room</p>
                            <h4 style="margin: 0; color: var(--primary-color); font-weight: 600;"><?php echo $selected_room; ?></h4>
                        </div>
                    </div>
                </div>

                <h3 style="margin-top: 2rem; margin-bottom: 1rem;">Guest Information</h3>
                
                <form class="booking__form" id="guestInfoForm" method="post" action="Check-in-done.php">
                    <div class="form__grid">
                        <!-- Full Name -->
                        <div class="form__group full-width">
                            <label for="fullname">Full Name <span style="color: red;">*</span></label>
                            <div class="input__wrapper">
                                <i class="ri-user-line"></i>
                                <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required />
                            </div>
                        </div>

                        <!-- Email Address -->
                        <div class="form__group full-width">
                            <label for="email">Email Address <span style="color: red;">*</span></label>
                            <div class="input__wrapper">
                                <i class="ri-mail-line"></i>
                                <input type="email" id="email" name="email" placeholder="Enter your email" required />
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div class="form__group full-width">
                            <label for="phone">Phone Number <span style="color: red;">*</span></label>
                            <div class="input__wrapper">
                                <i class="ri-phone-line"></i>
                                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required />
                            </div>
                        </div>

                        <!-- Special Requests -->
                        <div class="form__group full-width">
                            <label for="comments">Special Requests (Optional)</label>
                            <textarea id="comments" name="comments" placeholder="Any special requests or needs?" style="width: 100%; min-height: 100px; padding: 0.75rem; border: 1px solid #ddd; border-radius: 8px; font-family: inherit;"></textarea>
                        </div>
                    </div>

                    <!-- Hidden Fields to pass booking data -->
                    <input type="hidden" name="roomtype" value="<?php echo htmlspecialchars($room_type_id); ?>" />
                    <input type="hidden" name="checkin" value="<?php echo htmlspecialchars($check_in); ?>" />
                    <input type="hidden" name="checkout" value="<?php echo htmlspecialchars($check_out); ?>" />
                    <input type="hidden" name="nights" value="<?php echo htmlspecialchars($num_of_nights); ?>" />
                    <input type="hidden" name="guests" value="<?php echo htmlspecialchars($num_of_guests); ?>" />
                    <input type="hidden" name="specialcode" value="<?php echo htmlspecialchars($special_code); ?>" />

                    <!-- Payment Information Section -->
                    <h3 style="margin-top: 2.5rem; margin-bottom: 1rem;">Payment Information</h3>
                    
                    <div class="payment__section" style="background-color: #fafafa; padding: 1.5rem; border-radius: 8px; border-left: 4px solid var(--primary-color); margin-bottom: 2rem;">
                        <!-- Room Rate Information -->
                        <div class="price__summary" style="background-color: white; padding: 1rem; border-radius: 8px; margin-bottom: 1.5rem; border: 1px solid #e0e0e0;">
                            <h4 style="margin-top: 0; color: var(--text-dark);">Price Summary</h4>
                            <div style="display: flex; justify-content: space-between; padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;">
                                <span>Room Rate per Night:</span>
                                <span id="roomRate" style="font-weight: 600; color: var(--primary-color);">₱150.00</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;">
                                <span>Number of Nights:</span>
                                <span style="font-weight: 600;"><?php echo $num_of_nights; ?></span>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;">
                                <span>Subtotal:</span>
                                <span id="subtotal" style="font-weight: 600; color: var(--primary-color);">₱150.00</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 0.5rem 0; border-bottom: 1px solid #f0f0f0;">
                                <span>Taxes & Fees (10%):</span>
                                <span id="taxes" style="font-weight: 600; color: var(--primary-color);">₱15.00</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding: 0.75rem 0; border-top: 2px solid #e0e0e0; font-size: 1.1rem;">
                                <span style="font-weight: 600;">Total Amount:</span>
                                <span id="totalAmount" style="font-weight: 700; color: var(--primary-color); font-size: 1.2rem;">₱165.00</span>
                            </div>
                        </div>

                        <!-- Payment Method Selection -->
                        <div style="margin-bottom: 1.5rem;">
                            <h5 style="color: var(--text-dark); margin-bottom: 1rem;">Select Payment Method</h5>
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(140px, 1fr)); gap: 1rem;">
                                <label style="cursor: pointer;">
                                    <input type="radio" name="paymentMethod" value="credit_card" checked />
                                    <div style="padding: 1rem; background-color: white; border: 2px solid #e0e0e0; border-radius: 8px; text-align: center; transition: 0.3s;">
                                        <i class="ri-bank-card-line" style="font-size: 2rem; color: var(--primary-color); display: block; margin-bottom: 0.5rem;"></i>
                                        <span style="font-weight: 600; display: block;">Credit Card</span>
                                    </div>
                                </label>
                                <label style="cursor: pointer;">
                                    <input type="radio" name="paymentMethod" value="debit_card" />
                                    <div style="padding: 1rem; background-color: white; border: 2px solid #e0e0e0; border-radius: 8px; text-align: center; transition: 0.3s;">
                                        <i class="ri-bank-card-line" style="font-size: 2rem; color: var(--primary-color); display: block; margin-bottom: 0.5rem;"></i>
                                        <span style="font-weight: 600; display: block;">Debit Card</span>
                                    </div>
                                </label>
                                <label style="cursor: pointer;">
                                    <input type="radio" name="paymentMethod" value="paypal" />
                                    <div style="padding: 1rem; background-color: white; border: 2px solid #e0e0e0; border-radius: 8px; text-align: center; transition: 0.3s;">
                                        <i class="ri-wallet-line" style="font-size: 2rem; color: var(--primary-color); display: block; margin-bottom: 0.5rem;"></i>
                                        <span style="font-weight: 600; display: block;">PayPal</span>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Card Details Form -->
                        <div id="cardDetails" style="background-color: white; padding: 1rem; border-radius: 8px; border: 1px solid #e0e0e0; margin-bottom: 1rem;">
                            <h5 style="color: var(--text-dark); margin-top: 0;">Card Information</h5>
                            <div class="form__grid">
                                <div class="form__group full-width">
                                    <label for="cardName">Cardholder Name <span style="color: red;">*</span></label>
                                    <div class="input__wrapper">
                                        <i class="ri-user-line"></i>
                                        <input type="text" id="cardName" name="cardName" placeholder="Name on card" />
                                    </div>
                                </div>
                                <div class="form__group full-width">
                                    <label for="cardNumber">Card Number <span style="color: red;">*</span></label>
                                    <div class="input__wrapper">
                                        <i class="ri-bank-card-line"></i>
                                        <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456" maxlength="19" />
                                    </div>
                                </div>
                                <div class="form__group">
                                    <label for="expiryDate">Expiry Date <span style="color: red;">*</span></label>
                                    <div class="input__wrapper">
                                        <i class="ri-calendar-line"></i>
                                        <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY" maxlength="5" />
                                    </div>
                                </div>
                                <div class="form__group">
                                    <label for="cvv">CVV <span style="color: red;">*</span></label>
                                    <div class="input__wrapper">
                                        <i class="ri-shield-line"></i>
                                        <input type="text" id="cvv" name="cvv" placeholder="123" maxlength="4" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Terms & Conditions -->
                        <div style="background-color: white; padding: 1rem; border-radius: 8px; margin-bottom: 1rem; border: 1px solid #e0e0e0;">
                            <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                                <input type="checkbox" id="agreeTerms" name="agreeTerms" required style="cursor: pointer;" />
                                <span style="font-weight: 500;">I agree to the Terms and Conditions and Privacy Policy</span>
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="form__actions">
                        <button type="submit" class="btn btn-primary" onclick="return validatePaymentForm();">Complete Payment</button>
                        <a href="Check-In-Page.php" class="btn btn-secondary">Back to Check-in</a>
                    </div>
                </form>
            </div>

            <!-- Info Cards -->
            <div class="info__cards" style="margin-top: 3rem;">
                <div class="info__card">
                    <i class="ri-secure-payment-line"></i>
                    <h4>Secure Payment</h4>
                    <p>100% secure booking process</p>
                </div>
                <div class="info__card">
                    <i class="ri-refund-2-line"></i>
                    <h4>Free Cancellation</h4>
                    <p>Cancel up to 24 hours before</p>
                </div>
                <div class="info__card">
                    <i class="ri-customer-service-2-line"></i>
                    <h4>24/7 Support</h4>
                    <p>We're here to help anytime</p>
                </div>
                <div class="info__card">
                    <i class="ri-shield-check-line"></i>
                    <h4>Best Rate Guarantee</h4>
                    <p>Lowest prices online</p>
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
      <script>
        // Room rates mapping
        const roomRates = {
            1: 3500,
            2: 5200,
            3: 7800,
            4: 9500,
            5: 14500,
            6: 25000
        };

        // Initialize payment form
        document.addEventListener('DOMContentLoaded', function() {
            const roomType = '<?php echo $room_type_id; ?>';
            const nights = parseInt('<?php echo $num_of_nights; ?>') || 1;
            updatePriceCalculation(roomType, nights);
            setupPaymentMethod();
        });

        function updatePriceCalculation(roomType, nights) {
            const roomRate = roomRates[roomType] || 150;
            const subtotal = roomRate * nights;
            const taxes = subtotal * 0.1;
            const total = subtotal + taxes;

            document.getElementById('roomRate').textContent = '$' + roomRate.toFixed(2);
            document.getElementById('subtotal').textContent = '$' + subtotal.toFixed(2);
            document.getElementById('taxes').textContent = '$' + taxes.toFixed(2);
            document.getElementById('totalAmount').textContent = '$' + total.toFixed(2);
        }

        function setupPaymentMethod() {
            const paymentMethods = document.querySelectorAll('input[name="paymentMethod"]');
            const cardDetails = document.getElementById('cardDetails');

            paymentMethods.forEach(method => {
                method.addEventListener('change', function() {
                    if (this.value === 'credit_card' || this.value === 'debit_card') {
                        cardDetails.style.display = 'block';
                        // Make card fields required
                        document.getElementById('cardName').required = true;
                        document.getElementById('cardNumber').required = true;
                        document.getElementById('expiryDate').required = true;
                        document.getElementById('cvv').required = true;
                    } else {
                        cardDetails.style.display = 'none';
                        // Make card fields optional
                        document.getElementById('cardName').required = false;
                        document.getElementById('cardNumber').required = false;
                        document.getElementById('expiryDate').required = false;
                        document.getElementById('cvv').required = false;
                    }
                });
            });
        }

        // Card number formatting
        document.getElementById('cardNumber').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\s/g, '');
            let formattedValue = '';

            for (let i = 0; i < value.length; i++) {
                if (i > 0 && i % 4 === 0) {
                    formattedValue += ' ';
                }
                formattedValue += value[i];
            }

            e.target.value = formattedValue;

            if (value.length === 16) {
                const isValid = validateCardNumber(value);
                e.target.style.borderColor = isValid ? '#27ae60' : '#e74c3c';
            } else {
                e.target.style.borderColor = '#e0e0e0';
            }
        });

        // Expiry date formatting
        document.getElementById('expiryDate').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');

            if (value.length >= 2) {
                value = value.slice(0, 2) + '/' + value.slice(2, 4);
            }

            e.target.value = value;
        });

        // CVV validation
        document.getElementById('cvv').addEventListener('input', function(e) {
            e.target.value = e.target.value.replace(/\D/g, '').slice(0, 4);
        });

    function validateCardNumber(cardNumber) {
    return /^\d+$/.test(cardNumber);
}

        // Validate payment form before submission
        function validatePaymentForm() {
            // Check terms agreement
            if (!document.getElementById('agreeTerms').checked) {
                alert('Please agree to the Terms and Conditions');
                return false;
            }

            const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;

            if (paymentMethod === 'credit_card' || paymentMethod === 'debit_card') {
                const cardName = document.getElementById('cardName').value.trim();
                const cardNumber = document.getElementById('cardNumber').value.replace(/\s/g, '');
                const expiryDate = document.getElementById('expiryDate').value;
                const cvv = document.getElementById('cvv').value;

                if (!cardName) {
                    alert('Please enter cardholder name');
                    document.getElementById('cardName').focus();
                    return false;
                }

                if (cardNumber.length !== 16) {
                    alert('Please enter a valid 16-digit card number');
                    document.getElementById('cardNumber').focus();
                    return false;
                }

                if (!validateCardNumber(cardNumber)) {
                    alert('Invalid card number');
                    document.getElementById('cardNumber').focus();
                    return false;
                }

                if (!expiryDate.match(/^\d{2}\/\d{2}$/)) {
                    alert('Please enter expiry date in MM/YY format');
                    document.getElementById('expiryDate').focus();
                    return false;
                }

                if (cvv.length < 3 || cvv.length > 4) {
                    alert('Please enter a valid CVV (3-4 digits)');
                    document.getElementById('cvv').focus();
                    return false;
                }
            }

            return true;
        }
      </script>
</body>
</html>
