<?php
// Database Setup Script - Run this once to create all tables
// Access via: http://localhost/Hotel%20Booking/Hotel-Booking/setup.php

include_once("Connection/connect.php");
$conn = connect();

// SQL Queries to create tables
$queries = [
    // 1. Create Guests Table
    "CREATE TABLE IF NOT EXISTS guests (
        guest_id INT PRIMARY KEY AUTO_INCREMENT,
        full_name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        phone_number VARCHAR(20) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )" => "Guests table",

    // 2. Create Promo Codes Table
    "CREATE TABLE IF NOT EXISTS promo_codes (
        promo_code_id INT PRIMARY KEY AUTO_INCREMENT,
        promo_code VARCHAR(50) NOT NULL UNIQUE,
        discount_percentage DECIMAL(5, 2) DEFAULT 0,
        discount_amount DECIMAL(10, 2) DEFAULT 0,
        is_active BOOLEAN DEFAULT TRUE,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )" => "Promo codes table",

    // 3. Create Bookings Table
    "CREATE TABLE IF NOT EXISTS bookings (
        booking_id INT PRIMARY KEY AUTO_INCREMENT,
        guest_id INT NOT NULL,
        room_type_id INT NOT NULL,
        promo_code_id INT,
        check_in DATE NOT NULL,
        check_out DATE NOT NULL,
        num_of_nights INT NOT NULL,
        num_of_guests INT NOT NULL,
        special_request TEXT,
        booking_status VARCHAR(50) DEFAULT 'Pending',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (guest_id) REFERENCES guests(guest_id) ON DELETE CASCADE,
        FOREIGN KEY (promo_code_id) REFERENCES promo_codes(promo_code_id) ON DELETE SET NULL
    )" => "Bookings table",

    // 4. Create Room Types Table
    "CREATE TABLE IF NOT EXISTS room_types (
        room_type_id INT PRIMARY KEY,
        room_name VARCHAR(100) NOT NULL,
        description TEXT,
        price_per_night DECIMAL(10, 2) NOT NULL,
        capacity INT DEFAULT 2,
        amenities TEXT
    )" => "Room types table"
];

// Execute table creation queries
$successCount = 0;
$errors = [];

foreach ($queries as $query => $tableName) {
    if ($conn->query($query)) {
        $successCount++;
        echo "<div style='color: green; padding: 10px; margin: 5px 0;'>✓ $tableName created successfully</div>";
    } else {
        $errors[] = $tableName . ": " . $conn->error;
        echo "<div style='color: red; padding: 10px; margin: 5px 0;'>✗ Error creating $tableName: " . $conn->error . "</div>";
    }
}

// Insert sample room types
$roomInserts = [
    "INSERT INTO room_types (room_type_id, room_name, price_per_night, capacity) VALUES (1, 'Deluxe Room', 150.00, 2)" => "Deluxe Room",
    "INSERT INTO room_types (room_type_id, room_name, price_per_night, capacity) VALUES (2, 'Deluxe Premier Room', 200.00, 2)" => "Deluxe Premier Room",
    "INSERT INTO room_types (room_type_id, room_name, price_per_night, capacity) VALUES (3, 'Executive Suite', 250.00, 2)" => "Executive Suite",
    "INSERT INTO room_types (room_type_id, room_name, price_per_night, capacity) VALUES (4, 'Family Suite', 280.00, 4)" => "Family Suite",
    "INSERT INTO room_types (room_type_id, room_name, price_per_night, capacity) VALUES (5, 'Royal Suite', 350.00, 2)" => "Royal Suite",
    "INSERT INTO room_types (room_type_id, room_name, price_per_night, capacity) VALUES (6, 'Presidential Suite', 450.00, 2)" => "Presidential Suite"
];

echo "<h3>Inserting Room Types:</h3>";
foreach ($roomInserts as $query => $roomName) {
    $conn->query($query);
}
echo "<div style='color: green; padding: 10px; margin: 5px 0;'>✓ Room types inserted</div>";

// Insert sample promo codes
$promoInserts = [
    "INSERT INTO promo_codes (promo_code, discount_percentage, is_active) VALUES ('WELCOME10', 10, TRUE)" => "WELCOME10",
    "INSERT INTO promo_codes (promo_code, discount_percentage, is_active) VALUES ('SUMMER20', 20, TRUE)" => "SUMMER20",
    "INSERT INTO promo_codes (promo_code, discount_percentage, is_active) VALUES ('HOLIDAY15', 15, TRUE)" => "HOLIDAY15"
];

echo "<h3>Inserting Sample Promo Codes:</h3>";
foreach ($promoInserts as $query => $promoCode) {
    $conn->query($query);
}
echo "<div style='color: green; padding: 10px; margin: 5px 0;'>✓ Promo codes inserted</div>";

$conn->close();

// Summary
echo "<hr>";
echo "<h2>Setup Summary</h2>";
echo "<p><strong>Tables Created:</strong> $successCount</p>";
if (!empty($errors)) {
    echo "<p><strong>Errors:</strong></p>";
    foreach ($errors as $error) {
        echo "<div style='color: red;'>$error</div>";
    }
}
echo "<p style='color: green;'><strong>Database setup complete! You can now start booking.</strong></p>";
echo "<a href='Check-In-Page.php' style='padding: 10px 20px; background: #8B7355; color: white; text-decoration: none; border-radius: 5px;'>Go to Check-in Page</a>";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Database Setup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f9f7f4;
        }
        h1 { color: #8B7355; }
    </style>
</head>
<body>
    <h1>Aurora Hotel - Database Setup</h1>
</body>
</html>
