


//     SIDEBAR DROPDOWN
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

        //    TOGGLE CONTENT2
    let btn = document.querySelector('#menu-icon');
    let navbar = document.querySelector('.content2');

    btn.onclick = function () {
        navbar.classList.toggle('active');
    }

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


//      NOTIF MODAL
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

  // Add this function to close the modal when clicking outside of it
  document.addEventListener('click', function(e) {
    // Check if the modal is open and if the clicked target is outside the modal
    if (modal.style.display === 'block' && !modal.contains(e.target) && !toggleBtn.contains(e.target)) {
      modal.style.display = 'none';
    }
  });
});


  //     NOTIF ACTION MODAL
  document.addEventListener('DOMContentLoaded', function() {
    // Function to hide all modals except for a specified modal ID (optional)
    function hideAllModals(exceptId) {
      var allModals = document.querySelectorAll('.notif-action-modal');
      allModals.forEach(function(modal) {
        if (modal.id !== exceptId) { // Check if the modal is not the one we want to exclude
          modal.style.display = 'none';
        }
      });
    }
    
    // Function to toggle a specific settings panel
    function toggleSettingsPanel(targetId) {
      var settingsPanel = document.getElementById(targetId);
      // If the targeted modal is already open, close it.
      if (settingsPanel.style.display === 'block') {
        settingsPanel.style.display = 'none';
      } else {
        // Hide all other modals first, except for the target one
        hideAllModals(targetId);
        // Then display the targeted modal
        settingsPanel.style.display = 'block';
      }
    }
  
    // Listen for clicks on settings buttons
    var settingsButtons = document.querySelectorAll('.notif-action');
    settingsButtons.forEach(function(btn) {
      btn.addEventListener('click', function(e) {
        e.preventDefault(); // Prevent default action
        var targetId = this.getAttribute('data-target');
        toggleSettingsPanel(targetId);
        e.stopPropagation(); // Prevent event from bubbling up
      });
    });
  
    // Close all modals when clicking anywhere in the document, except when clicking on a button
    document.addEventListener('click', function() {
      hideAllModals();
    });
  
    // Prevent clicks within modals from closing them
    var modals = document.querySelectorAll('.notif-action-modal');
    modals.forEach(function(modal) {
      modal.addEventListener('click', function(e) {
        e.stopPropagation(); // Prevent event from bubbling up
      });
    });
  });
  

    //     NOTIF SETTING MODAL
    document.addEventListener('DOMContentLoaded', function() {
      var modal = document.querySelector('#notifsetModal');
      var toggleBtns = document.querySelectorAll('.notif-setting'); // Use querySelectorAll
    
      // Function to toggle modal display
      function toggleModalDisplay() {
        if (modal.style.display === 'block') {
            modal.style.display = 'none';
        } else {
            modal.style.display = 'block';
        }
      }
    
      // Loop through all buttons and add the click event listener
      toggleBtns.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default anchor behavior
            toggleModalDisplay();
            e.stopPropagation(); // Stop the click from "bubbling" up to the document level
        });
      });
    
      // Close the modal if a click occurs outside of it
      document.addEventListener('click', function(e) {
        if (modal.style.display === 'block' && !modal.contains(e.target)) {
          modal.style.display = 'none';
        }
      });
    
      // Prevent clicks within the modal from closing it
      modal.addEventListener('click', function(e) {
        e.stopPropagation(); // Stop the click from "bubbling" up to the document level
      });
    
    });


  //     COMMENT-SECTION DISPLAY/HIDE
  document.getElementById('comment-btn').addEventListener('click', function(e) {
    // Prevent the default anchor action
    e.preventDefault();
    
    var commentSection = document.getElementById('main-comment-sec');
    if (commentSection.style.display === 'block') {
        // hide the comment section
        commentSection.style.display = 'none';

        /*
        // Update the anchor text
        this.textContent = 'Hide Comments';
        */

    } else {
        // show the comment section
        commentSection.style.display = 'block';

        /*
        // Update the anchor text
        this.textContent = 'Show Comments';
        */
    }
});


// CREATE POST MODAL
// Get the modal
var modal = document.getElementById('postModal');

// Get the button that opens the modal
var btn = document.getElementById('createbtn');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


//      SHARE MODAL
document.addEventListener('DOMContentLoaded', function() {
  var modal = document.getElementById('shareModal');
  var toggleBtn = document.getElementById('share-btn');

  toggleBtn.addEventListener('click', function(e) {
    e.preventDefault(); // Prevent default anchor behavior
    // Toggle modal display
    if (modal.style.display === 'flex') {
      modal.style.display = 'none';
    } else {
      modal.style.display = 'flex';
    }
  });

    // Add this function to close the modal when clicking outside of it
    document.addEventListener('click', function(e) {
      // Check if the modal is open and if the clicked target is outside the modal
      if (modal.style.display === 'flex' && !modal.contains(e.target) && !toggleBtn.contains(e.target)) {
        modal.style.display = 'none';
      }
    });

});

