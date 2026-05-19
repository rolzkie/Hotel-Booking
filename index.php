<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hotel</title>
  <link rel="stylesheet" href="styles/index.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="assets/iconblack.png" />
</head>

<body>
  <header class="top-bar">
    <div class="top-left">
      <span><i class="fas fa-phone-alt"></i>  <div class="top-left-text">+63 2 7755 7888</span>
      <span><i class="fas fa-envelope"></i> reservations@imhotel.com</span>
    </div></div>
    <div class="top-right">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-tiktok"></i></a>
    </div>
  </header>

  <nav class="main-nav">
    <div class="brand">
      <a class="logo" href="#"><img class="logo-img" src="assets/logo.png" alt="Diamond Hotel logo" /></a>
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
<main class="welcome-section">
  <div class="welcome-copy">
    <span class="eyebrow">Premium comfort in Manila</span>
    <h1>Experience the city in style</h1>
    <p>Stay at the landmark destination with refined rooms, contemporary dining, and thoughtfully curated amenities.</p>
  </div>

  <form class="search-form" action="#" method="get">
    <div class="search-field">
      <label for="checkin">CHECK-IN</label>
      <input type="date" id="checkin" name="checkin" />
    </div>
    <div class="search-field">
      <label for="checkout">CHECK-OUT</label>
      <input type="date" id="checkout" name="checkout" />
    </div>
    <div class="search-field">
      <label for="adults">ADULTS</label>
      <select id="adults" name="adults">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
      </select>
    </div>
    <button type="submit">SEARCH AVAILABILITY</button>
  </form>
</main>


<section id="about" class="section about-section">
  <div class="container split-grid about-grid">
    <div>
      <div class="section-header">
        <p>About Us</p>
        <h2>Where iconic hospitality meets modern comfort.</h2>
      </div>
      <p class="section-copy">Diamond Hotel Philippines offers a welcoming retreat at the heart of the city. Every stay is enhanced by elegant rooms, vibrant dining, and thoughtful service tailored to your lifestyle.</p>
      <p class="section-copy">Our newly refreshed spaces blend luxury with local charm, making every visit unforgettable whether you are here for leisure, business, or a special celebration.</p>
    </div>
    <div class="about-visual">
      <img src="assets/1.png" alt="Diamond Hotel lobby" />
    </div>
  </div>
</section>

