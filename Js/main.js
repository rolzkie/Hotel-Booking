const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

// Create overlay element
const overlay = document.createElement("div");
overlay.id = "menu-overlay";
overlay.style.cssText = `
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.4);
  z-index: 200;
  display: none;
  animation: fadeIn 0.3s ease;
  pointer-events: none;
`;
document.body.appendChild(overlay);

window.addEventListener("load", function() {
  const loaderWrapper = document.getElementById("loader-wrapper");
  
  // Fade out
  loaderWrapper.style.opacity = "0";
  
  // Remove from DOM after fading
  setTimeout(function() {
    loaderWrapper.style.display = "none";
  }, 500);
});

function closeMenu() {
  navLinks.classList.remove("open");
  overlay.style.display = "none";
  overlay.style.pointerEvents = "none";
  menuBtnIcon.setAttribute("class", "ri-menu-line");
}

function openMenu() {
  navLinks.classList.add("open");
  overlay.style.display = "block";
  overlay.style.pointerEvents = "auto";
  menuBtnIcon.setAttribute("class", "ri-close-line");
}

menuBtn.addEventListener("click", (e) => {
  e.stopPropagation();
  if (navLinks.classList.contains("open")) {
    closeMenu();
  } else {
    openMenu();
  }
});

// Close menu when clicking on a navigation link
navLinks.querySelectorAll("a").forEach(link => {
  link.addEventListener("click", (e) => {
    e.stopPropagation();
    closeMenu();
  });
});

// Close menu when clicking on overlay
overlay.addEventListener("click", (e) => {
  e.stopPropagation();
  closeMenu();
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
