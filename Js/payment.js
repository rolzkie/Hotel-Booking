// Payment Page JavaScript Functionality

class PaymentPage {
    constructor() {
        this.roomRates = {
            1: 3500,  // Deluxe Room
            2: 5200,  // Deluxe Premier Room
            3: 7800,  // Executive Suite
            4: 9500,  // Family Suite
            5: 14500,  // Royal Suite
            6: 25000   // Presidential Suite
        };
        
        this.roomNames = {
            1: 'Deluxe Room',
            2: 'Deluxe Premier Room',
            3: 'Executive Suite',
            4: 'Family Suite',
            5: 'Royal Suite',
            6: 'Presidential Suite'
        };
        
        this.init();
    }

    init() {
        this.loadBookingData();
        this.setupEventListeners();
        this.updatePriceSummary();
    }

    loadBookingData() {
        // Retrieve data from form submission (POST)
        const urlParams = new URLSearchParams(window.location.search);
        
        // Data from POST form - we'll use FormData from the form submission
        // Since it's a POST, we'll store it in sessionStorage or retrieve from page data
        
        // For now, let's get data from sessionStorage if available
        const bookingData = JSON.parse(sessionStorage.getItem('bookingData') || '{}');
        
        // Display booking summary
        document.getElementById('displayName').textContent = bookingData.fullname || '-';
        document.getElementById('displayEmail').textContent = bookingData.email || '-';
        document.getElementById('displayPhone').textContent = bookingData.phone || '-';
        
        const roomId = bookingData.roomtype || '1';
        document.getElementById('displayRoom').textContent = this.roomNames[roomId] || '-';
        document.getElementById('displayCheckIn').textContent = this.formatDate(bookingData.checkin) || '-';
        document.getElementById('displayCheckOut').textContent = this.formatDate(bookingData.checkout) || '-';
        document.getElementById('displayNights').textContent = bookingData.nights || '1';
        document.getElementById('displayGuests').textContent = bookingData.guests || '1';

        // Pre-fill cardholder name with guest name
        if (bookingData.fullname) {
            document.getElementById('cardName').value = bookingData.fullname;
        }
    }

    formatDate(dateString) {
        if (!dateString) return '';
        const date = new Date(dateString);
        return date.toLocaleDateString('en-US', { 
            weekday: 'short', 
            year: 'numeric', 
            month: 'short', 
            day: 'numeric' 
        });
    }

    setupEventListeners() {
        // Payment method selection
        const paymentMethods = document.querySelectorAll('input[name="paymentMethod"]');
        paymentMethods.forEach(method => {
            method.addEventListener('change', (e) => this.handlePaymentMethodChange(e));
        });

        // Card number formatting
        const cardNumber = document.getElementById('cardNumber');
        if (cardNumber) {
            cardNumber.addEventListener('input', (e) => this.formatCardNumber(e));
        }

        // Expiry date formatting
        const expiryDate = document.getElementById('expiryDate');
        if (expiryDate) {
            expiryDate.addEventListener('input', (e) => this.formatExpiryDate(e));
        }

        // CVV validation
        const cvv = document.getElementById('cvv');
        if (cvv) {
            cvv.addEventListener('input', (e) => this.validateCVV(e));
        }

        // Form submission
        const paymentForm = document.getElementById('paymentForm');
        if (paymentForm) {
            paymentForm.addEventListener('submit', (e) => this.handlePaymentSubmit(e));
        }

        // Card name sync with guest name
        const cardName = document.getElementById('cardName');
        if (cardName && !cardName.value) {
            cardName.placeholder = 'Name on card';
        }
    }

    handlePaymentMethodChange(e) {
        const selectedMethod = e.target.value;
        const cardDetails = document.getElementById('cardDetails');

        if (selectedMethod === 'credit_card' || selectedMethod === 'debit_card') {
            if (cardDetails) cardDetails.classList.remove('hidden');
        } else {
            if (cardDetails) cardDetails.classList.add('hidden');
        }
    }