//      POST-SETTING MODAL
document.addEventListener('DOMContentLoaded', function() {
  var modal = document.getElementById('postsetModal');
  var toggleBtn = document.getElementById('post-setting');

  toggleBtn.addEventListener('click', function(e) {
    e.preventDefault(); // Prevent default anchor behavior
    // Toggle modal display
    if (modal.style.display === 'block') {
      modal.style.display = 'none';
    } else {
      modal.style.display = 'block';
    }
  });

  // Add this function to close the modal when clicking outside of it
  document.addEventListener('click', function(e) {
    // Check if the modal is open and if the clicked target is outside the modal
    if (modal.style.display === 'block' && !modal.contains(e.target) && !toggleBtn.contains(e.target)) {
      modal.style.display = 'none';
    }
  });

});  

//      POST-SETTING MODAL
document.addEventListener('DOMContentLoaded', function() {
  var modal = document.querySelector('#filter-comment-modal');
  var toggleBtn = document.querySelector('#filter-comment');

 
  toggleBtn.addEventListener('click', function(e) {
    e.preventDefault(); // Prevent default anchor behavior
    // Toggle modal display
    if (modal.style.display === 'block') {
      modal.style.display = 'none';
    } else {
      modal.style.display = 'block';
    }
  });

  // Add this function to close the modal when clicking outside of it
  document.addEventListener('click', function(e) {
    // Check if the modal is open and if the clicked target is outside the modal
    if (modal.style.display === 'block' && !modal.contains(e.target) && !toggleBtn.contains(e.target)) {
      modal.style.display = 'none';
    }
  });

}); 


//      ADD IMAGE SECTION
document.addEventListener('DOMContentLoaded', function() {
  var modal = document.querySelector('.photocontainer');
  var toggleBtn = document.querySelector('.photos');
  var span = document.querySelector(".photoclose")
 
  span.onclick = function() {
    modal.style.display = "none";
  }

  toggleBtn.addEventListener('click', function(e) {
    e.preventDefault(); // Prevent default anchor behavior
    // Toggle modal display
    if (modal.style.display === 'block') {
      modal.style.display = 'none';
    } else {
      modal.style.display = 'block';
    }
  });

}); 


document.getElementById('file-input').addEventListener('change', function(event) {
  var preview = document.getElementById('photos');
  preview.innerHTML = ''; // Clear the preview
  var files = event.target.files; // Get the selected files

  for (var i = 0; i < files.length; i++) {
    var file = files[i];
    
    if (file.type.startsWith('image/')) { // Ensure it's an image
      var reader = new FileReader();
      
      reader.onload = function(e) {
        var img = document.createElement('img');
        img.src = e.target.result;
        img.style.maxWidth = '200px'; // Set the maximum width of the preview image
        img.style.maxHeight = '200px'; // Set the maximum height of the preview image
        preview.appendChild(img);
      };
      
      reader.readAsDataURL(file); // Read the image file as a data URL
    }
  }
});



// comment reply
function toggleReply(replyId) {
  var replyInput = document.getElementById(replyId);
  replyInput.style.display = (replyInput.style.display === 'block') ? 'none' : 'block';
}

function postReply(button, containerId) {
  var replyInput = button.parentElement.querySelector('textarea');
  var replyText = replyInput.value.trim();
  if (replyText !== '') {
      var repliesContainer = document.getElementById(containerId);
      var newReply = document.createElement('div');
      newReply.classList.add('reply');
      newReply.classList.add('nested-reply'); // Add class for nested replies
      newReply.innerHTML = `<div class="reply-container">
          <div class="user-info">
              <img src="images/avatar.jpg" alt="User Avatar" style=" border-radius: 50%; margin-right: 10px; object-fit: cover;">
              <div class="user">User</div>
          </div>
          <div class="content">${replyText}</div>
          <div class="actions">
              <button onclick="toggleReply('replyInputNested-${containerId}')">Reply</button>
              <button href="#">1h</button>
          </div>           
          <div class="reply-input" id="replyInputNested-${containerId}" style="display:none;">
              <textarea placeholder="Write a reply..."></textarea>
              <button onclick="postReply(this, 'nestedRepliesContainer-${containerId}')">Reply</button>
          </div>
          <div class="replies" id="nestedRepliesContainer-${containerId}"></div> <!-- Nested replies container -->
      </div>`;
      repliesContainer.appendChild(newReply);
      replyInput.value = '';
  } else {
      alert('Please enter a reply.');
  }
}

  