// Check-in Page JavaScript Functionality

class CheckInCalendar {
    constructor() {
        this.currentDate = new Date();
        this.selectedDates = {
            checkIn: null,
            checkOut: null
        };
        this.unavailableDates = this.generateUnavailableDates();
        this.init();
    }

    init() {
        this.setupEventListeners();
        this.renderCalendar();
        this.setMinDate();
    }

    setupEventListeners() {
        // Navigation buttons
        document.getElementById('prevMonth')?.addEventListener('click', () => this.previousMonth());
        document.getElementById('nextMonth')?.addEventListener('click', () => this.nextMonth());

        // Date inputs
        document.getElementById('checkin-date')?.addEventListener('change', (e) => this.handleDateInput(e));
        document.getElementById('checkout-date')?.addEventListener('change', (e) => this.handleCheckoutInput(e));

        // Guest count
        document.getElementById('guests')?.addEventListener('change', () => this.updateFormData());

        // Form submission
        document.getElementById('checkinForm')?.addEventListener('submit', (e) => this.handleFormSubmit(e));

        // Reset form
        document.getElementById('checkinForm')?.addEventListener('reset', () => this.resetCalendar());
    }

    setMinDate() {
        const today = new Date();
        const dateString = today.toISOString().split('T')[0];
        const checkinInput = document.getElementById('checkin-date');
        const checkoutInput = document.getElementById('checkout-date');

        if (checkinInput) checkinInput.min = dateString;
        if (checkoutInput) checkoutInput.min = dateString;
    }

    generateUnavailableDates() {
        // Example: Mark some dates as unavailable
        const unavailable = [];
        const today = new Date();

        // Add some random unavailable dates for demo
        for (let i = 0; i < 5; i++) {
            const date = new Date(today);
            date.setDate(date.getDate() + Math.floor(Math.random() * 60) + 20);
            unavailable.push(this.formatDate(date));
        }

        return unavailable;
    }

    formatDate(date) {
        return date.toISOString().split('T')[0];
    }

    renderCalendar() {
        const year = this.currentDate.getFullYear();
        const month = this.currentDate.getMonth();

        // Update header
        const options = { month: 'long', year: 'numeric' };
        const monthYearString = this.currentDate.toLocaleDateString('en-US', options);
        const monthHeader = document.getElementById('currentMonth');
        if (monthHeader) monthHeader.textContent = monthYearString;

        // Get first day and number of days
        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        const calendarDates = document.getElementById('calendarDates');
        if (!calendarDates) return;

        calendarDates.innerHTML = '';

        // Empty cells before first day
        for (let i = 0; i < firstDay; i++) {
            const emptyCell = document.createElement('div');
            emptyCell.className = 'calendar__date empty';
            calendarDates.appendChild(emptyCell);
        }

        // Days of month
        for (let day = 1; day <= daysInMonth; day++) {
            const dateCell = document.createElement('div');
            dateCell.textContent = day;

            const cellDate = new Date(year, month, day);
            const dateString = this.formatDate(cellDate);
            const isToday = this.isToday(cellDate);
            const isUnavailable = this.unavailableDates.includes(dateString);
            const isSelected = this.isDateSelected(dateString);
            const isInRange = this.isDateInRange(dateString);

            dateCell.className = 'calendar__date';

            if (isUnavailable) {
                dateCell.classList.add('unavailable');
                dateCell.style.pointerEvents = 'none';
            } else if (isToday || cellDate > new Date()) {
                dateCell.classList.add('available');
                dateCell.addEventListener('click', () => this.selectDate(dateString));
            }

            if (isSelected) {
                dateCell.classList.add('selected');
            } else if (isInRange && !isSelected) {
                dateCell.classList.add('range');
            }

            calendarDates.appendChild(dateCell);
        }
    }

    isToday(date) {
        const today = new Date();
        return date.toDateString() === today.toDateString();
    }

    isDateSelected(dateString) {
        return this.selectedDates.checkIn === dateString || this.selectedDates.checkOut === dateString;
    }

