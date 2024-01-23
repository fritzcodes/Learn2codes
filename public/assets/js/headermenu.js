const header = document.querySelector("header");
const menu = document.querySelector('#menu-icon');
const navbar = document.querySelector('.navbar');
const section = document.querySelector('section');

// Global variable to track the hover state
let isHoverEnabled = true;

// Function to toggle hoverability
function toggleHoverability() {
  section.classList.toggle('no-hover', !isHoverEnabled);
}

// Toggle menu and navbar on menu icon click
menu.onclick = (event) => {
  event.stopPropagation(); // Prevent the click event from reaching the document click event
  navbar.classList.toggle('open');;
  isHoverEnabled = !isHoverEnabled; // Toggle hover state
  toggleHoverability();
};

// Close header when clicking on free space
document.addEventListener('click', function (event) {
  // Check if the clicked element is not part of the header or menu
  if (!header.contains(event.target) && event.target !== menu) {
    // Check if the navbar is open
    if (navbar.classList.contains('open')) {
      // Close the header
      navbar.classList.remove('open');
      isHoverEnabled = true; // Enable hover when closing the menu
      toggleHoverability();
    }
  }
});