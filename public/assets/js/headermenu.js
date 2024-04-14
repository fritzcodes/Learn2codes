const header = document.querySelector("header");
const menu = document.querySelector('#menu-icon');
const navbar = document.querySelector('.navbar');
const section = document.querySelector('section');

// Adjust header class based on scroll position
window.addEventListener("scroll", function() {
	header.classList.toggle("sticky", window.scrollY > 0);
});

// Global variable to track the hover state
let isHoverEnabled = true;

// Function to toggle hoverability
function toggleHoverability() {
  section.classList.toggle('no-hover', !isHoverEnabled);
}

// Toggle menu, navbar, and menu icon on menu icon click
menu.onclick = (event) => {
  event.stopPropagation(); // Prevent the click event from bubbling up to the document
  menu.classList.toggle('bx-x'); // Toggle icon shape between burger and X
  navbar.classList.toggle('open'); // Toggle visibility of the navbar
  isHoverEnabled = !isHoverEnabled; // Toggle hover state
  toggleHoverability();
};

// Close navbar and reset icon when clicking outside the header or menu
document.addEventListener('click', function (event) {
  if (!header.contains(event.target) && event.target !== menu) {
    if (navbar.classList.contains('open')) {
      navbar.classList.remove('open'); // Close the navbar
      menu.classList.remove('bx-x'); // Ensure menu icon is back to burger
      isHoverEnabled = true; // Reset hover state
      toggleHoverability();
    }
  }
});
