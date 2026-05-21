const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", () => {
  navLinks.classList.toggle("open");

  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

navLinks.addEventListener("click", () => {
  navLinks.classList.remove("open");
  menuBtnIcon.setAttribute("class", "ri-menu-line");
});

const scrollRevealOption = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

// header container
ScrollReveal().reveal(".header__container p", {
  ...scrollRevealOption,
});

ScrollReveal().reveal(".header__container h1", {
  ...scrollRevealOption,
  delay: 500,
});

// about container
ScrollReveal().reveal(".about__image img", {
  ...scrollRevealOption,
  origin: "left",
});

ScrollReveal().reveal(".about__content .section__subheader", {
  ...scrollRevealOption,
  delay: 500,
});

ScrollReveal().reveal(".about__content .section__header", {
  ...scrollRevealOption,
  delay: 1000,
});

ScrollReveal().reveal(".about__content .section__description", {
  ...scrollRevealOption,
  delay: 1500,
});

ScrollReveal().reveal(".about__btn", {
  ...scrollRevealOption,
  delay: 2000,
});

// room container
ScrollReveal().reveal(".room__card", {
  ...scrollRevealOption,
  interval: 500,
});

// service container
ScrollReveal().reveal(".service__list li", {
  ...scrollRevealOption,
  interval: 500,
  origin: "right",
});

// Thumbnail hover toggle functionality
document.addEventListener("DOMContentLoaded", function() {
  const thumbnails = document.querySelectorAll(".room__thumb");
  
  thumbnails.forEach(thumb => {
    thumb.addEventListener("mouseenter", function() {
      const card = this.closest(".room__card");
      if (!card) return;
      
      const primaryImg = card.querySelector(".room__img.primary");
      const thumbImg = this.querySelector("img");
      
      if (primaryImg && thumbImg) {
        // Swap the images
        const tempSrc = primaryImg.src;
        primaryImg.src = thumbImg.src;
        thumbImg.src = tempSrc;
      }
    });
  });
});

// Slideshow manual control
let currentSlide = 0;
const slideItems = document.querySelectorAll(".slideshow-item");
const totalSlides = slideItems.length;

function showSlide(n) {
  if (totalSlides === 0) return;
  
  currentSlide = (n + totalSlides) % totalSlides;
  
  // Remove animation temporarily
  slideItems.forEach(item => {
    item.style.animation = "none";
    item.style.opacity = "0";
  });
  
  // Force reflow to restart animation
  void slideItems[0].offsetWidth;
  
  // Show the current slide and update animation delays
  slideItems.forEach((item, index) => {
    const delayOffset = (index - currentSlide + totalSlides) % totalSlides;
    item.style.animation = `slideshow 12s infinite`;
    item.style.animationDelay = (delayOffset * 4) + "s";
  });
}

function slideshowNext() {
  showSlide(currentSlide + 1);
}

function slideshowPrev() {
  showSlide(currentSlide - 1);
}