    formatCardNumber(e) {
        let value = e.target.value.replace(/\s/g, '');
        let formattedValue = '';

        for (let i = 0; i < value.length; i++) {
            if (i > 0 && i % 4 === 0) {
                formattedValue += ' ';
            }
            formattedValue += value[i];
        }

        e.target.value = formattedValue;

        // Validate card number
        if (value.length === 16) {
            const isValid = this.validateCardNumber(value);
            e.target.style.borderColor = isValid ? '#27ae60' : '#e74c3c';
            e.target.style.backgroundColor = isValid ? 'rgba(39, 174, 96, 0.05)' : 'rgba(231, 76, 60, 0.05)';
        } else {
            e.target.style.borderColor = '#e0e0e0';
            e.target.style.backgroundColor = 'transparent';
        }
    }

    validateCardNumber(cardNumber) {
        // Luhn algorithm validation
        let sum = 0;
        let isEven = false;

        for (let i = cardNumber.length - 1; i >= 0; i--) {
            let digit = parseInt(cardNumber.charAt(i), 10);

            if (isEven) {
                digit *= 2;
                if (digit > 9) {
                    digit -= 9;
                }
            }

            sum += digit;
            isEven = !isEven;
        }

        return sum % 10 === 0;
    }

    formatExpiryDate(e) {
        let value = e.target.value.replace(/\D/g, '');

        if (value.length >= 2) {
            value = value.slice(0, 2) + '/' + value.slice(2, 4);
        }

        e.target.value = value;
    }

    validateCVV(e) {
        e.target.value = e.target.value.replace(/\D/g, '').slice(0, 4);
    }

    updatePriceSummary() {
        const bookingData = JSON.parse(sessionStorage.getItem('bookingData') || '{}');
        const roomTypeId = bookingData.roomtype || '1';
        const nights = parseInt(bookingData.nights) || 1;

        const roomRate = this.roomRates[roomTypeId] || 150;
        const subtotal = roomRate * nights;
        const taxes = subtotal * 0.1;
        const total = subtotal + taxes;

        // Update summary display
        document.getElementById('roomRate').textContent = `₱${roomRate.toFixed(2)}`;
        document.getElementById('subtotal').textContent = `₱${subtotal.toFixed(2)}`;
        document.getElementById('taxes').textContent = `₱${taxes.toFixed(2)}`;
        document.getElementById('totalAmount').textContent = `₱${total.toFixed(2)}`;
        document.getElementById('summaryNights').textContent = nights;

        console.log(`Payment Summary: Room: ₱${roomRate}, Nights: ${nights}, Total: ₱${total.toFixed(2)}`);
    }

    handlePaymentSubmit(e) {
        e.preventDefault();

        // Validate payment form
        if (!this.validatePaymentForm()) {
            return;
        }

        // Get form data
        const paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;
        
        const paymentData = {
            paymentMethod: paymentMethod
        };

        if (paymentMethod === 'credit_card' || paymentMethod === 'debit_card') {
            paymentData.cardName = document.getElementById('cardName').value;
            paymentData.cardNumber = document.getElementById('cardNumber').value.replace(/\s/g, '');
            paymentData.expiryDate = document.getElementById('expiryDate').value;
            paymentData.cvv = document.getElementById('cvv').value;
            paymentData.sameAddress = document.getElementById('sameAddress').checked;
        }

        console.log('Payment submitted:', paymentData);

        // Show success message and simulate processing
        this.showPaymentProcessing();
    }

