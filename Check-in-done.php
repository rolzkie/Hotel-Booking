<?php
    // ================================
    // DATABASE CONNECTION
    // ================================
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "aurora-db";

    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    // ================================
    // GET FORM DATA
    // ================================
    $full_name      = $_POST['full_name'];
    $email          = $_POST['email'];
    $phone_number   = $_POST['phone_number'];

    $room_type_id   = $_POST['room_type_id'];
    $promo_code_id  = !empty($_POST['promo_code_id']) ? $_POST['promo_code_id'] : NULL;

    $check_in       = $_POST['check_in'];
    $check_out      = $_POST['check_out'];
    $num_of_nights  = $_POST['num_of_nights'];
    $num_of_guests  = $_POST['num_of_guests'];

    $special_request = $_POST['special_request'];
    $booking_status  = "Pending";

    // ================================
    // INSERT INTO GUESTS TABLE
    // ================================
    $guest_sql = "INSERT INTO guests (full_name, email, phone_number)
    VALUES (?, ?, ?)";

    $guest_stmt = $conn->prepare($guest_sql);
    $guest_stmt->bind_param("sss", $full_name, $email, $phone_number);

    if ($guest_stmt->execute()) {

        // Get inserted guest_id
        $guest_id = $conn->insert_id;

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
            "iiissiiss",
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
            echo "Booking submitted successfully!";
        } else {
            echo "Booking Error: " . $booking_stmt->error;
        }

        $booking_stmt->close();

    } else {
        echo "Guest Error: " . $guest_stmt->error;
    }

    $guest_stmt->close();
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
        <link rel="stylesheet" href="styles/index.css" />
        <link rel="icon" href="assets/icon/ICON.png" />
        <title>Booking Complete | Aurora Hotel</title>
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

        <main class="section__container">
            <h1>Booking Complete</h1>
            <p>Thank you for your reservation. A confirmation has been sent to your email.</p>
        </main>

        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="Js/main.js"></script>
</body>
</html>