    isDateInRange(dateString) {
        if (!this.selectedDates.checkIn || !this.selectedDates.checkOut) return false;

        const date = new Date(dateString);
        const checkIn = new Date(this.selectedDates.checkIn);
        const checkOut = new Date(this.selectedDates.checkOut);

        return date > checkIn && date < checkOut;
    }

    selectDate(dateString) {
        const checkinDate = document.getElementById('checkin-date');
        const checkoutDate = document.getElementById('checkout-date');

        if (!this.selectedDates.checkIn || (this.selectedDates.checkIn && this.selectedDates.checkOut)) {
            // Set check-in date
            this.selectedDates.checkIn = dateString;
            this.selectedDates.checkOut = null;
            if (checkinDate) checkinDate.value = dateString;
            if (checkoutDate) checkoutDate.value = '';
        } else if (dateString > this.selectedDates.checkIn) {
            // Set check-out date
            this.selectedDates.checkOut = dateString;
            if (checkoutDate) checkoutDate.value = dateString;
            this.calculateNights();
        } else {
            // Reset and set new check-in
            this.selectedDates.checkIn = dateString;
            this.selectedDates.checkOut = null;
            if (checkinDate) checkinDate.value = dateString;
            if (checkoutDate) checkoutDate.value = '';
        }

        this.renderCalendar();
    }

    handleDateInput(e) {
        const dateString = e.target.value;
        if (dateString) {
            this.selectedDates.checkIn = dateString;
            // Auto-set checkout to next day
            const checkInDate = new Date(dateString);
            const checkOutDate = new Date(checkInDate);
            checkOutDate.setDate(checkOutDate.getDate() + 1);
            this.selectedDates.checkOut = this.formatDate(checkOutDate);

            const checkoutInput = document.getElementById('checkout-date');
            if (checkoutInput) checkoutInput.value = this.selectedDates.checkOut;

            this.calculateNights();
            this.renderCalendar();
        }
    }

    handleCheckoutInput(e) {
        const dateString = e.target.value;
        if (dateString) {
            this.selectedDates.checkOut = dateString;
            this.calculateNights();
            this.renderCalendar();
        }
    }

    calculateNights() {
        if (this.selectedDates.checkIn && this.selectedDates.checkOut) {
            const checkIn = new Date(this.selectedDates.checkIn);
            const checkOut = new Date(this.selectedDates.checkOut);
            const nights = Math.floor((checkOut - checkIn) / (1000 * 60 * 60 * 24));

            if (nights > 0) {
                const nightsInput = document.getElementById('nights');
                if (nightsInput) nightsInput.value = nights;
            }
        }
    }

    previousMonth() {
        this.currentDate.setMonth(this.currentDate.getMonth() - 1);
        this.renderCalendar();
    }

    nextMonth() {
        this.currentDate.setMonth(this.currentDate.getMonth() + 1);
        this.renderCalendar();
    }

    updateFormData() {
        // Update any dependent form fields
        console.log('Form data updated');
    }

    handleFormSubmit(e) {
        e.preventDefault();

        // Validate form
        const formData = new FormData(document.getElementById('checkinForm'));
        const data = Object.fromEntries(formData);

        if (!data.checkin || !data.checkout) {
            alert('Please select both check-in and check-out dates.');
            return;
        }

        if (!data.guests) {
            alert('Please select number of guests.');
            return;
        }

        console.log('Form submitted with data:', data);
        document.getElementById('checkinForm').submit();
    }

    resetCalendar() {
        this.selectedDates = {
            checkIn: null,
            checkOut: null
        };
        this.currentDate = new Date();
        this.renderCalendar();
    }
}

// Initialize calendar when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new CheckInCalendar();

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

// Mobile menu toggle (if it exists in main.js)
document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('menu-btn');
    const navLinks = document.getElementById('nav-links');

    if (menuBtn && navLinks) {
        menuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    }
});