    validatePaymentForm() {
        const agreeTerms = document.getElementById('agreeTerms');
        
        if (!agreeTerms.checked) {
            alert('Please agree to the Terms and Conditions to continue.');
            agreeTerms.focus();
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

            if (!this.validateCardNumber(cardNumber)) {
                alert('Invalid card number. Please check and try again.');
                document.getElementById('cardNumber').focus();
                return false;
            }

            if (!expiryDate.match(/^\d{2}\/\d{2}$/)) {
                alert('Please enter expiry date in MM/YY format');
                document.getElementById('expiryDate').focus();
                return false;
            }

            // Check if card is expired
            const [month, year] = expiryDate.split('/');
            const expiryYear = parseInt('20' + year);
            const expiryMonth = parseInt(month);
            const now = new Date();
            const currentYear = now.getFullYear();
            const currentMonth = now.getMonth() + 1;

            if (expiryYear < currentYear || (expiryYear === currentYear && expiryMonth < currentMonth)) {
                alert('Your card has expired. Please use a valid card.');
                document.getElementById('expiryDate').focus();
                return false;
            }

            if (cvv.length < 3 || cvv.length > 4) {
                alert('Please enter a valid CVV (3-4 digits)');
                document.getElementById('cvv').focus();
                return false;
            }
        } else if (paymentMethod === 'paypal') {
            // PayPal validation would go here
            console.log('PayPal payment selected');
        }

        return true;
    }

    showPaymentProcessing() {
        // Create a processing modal
        const modal = document.createElement('div');
        modal.className = 'payment__modal';
        modal.innerHTML = `
            <div class="modal__content">
                <div class="spinner"></div>
                <h3>Processing Payment...</h3>
                <p>Please wait while we process your payment securely.</p>
            </div>
        `;

        // Add modal styles
        const style = document.createElement('style');
        style.textContent = `
            .payment__modal {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.7);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999;
            }

            .modal__content {
                background-color: var(--white);
                padding: 3rem;
                border-radius: 10px;
                text-align: center;
                max-width: 400px;
                box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            }

            .modal__content h3 {
                margin: 1rem 0 0.5rem;
                color: var(--text-dark);
                font-size: 1.3rem;
            }

            .modal__content p {
                color: var(--text-light);
                margin: 0;
            }

            .spinner {
                width: 50px;
                height: 50px;
                border: 4px solid #f0f0f0;
                border-top-color: var(--primary-color);
                border-radius: 50%;
                animation: spin 1s linear infinite;
                margin: 0 auto;
            }

            @keyframes spin {
                to { transform: rotate(360deg); }
            }
        `;

        document.head.appendChild(style);
        document.body.appendChild(modal);

        // Simulate payment processing
        setTimeout(() => {
            modal.remove();
            this.showPaymentSuccess();
        }, 3000);
    }

    showPaymentSuccess() {
        const modal = document.createElement('div');
        modal.className = 'payment__modal';
        modal.innerHTML = `
            <div class="modal__content success">
                <div class="success__icon">
                    <i class="ri-check-line"></i>
                </div>
                <h3>Payment Successful!</h3>
                <p>Your booking has been confirmed. Redirecting to confirmation...</p>
            </div>
        `;

        // Add success styles
        const style = document.createElement('style');
        style.textContent = `
            .modal__content.success {
                max-width: 450px;
            }

            .success__icon {
                width: 70px;
                height: 70px;
                background-color: rgba(39, 174, 96, 0.1);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 1rem;
                font-size: 2rem;
                color: #27ae60;
            }

            .modal__content.success h3 {
                color: #27ae60;
            }

            .modal__content.success .btn {
                margin: 0.5rem auto;
                display: block;
                max-width: 200px;
            }
        `;

        document.head.appendChild(style);
        document.body.appendChild(modal);

        // Redirect to check-in done page after 2 seconds
        setTimeout(() => {
            window.location.href = 'Check-in-done.php';
        }, 2000);
    }
}

// Initialize payment page when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new PaymentPage();

    // Mobile menu toggle
    const menuBtn = document.getElementById('menu-btn');
    const navLinks = document.getElementById('nav-links');

    if (menuBtn && navLinks) {
        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    }

    // Smooth scroll behavior for navigation
    const navLinks = document.querySelectorAll('a[href^="#"]');
    navLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#' && document.querySelector(href)) {
                e.preventDefault();
                document.querySelector(href).scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
});
