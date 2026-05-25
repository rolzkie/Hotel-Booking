<?php
    // ================================
    // DATABASE CONNECTION
    // ================================
    include_once("Connection/connect.php");
    $conn = connect();
    
    if(!$conn) {
        die("Database connection failed");
    }

    // ================================
    // GET FORM DATA
    // ================================
    $full_name      = $_POST['fullname'] ?? '';
    $email          = $_POST['email'] ?? '';
    $phone_number   = $_POST['phone'] ?? '';

    $room_type_id   = $_POST['roomtype'] ?? '';

    $check_in       = $_POST['checkin'] ?? '';
    $check_out      = $_POST['checkout'] ?? '';
    $num_of_nights  = $_POST['nights'] ?? 0;
    $num_of_guests  = $_POST['guests'] ?? 1;

    $special_request = $_POST['comments'] ?? '';
    $payment_method = $_POST['paymentMethod'] ?? 'credit_card';
    $booking_status  = "Confirmed";

    // Room names and rates
    $room_names = [
        '1' => 'Deluxe Room',
        '2' => 'Deluxe Premier Room',
        '3' => 'Executive Suite',
        '4' => 'Family Suite',
        '5' => 'Royal Suite',
        '6' => 'Presidential Suite'
    ];

    $room_rates = [
        1 => 3500,
        2 => 5200,
        3 => 7800,
        4 => 9500,
        5 => 14500,
        6 => 25000
    ];

    $selected_room = $room_names[$room_type_id] ?? 'Unknown Room';
    $room_rate = $room_rates[$room_type_id] ?? 150;
    $subtotal = $room_rate * intval($num_of_nights);
    $taxes = $subtotal * 0.1;
    $total_amount = $subtotal + $taxes;

    // ================================
    // GET PROMO CODE ID (convert code → ID)
    // ================================
    $promo_code_id = NULL;

    if (!empty($_POST['specialcode'])) {
        $code = $_POST['specialcode'];

        $promo_stmt = $conn->prepare("
            SELECT promo_code_id 
            FROM promo_codes 
            WHERE promo_code = ?
        ");

        $promo_stmt->bind_param("s", $code);
        $promo_stmt->execute();
        $promo_stmt->bind_result($promo_code_id);
        $promo_stmt->fetch();
        $promo_stmt->close();
    }

    // ================================
    // INSERT INTO GUESTS TABLE
    // ================================
    $booking_success = false;
    $booking_id = null;
    $guest_id = null;

    // Check if guest with this email already exists
    $check_guest_sql = "SELECT guest_id FROM guests WHERE email = ?";
    $check_stmt = $conn->prepare($check_guest_sql);
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();

    if ($check_result->num_rows > 0) {
        $row = $check_result->fetch_assoc();
        $guest_id = $row['guest_id'];
    } else {
        // Insert new guest
        $guest_sql = "INSERT INTO guests (full_name, email, phone_number) VALUES (?, ?, ?)";
        $guest_stmt = $conn->prepare($guest_sql);
        $guest_stmt->bind_param("sss", $full_name, $email, $phone_number);

        if ($guest_stmt->execute()) {
            $guest_id = $conn->insert_id;
        } else {
            error_log("Guest Insert Error: " . $guest_stmt->error);
            $guest_stmt->close();
            $check_stmt->close();
            $conn->close();
            // Show error page by skipping booking_success
            $guest_id = null;
        }
        $guest_stmt->close();
    }

    $check_stmt->close();

    if ($guest_id):

        // ================================
        // INSERT INTO BOOKINGS TABLE
        // ================================
        $booking_sql = "INSERT INTO bookings
        (
            guest_id,
            room_type_id,
            promo_code_id,
            check_in,
            check_out,
            num_of_nights,
            num_of_guests,
            special_request,
            booking_status
        )
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $booking_stmt = $conn->prepare($booking_sql);

        $booking_stmt->bind_param(
            "iiisssiss",
            $guest_id,
            $room_type_id,
            $promo_code_id,
            $check_in,
            $check_out,
            $num_of_nights,
            $num_of_guests,
            $special_request,
            $booking_status
        );

        if ($booking_stmt->execute()) {
            $booking_success = true;
            $booking_id = $conn->insert_id;
        } else {
            error_log("Booking Error: " . $booking_stmt->error);
        }

        $booking_stmt->close();
    endif;
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/index.css" />
    <link rel="stylesheet" href="styles/checkin.css" />
    <link rel="icon" href="assets/icon/ICON.png" />
    <title>Booking Confirmation | Aurora Hotel</title>
    <style>
        .confirmation__container {
            max-width: 800px;
            margin: 3rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .success__header {
            text-align: center;
            margin-bottom: 2rem;
            padding-bottom: 2rem;
            border-bottom: 2px solid #f0f0f0;
        }

        .success__icon {
            width: 80px;
            height: 80px;
            background-color: rgba(39, 174, 96, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 3rem;
            color: #27ae60;
        }

        .success__title {
            font-size: 2rem;
            color: #27ae60;
            margin: 0 0 0.5rem 0;
        }

        .booking__reference {
            font-size: 1rem;
            color: var(--text-light);
            margin: 1rem 0 0 0;
        }

        .confirmation__section {
            margin: 2rem 0;
        }

        .section__title {
            font-size: 1.1rem;
            color: var(--text-dark);
            font-weight: 600;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--primary-color);
        }

        .info__grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-bottom: 1rem;
        }

        .info__item {
            padding: 1rem;
            background-color: #f9f7f4;
            border-radius: 8px;
        }

        .info__label {
            font-size: 0.85rem;
            color: var(--text-light);
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 0.5rem;
        }

        .info__value {
            font-size: 1rem;
            color: var(--text-dark);
            font-weight: 600;
        }

        .info__value.highlight {
            color: var(--primary-color);
        }

        .billing__info {
            background-color: #fafafa;
            padding: 1.5rem;
            border-radius: 8px;
            border-left: 4px solid var(--primary-color);
        }

        .billing__row {
            display: flex;
            justify-content: space-between;
            padding: 0.75rem 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .billing__row:last-child {
            border-bottom: none;
        }

        .billing__row.total {
            font-weight: 700;
            font-size: 1.1rem;
            padding: 1rem 0;
            border-top: 2px solid #e0e0e0;
            color: var(--primary-color);
        }

        .action__buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 1rem 2rem;
            font-size: 1rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            transition: 0.3s;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-color-dark);
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: #e0e0e0;
            color: var(--text-dark);
        }

        .btn-secondary:hover {
            background-color: #d0d0d0;
        }

        @media (max-width: 768px) {
            .info__grid {
                grid-template-columns: 1fr;
            }

            .confirmation__container {
                margin: 1rem;
                padding: 1rem;
            }
        }
    </style>
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
        </nav>
    </header>

    <main class="section__container" style="background-color: #f9f7f4; padding: 3rem 1rem;">
        <?php if ($booking_success): ?>
            <!-- Progress Steps -->
            <section class="section__container" style="padding: 2rem 1rem; background-color: #f9f7f4; margin-bottom: 2rem;">
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
                        <div class="step completed">
                            <div class="step__circle">
                                <i class="ri-user-line"></i>
                            </div>
                            <p>Guest Information</p>
                        </div>
                        <div class="step__line"></div>
                        <div class="step completed">
                            <div class="step__circle">
                                <i class="ri-bank-card-line"></i>
                            </div>
                            <p>Payment</p>
                        </div>
                        <div class="step__line"></div>
                        <div class="step completed active">
                            <div class="step__circle">
                                <i class="ri-check-double-line"></i>
                            </div>
                            <p>Check-in Done</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="confirmation__container">
                <!-- Success Header -->
                <div class="success__header">
                    <div class="success__icon">
                        <i class="ri-check-line"></i>
                    </div>
                    <h1 class="success__title">Booking Confirmed!</h1>
                    <p style="color: var(--text-light); margin-bottom: 0;">Thank you for your reservation</p>
                    <?php if ($booking_id): ?>
                        <p class="booking__reference">Booking ID: <strong>#<?php echo str_pad($booking_id, 5, '0', STR_PAD_LEFT); ?></strong></p>
                    <?php endif; ?>
                </div>

                <!-- Guest Information -->
                <div class="confirmation__section">
                    <h2 class="section__title">Guest Information</h2>
                    <div class="info__grid">
                        <div class="info__item">
                            <div class="info__label">Full Name</div>
                            <div class="info__value"><?php echo htmlspecialchars($full_name); ?></div>
                        </div>
                        <div class="info__item">
                            <div class="info__label">Email Address</div>
                            <div class="info__value"><?php echo htmlspecialchars($email); ?></div>
                        </div>
                        <div class="info__item">
                            <div class="info__label">Phone Number</div>
                            <div class="info__value"><?php echo htmlspecialchars($phone_number); ?></div>
                        </div>
                        <div class="info__item">
                            <div class="info__label">Payment Method</div>
                            <div class="info__value"><?php echo ucfirst(str_replace('_', ' ', $payment_method)); ?></div>
                        </div>
                    </div>
                </div>

                <!-- Booking Details -->
                <div class="confirmation__section">
                    <h2 class="section__title">Booking Details</h2>
                    <div class="info__grid">
                        <div class="info__item">
                            <div class="info__label">Room Type</div>
                            <div class="info__value highlight"><?php echo $selected_room; ?></div>
                        </div>
                        <div class="info__item">
                            <div class="info__label">Check-in Date</div>
                            <div class="info__value"><?php echo date('F j, Y', strtotime($check_in)); ?></div>
                        </div>
                        <div class="info__item">
                            <div class="info__label">Check-out Date</div>
                            <div class="info__value"><?php echo date('F j, Y', strtotime($check_out)); ?></div>
                        </div>
                        <div class="info__item">
                            <div class="info__label">Number of Nights</div>
                            <div class="info__value"><?php echo $num_of_nights; ?> night(s)</div>
                        </div>
                        <div class="info__item">
                            <div class="info__label">Number of Guests</div>
                            <div class="info__value"><?php echo $num_of_guests; ?> guest(s)</div>
                        </div>
                        <div class="info__item">
                            <div class="info__label">Check-in Time</div>
                            <div class="info__value">3:00 PM</div>
                        </div>
                    </div>
                    <?php if (!empty($special_request)): ?>
                        <div class="info__item" style="margin-top: 1rem;">
                            <div class="info__label">Special Requests</div>
                            <div class="info__value"><?php echo htmlspecialchars($special_request); ?></div>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Billing Summary -->
                <div class="confirmation__section">
                    <h2 class="section__title">Billing Summary</h2>
                    <div class="billing__info">
                        <div class="billing__row">
                            <span>Room Rate per Night:</span>
                            <span>₱<?php echo number_format($room_rate, 2); ?></span>
                        </div>
                        <div class="billing__row">
                            <span>Number of Nights:</span>
                            <span><?php echo $num_of_nights; ?></span>
                        </div>
                        <div class="billing__row">
                            <span>Subtotal:</span>
                            <span>₱<?php echo number_format($subtotal, 2); ?></span>
                        </div>
                        <div class="billing__row">
                            <span>Taxes & Fees (10%):</span>
                            <span>₱<?php echo number_format($taxes, 2); ?></span>
                        </div>
                        <div class="billing__row total">
                            <span>Total Amount Paid:</span>
                            <span>₱<?php echo number_format($total_amount, 2); ?></span>
                        </div>
                    </div>
                </div>

                <!-- Important Information -->
                <div class="confirmation__section">
                    <h2 class="section__title">Important Information</h2>
                    <div style="background-color: #fffbea; padding: 1rem; border-radius: 8px; border-left: 4px solid #f39c12;">
                        <p><strong>Confirmation Email:</strong> A detailed confirmation has been sent to <?php echo htmlspecialchars($email); ?></p>
                        <p><strong>Hotel Contact:</strong> +1 (555) 123-4567 | aurora.hotelresort@gmail.com</p>
                        <p><strong>Cancellation Policy:</strong> Free cancellation up to 24 hours before check-in</p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="action__buttons">
                    <a href="index.php" class="btn btn-primary">
                        <i class="ri-home-line"></i> Return to Home
                    </a>
                    <a href="Check-In-Page.php" class="btn btn-secondary">
                        <i class="ri-calendar-line"></i> Make Another Booking
                    </a>
                </div>
            </div>
        <?php else: ?>
            <div class="confirmation__container">
                <div class="success__header">
                    <div style="width: 80px; height: 80px; background-color: rgba(231, 76, 60, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 3rem; color: #e74c3c;">
                        <i class="ri-error-warning-line"></i>
                    </div>
                    <h1 style="font-size: 2rem; color: #e74c3c; margin: 0;">Booking Error</h1>
                    <p style="color: var(--text-light); margin-bottom: 0;">There was an issue processing your booking.</p>
                </div>

                <div style="background-color: #ffe0e0; padding: 1rem; border-radius: 8px; margin: 2rem 0; border-left: 4px solid #e74c3c;">
                    <p>Please contact our support team for assistance:</p>
                    <p><strong>Email:</strong> aurora.hotelresort@gmail.com</p>
                    <p><strong>Phone:</strong> +1 (555) 123-4567</p>
                </div>

                <div class="action__buttons">
                    <a href="Check-In-Page.php" class="btn btn-primary">
                        <i class="ri-arrow-left-line"></i> Try Again
                    </a>
                    <a href="index.php" class="btn btn-secondary">
                        <i class="ri-home-line"></i> Return to Home
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </main>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="Js/main.js"></script>
</body>
</html>