<section id="rooms" class="section rooms-section">
  <div class="container">
    <div class="section-header">
      <p>Rooms</p>
      <h2>Relax in stylish accommodations.</h2>
    </div>
    <div class="carousel-container">
      <button class="carousel-btn carousel-btn-prev" aria-label="Previous slide">
        <i class="fas fa-chevron-left"></i>
      </button>
      <div class="scroll-row room-scroll">
      <article class="media-card">
        <div class="card-image">
          <img class="base-img" src="assets/2.jpg" alt="Deluxe room exterior" />
          <img class="hover-img" src="image/k.JPG" alt="Deluxe room interior" />
          <div class="card-hover-text">
            <h3>Deluxe Room</h3>
            <p>Step inside a modern retreat with city views, plush bedding, and premium amenities.</p>
          </div>
        </div>
        <div class="card-copy">
          <h3>Deluxe Room</h3>
          <p>Modern luxury with premium comfort</p>
          <button class="card-btn">View Room</button>
        </div>
      </article>
      <article class="media-card">
        <div class="card-image">
          <img class="base-img" src="image/k.JPG" alt="Executive suite exterior" />
          <img class="hover-img" src="image/jr.JPG" alt="Executive suite interior" />
          <div class="card-hover-text">
            <h3>Executive Suite</h3>
            <p>Enjoy a separate living area, premium amenities, and elegant styling.</p>
          </div>
        </div>
        <div class="card-copy">
          <h3>Executive Suite</h3>
          <p>Spacious suite with living area</p>
          <button class="card-btn">View Suite</button>
        </div>
      </article>
      <article class="media-card">
        <div class="card-image">
          <img class="base-img" src="image/jr.JPG" alt="Premier room exterior" />
          <img class="hover-img" src="image/akin.jpg" alt="Premier room interior" />
          <div class="card-hover-text">
            <h3>Premier Room</h3>
            <p>Designed for business and leisure with extra space and upscale comforts.</p>
          </div>
        </div>
        <div class="card-copy">
          <h3>Premier Room</h3>
          <p>Executive comfort with extra space</p>
          <button class="card-btn">View Room</button>
        </div>
      </article>
      <article class="media-card">
        <div class="card-image">
          <img class="base-img" src="image/jrrr.webp" alt="Grand corner room exterior" />
          <img class="hover-img" src="image/ronron.JPG" alt="Grand corner room interior" />
          <div class="card-hover-text">
            <h3>Grand Corner Room</h3>
            <p>Experience panoramic city views from a spacious corner room with premium finishes.</p>
          </div>
        </div>
        <div class="card-copy">
          <h3>Grand Corner</h3>
          <p>Panoramic city views</p>
          <button class="card-btn">View Room</button>
        </div>
      </article>
      <article class="media-card">
        <div class="card-image">
          <img class="base-img" src="image/akin.jpg" alt="Presidential suite exterior" />
          <img class="hover-img" src="image/jrrr.webp" alt="Presidential suite interior" />
          <div class="card-hover-text">
            <h3>Presidential Suite</h3>
            <p>Unwind in luxurious style with a private living area, dining space, and top-tier amenities.</p>
          </div>
        </div>
        <div class="card-copy">
          <h3>Presidential Suite</h3>
          <p>Ultimate luxury experience</p>
          <button class="card-btn">View Suite</button>
        </div>
      </article>
      <article class="media-card">
        <div class="card-image">
          <img class="base-img" src="image/ronron.JPG" alt="Club access room exterior" />
          <img class="hover-img" src="image/k.JPG" alt="Club access room interior" />
          <div class="card-hover-text">
            <h3>Club Access Room</h3>
            <p>Enjoy exclusive lounge benefits and elevated comfort in a refined hospitality setting.</p>
          </div>
        </div>
        <div class="card-copy">
          <h3>Club Access Room</h3>
          <p>Exclusive lounge access</p>
          <button class="card-btn">View Room</button>
        </div>
      </article>
      </div>
      <button class="carousel-btn carousel-btn-next" aria-label="Next slide">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<section id="facilities" class="section facilities-section">
  <div class="container">
    <div class="section-header">
      <p>Hotel Facilities</p>
      <h2>Everything you need on site.</h2>
    </div>
    <div class="carousel-container">
      <button class="carousel-btn carousel-btn-prev" aria-label="Previous slide">
        <i class="fas fa-chevron-left"></i>
      </button>
      <div class="scroll-row facility-scroll">
      <article class="media-card">
        <div class="card-image">
          <img class="base-img" src="image/jrrr.webp" alt="Pool area" />
          <img class="hover-img" src="image/ronron.JPG" alt="Pool inside" />
          <div class="card-hover-text">
            <h3>Pool</h3>
            <p>Enjoy a serene pool deck with comfortable seating and refreshing views.</p>
          </div>
        </div>
      </article>
      <article class="media-card">
        <div class="card-image">
          <img class="base-img" src="image/akin.jpg" alt="Fitness center" />
          <img class="hover-img" src="image/k.JPG" alt="Fitness inside" />
          <div class="card-hover-text">
            <h3>Fitness Center</h3>
            <p>Stay active with modern equipment and dedicated workout spaces.</p>
          </div>
        </div>
      </article>
      <article class="media-card">
        <div class="card-image">
          <img class="base-img" src="image/jr.JPG" alt="Spa lobby" />
          <img class="hover-img" src="image/akin.jpg" alt="Spa treatment" />
          <div class="card-hover-text">
            <h3>Spa</h3>
            <p>Pamper yourself with relaxing treatments in a tranquil spa environment.</p>
          </div>
        </div>
      </article>
      <article class="media-card">
        <div class="card-image">
          <img class="base-img" src="image/k.JPG" alt="Meeting room" />
          <img class="hover-img" src="image/jrrr.webp" alt="Meeting room interior" />
          <div class="card-hover-text">
            <h3>Meeting Rooms</h3>
            <p>Host events in flexible meeting spaces equipped for business gatherings.</p>
          </div>
        </div>
      </article>
      <article class="media-card">
        <div class="card-image">
          <img class="base-img" src="image/ronron.JPG" alt="Business center" />
          <img class="hover-img" src="image/jr.JPG" alt="Business center interior" />
          <div class="card-hover-text">
            <h3>Business Center</h3>
            <p>Work comfortably with fully equipped business services and meeting support.</p>
          </div>
        </div>
      </article>
      <article class="media-card">
        <div class="card-image">
          <img class="base-img" src="image/akin.jpg" alt="Concierge lounge" />
          <img class="hover-img" src="image/k.JPG" alt="Concierge lounge interior" />
          <div class="card-hover-text">
            <h3>Concierge Lounge</h3>
            <p>Enjoy personalized attention and premium access to local experiences.</p>
          </div>
        </div>
      </article>
      </div>
      <button class="carousel-btn carousel-btn-next" aria-label="Next slide">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<section id="reviews" class="section reviews-section">
  <div class="container">
    <div class="section-header">
      <p>Guest Reviews</p>
      <h2>See what guests love.</h2>
    </div>
    <div class="carousel-container">
      <button class="carousel-btn carousel-btn-prev" aria-label="Previous slide">
        <i class="fas fa-chevron-left"></i>
      </button>
      <div class="scroll-row review-scroll">
      <article class="review-card">
        <p>"A memorable stay with excellent service. The rooms were beautiful and the staff took great care of us."</p>
        <span>— Maria C.</span>
      </article>
      <article class="review-card">
        <p>"Amazing dining and comfortable rooms. I loved the wellness facilities and central location."</p>
        <span>— John D.</span>
      </article>
      <article class="review-card">
        <p>"Perfect for business and leisure. The team made our visit easy, and the hotel felt warm and welcoming."</p>
        <span>— Anna R.</span>
      </article>
      <article class="review-card">
        <p>"The atmosphere was exceptional and the room was pristine. We will return for sure."</p>
        <span>— Peter L.</span>
      </article>
      <article class="review-card">
        <p>"Excellent food, thoughtful staff, and the perfect location near the city’s attractions."</p>
        <span>— Sophia M.</span>
      </article>
      <article class="review-card">
        <p>"A relaxing stay with impressive amenities and smooth check-in. Highly recommended."</p>
        <span>— Lucas G.</span>
      </article>
      </div>
      <button class="carousel-btn carousel-btn-next" aria-label="Next slide">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>


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