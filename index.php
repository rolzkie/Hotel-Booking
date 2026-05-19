<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hotel</title>
  <link rel="stylesheet" href="Styles/index.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="image/Logo/VLogo.png" />
</head>

<body>
  <header class="top-bar">
    <div class="top-left">
      <span><i class="fas fa-phone-alt"></i> +63 2 7755 7888</span>
      <span><i class="fas fa-envelope"></i> reservations@imhotel.com</span>
    </div>
    <div class="top-right">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-tiktok"></i></a>
    </div>
  </header>

  <nav class="main-nav">
    <div class="brand">
      <a href="#">Diamond Hotel</a>
    </div>
    <ul class="nav-links">
      <li><a href="#rooms">Rooms</a></li>
      <li><a href="#dining">Dining</a></li>
      <li><a href="#facilities">Facilities</a></li>
      <li><a href="#offers">Offers</a></li>
      <li><a href="#reviews">Guest Reviews</a></li>
      <li><a href="#about">About Us</a></li>
    </ul>
    <a class="btn-book" href="#offers">BOOK NOW</a>
    <button class="menu-toggle" aria-label="Toggle menu"><i class="fas fa-bars"></i></button>
  </nav>

  <?php include 'sections/welcome.php'; ?>
  <?php include 'sections/about.php'; ?>
  <?php include 'sections/rooms.php'; ?>
  <?php include 'sections/offers.php'; ?>

  
  <?php include 'sections/facilities.php'; ?>
  <?php include 'sections/reviews.php'; ?>

  <footer class="site-footer">
    <div class="container footer-top">
      <div class="footer-brand">
        <h2>Diamond Hotel Philippines</h2>
        <p>Roxas Boulevard, corner Dr. J. Quintos Street, Manila, Philippines 1000</p>
        <p>(632) 8-528-3000 | (632) 5-305-3000</p>
      </div>
      <div class="footer-links">
        <div>
          <h3>Explore</h3>
          <a href="#rooms">Rooms</a>
          <a href="#dining">Dining</a>
          <a href="#facilities">Meetings & Events</a>
          <a href="#facilities">Facilities & Amenities</a>
        </div>
        <div>
          <h3>More</h3>
          <a href="#offers">Latest Offers</a>
          <a href="#reviews">News</a>
          <a href="#reviews">Guest Reviews</a>
          <a href="#">Explore Manila</a>
        </div>
        <div>
          <h3>Support</h3>
          <a href="#">Contact Us</a>
          <a href="#">Online Shopping</a>
          <a href="#">Privacy Policy</a>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <p>All Rights Reserved 2026 © Copyright Diamond Hotel Philippines</p>
    </div>
  </footer>

  <script>
  // Mobile Menu Toggle
  const toggle = document.querySelector('.menu-toggle');
  const links = document.querySelector('.nav-links');

  toggle.addEventListener('click', () => {
    links.classList.toggle('active');
  });

  // Initialize all carousels
  document.addEventListener('DOMContentLoaded', () => {
    const carousels = document.querySelectorAll('.carousel-container');

    carousels.forEach((carousel) => {
      const scrollRow = carousel.querySelector('.scroll-row');
      const prevBtn = carousel.querySelector('.carousel-btn-prev');
      const nextBtn = carousel.querySelector('.carousel-btn-next');

      let paused = false;
      const speed = 1;
      const moveDistance = 206; // 200px card + 6px gap

      // Scroll by button click
      prevBtn.addEventListener('click', () => {
        paused = true;
        scrollRow.scrollBy({ left: -moveDistance, behavior: 'smooth' });
        setTimeout(() => { paused = false; }, 600);
      });

      nextBtn.addEventListener('click', () => {
        paused = true;
        scrollRow.scrollBy({ left: moveDistance, behavior: 'smooth' });
        setTimeout(() => { paused = false; }, 600);
      });

      // Pause on hover
      scrollRow.addEventListener('mouseenter', () => { paused = true; });
      scrollRow.addEventListener('mouseleave', () => { paused = false; });

      // Auto-scroll animation
      const autoScroll = () => {
        if (!paused && scrollRow.scrollWidth > scrollRow.clientWidth) {
          scrollRow.scrollLeft += speed;

          // Reset to start when reaching end
          if (scrollRow.scrollLeft + scrollRow.clientWidth >= scrollRow.scrollWidth - 2) {
            scrollRow.scrollLeft = 0;
          }
        }
        requestAnimationFrame(autoScroll);
      };

      autoScroll();
    });
  });
  </script>
</body>
</html>