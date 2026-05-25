-- Aurora Hotel Booking Database Setup
-- Create this database and tables in phpMyAdmin or MySQL CLI

-- 1. Create Guests Table
CREATE TABLE IF NOT EXISTS guests (
    guest_id INT PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone_number VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 2. Create Promo Codes Table
CREATE TABLE IF NOT EXISTS promo_codes (
    promo_code_id INT PRIMARY KEY AUTO_INCREMENT,
    promo_code VARCHAR(50) NOT NULL UNIQUE,
    discount_percentage DECIMAL(5, 2) DEFAULT 0,
    discount_amount DECIMAL(10, 2) DEFAULT 0,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 3. Create Bookings Table
CREATE TABLE IF NOT EXISTS bookings (
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
);

-- 4. Create Room Types Table (optional, for reference)
CREATE TABLE IF NOT EXISTS room_types (
    room_type_id INT PRIMARY KEY,
    room_name VARCHAR(100) NOT NULL,
    description TEXT,
    price_per_night DECIMAL(10, 2) NOT NULL,
    capacity INT DEFAULT 2,
    amenities TEXT
);

-- 5. Insert Sample Room Types
INSERT INTO room_types (room_type_id, room_name, price_per_night, capacity) VALUES
(1, 'Deluxe Room', 150.00, 2),
(2, 'Deluxe Premier Room', 200.00, 2),
(3, 'Executive Suite', 250.00, 2),
(4, 'Family Suite', 280.00, 4),
(5, 'Royal Suite', 350.00, 2),
(6, 'Presidential Suite', 450.00, 2);

-- 6. Insert Sample Promo Codes (optional)
INSERT INTO promo_codes (promo_code, discount_percentage, is_active) VALUES
('WELCOME10', 10, TRUE),
('SUMMER20', 20, TRUE),
('HOLIDAY15', 15, TRUE);
