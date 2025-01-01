// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Placeholder image loading
// document.addEventListener("DOMContentLoaded", function() {
//     document.querySelectorAll("img").forEach(img => {
//         img.src = "assets/images/placeholder.png"; // Replace with your image path when ready
//     });
// });


// start statistics-section code js***************

let valueDisplays = document.querySelectorAll(".num");
let interval = 4000;

valueDisplays.forEach((valueDisplay) => {
  let startValue = 0;
  let endValue = parseInt(valueDisplay.getAttribute("data-val"));
  let duration = Math.floor(interval / endValue);
  let counter = setInterval(function () {
    startValue += 1;
    valueDisplay.textContent = startValue;
    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, duration);
});


// end statistics-section code js ***************



// JavaScript for Hamburger Menu
function toggleMenu() {
    const menu = document.querySelector("nav ul"); // Select the menu
    const hamburger = document.querySelector(".hamburger"); // Select hamburger icon

    // Toggle active class on the menu
    menu.classList.toggle("active");

    // Adjust visibility of hamburger and X icon
    if (menu.classList.contains("active")) {
        hamburger.style.display = "none"; // Hide hamburger when menu is open
    } else {
        hamburger.style.display = "block"; // Show hamburger when menu is closed
    }
}

// Event listener for the X icon (inside the menu)
document.querySelector(".close-menu").addEventListener("click", toggleMenu);
















let slideIndex = 1;
showSlides(slideIndex);

// Function to show the slides based on index
function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");

    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  // Hide all slides
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", ""); // Remove active class from dots
    }

    slides[slideIndex - 1].style.display = "block"; // Show the current slide
    dots[slideIndex - 1].className += " active"; // Highlight the current dot
}

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}







// Function to open the full-screen image
function openImage(element) {
    const fullscreenOverlay = document.getElementById('fullscreen-overlay');
    const fullscreenImage = document.getElementById('fullscreen-image');
    fullscreenImage.src = element.src; // Set the clicked image as the full-screen image
    fullscreenOverlay.style.display = 'flex'; // Show the overlay
  }
  
  // Function to close the full-screen image
  function closeImage() {
    const fullscreenOverlay = document.getElementById('fullscreen-overlay');
    fullscreenOverlay.style.display = 'none'; // Hide the overlay
  }
  


  // Open Modal
function openModal(element) {
  const modal = document.querySelector('.modal');
  const modalImg = document.getElementById('modalImg');
  
  modal.style.display = 'flex';
  modalImg.src = element.querySelector('img').src;
}

// Close Modal
function closeModal(event) {
  const modal = document.querySelector('.modal');
  if (event.target === modal || event.target === document.querySelector('.close-btn')) {
    modal.style.display = 'none';
  }
}







  document.addEventListener("DOMContentLoaded", function () {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("animate"); // Add the 'animate' class
          }
        });
      },
      { threshold: 0.5 } // Trigger when 50% of the element is visible
    );

    // Target the titles to animate
    const titles = document.querySelectorAll(".massege-title");
    titles.forEach((title) => observer.observe(title));
  });






