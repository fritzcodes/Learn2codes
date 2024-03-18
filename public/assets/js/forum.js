var dropdowns = document.querySelectorAll(".dropdown");

dropdowns.forEach(function(dropdown) {
    dropdown.addEventListener("click", function(event) {
        // Prevent the event from propagating to the document
        event.stopPropagation();

        var content = this.querySelector(".dropdown-content");
        content.classList.toggle("show");

        var icon = this.querySelector(".icon");
        if (content.classList.contains("show")) {
            icon.textContent = "▲"; // Change icon to 'up' when shown
        } else {
            icon.textContent = "▼"; // Change icon to 'down' when hidden
        }
    });
});

/*
// Close dropdowns when clicking outside
window.addEventListener("click", function() {
    dropdowns.forEach(function(dropdown) {
        var content = dropdown.querySelector(".dropdown-content");
        if (content.classList.contains("show")) {
            content.classList.remove("show");
            dropdown.querySelector(".icon").textContent = "▼";
        }
    });
});

*/

document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('filterModal', 'notifModal');
    var toggleBtn = document.getElementById('filter', 'notif');
  
    toggleBtn.addEventListener('click', function(e) {
      e.preventDefault(); // Prevent default anchor behavior
      // Toggle modal display
      if (modal.style.display === 'block') {
        modal.style.display = 'none';
      } else {
        modal.style.display = 'block';
      }
    });
  
    // Optionally, close modal when clicking outside of it
    window.addEventListener('click', function(e) {
      if (e.target === modal) {
        modal.style.display = 'none';
      }
    });
  });


  document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('notifModal');
    var toggleBtn = document.getElementById('notif');
  
    toggleBtn.addEventListener('click', function(e) {
      e.preventDefault(); // Prevent default anchor behavior
      // Toggle modal display
      if (modal.style.display === 'block') {
        modal.style.display = 'none';
      } else {
        modal.style.display = 'block';
      }
    });
  
    // Optionally, close modal when clicking outside of it
    window.addEventListener('click', function(e) {
      if (e.target === modal) {
        modal.style.display = 'none';
      }
    });
  });

  
