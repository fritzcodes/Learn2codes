//     SIDEBAR DROPDOWN
var dropdowns = document.querySelectorAll(".dropdown");

dropdowns.forEach(function (dropdown) {
  dropdown.addEventListener("click", function (event) {
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
document.addEventListener('DOMContentLoaded', function () {
  var modal = document.getElementById('notifModal');
  var toggleBtn = document.getElementById('notif');

  toggleBtn.addEventListener('click', function (e) {
    e.preventDefault(); // Prevent default anchor behavior
    // Toggle modal display
    if (modal.style.display === 'block') {
      modal.style.display = 'none';
    } else {
      modal.style.display = 'block';
    }
  });

  // Add this function to close the modal when clicking outside of it
  document.addEventListener('click', function (e) {
    // Check if the modal is open and if the clicked target is outside the modal
    if (modal.style.display === 'block' && !modal.contains(e.target) && !toggleBtn.contains(e.target)) {
      modal.style.display = 'none';
    }
  });
});


//     NOTIF ACTION MODAL
// document.addEventListener('DOMContentLoaded', function () {
//   // Function to hide all modals except for a specified modal ID (optional)
//   function hideAllModals(exceptId) {
//     var allModals = document.querySelectorAll('.notif-action-modal');
//     allModals.forEach(function (modal) {
//       if (modal.id !== exceptId) { // Check if the modal is not the one we want to exclude
//         modal.style.display = 'none';
//       }
//     });
//   }

//   // Function to toggle a specific settings panel
//   function toggleSettingsPanel(targetId) {
//     var settingsPanel = document.getElementById(targetId);
//     // If the targeted modal is already open, close it.
//     if (settingsPanel.style.display === 'block') {
//       settingsPanel.style.display = 'none';
//     } else {
//       // Hide all other modals first, except for the target one
//       hideAllModals(targetId);
//       // Then display the targeted modal
//       settingsPanel.style.display = 'block';
//     }
//   }

//   // Listen for clicks on settings buttons
//   var settingsButtons = document.querySelectorAll('.notif-action');
//   settingsButtons.forEach(function (btn) {
//     btn.addEventListener('click', function (e) {
//       e.preventDefault(); // Prevent default action
//       var targetId = this.getAttribute('data-target');
//       toggleSettingsPanel(targetId);
//       e.stopPropagation(); // Prevent event from bubbling up
//     });
//   });

//   // Close all modals when clicking anywhere in the document, except when clicking on a button
//   document.addEventListener('click', function () {
//     hideAllModals();
//   });

  // Prevent clicks within modals from closing them
//   var modals = document.querySelectorAll('.notif-action-modal');
//   modals.forEach(function (modal) {
//     modal.addEventListener('click', function (e) {
//       e.stopPropagation(); // Prevent event from bubbling up
//     });
//   });
// });


//     NOTIF SETTING MODAL
document.addEventListener('DOMContentLoaded', function () {
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
  toggleBtns.forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault(); // Prevent default anchor behavior
      toggleModalDisplay();
      e.stopPropagation(); // Stop the click from "bubbling" up to the document level
    });
  });

  // Close the modal if a click occurs outside of it
  document.addEventListener('click', function (e) {
    if (modal.style.display === 'block' && !modal.contains(e.target)) {
      modal.style.display = 'none';
    }
  });

  // Prevent clicks within the modal from closing it
  modal.addEventListener('click', function (e) {
    e.stopPropagation(); // Stop the click from "bubbling" up to the document level
  });

});


//     COMMENT-SECTION DISPLAY/HIDE
function showComment(post_id) {
  // Prevent the default anchor action

  $('#' + post_id).toggle();
  // if (commentSection.style.display === 'block') {
  //   // hide the comment section
  //   commentSection.style.display = 'none';

  //   /*
  //   // Update the anchor text
  //   this.textContent = 'Hide Comments';
  //   */

  // } else {
  //   // show the comment section
  //   commentSection.style.display = 'block';

  //   /*
  //   // Update the anchor text
  //   this.textContent = 'Show Comments';
  //   */
  // }
}


// CREATE POST MODAL
// Get the modal
var modal = document.getElementById('postModal');

// Get the button that opens the modal
var btn = document.getElementById('createbtn');

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function () {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


//      SHARE MODAL
document.addEventListener('DOMContentLoaded', function () {
  var modal = document.getElementById('shareModal');
  var toggleBtn = document.getElementById('share-btn');

  toggleBtn.addEventListener('click', function (e) {
    e.preventDefault(); // Prevent default anchor behavior
    // Toggle modal display
    if (modal.style.display === 'flex') {
      modal.style.display = 'none';
    } else {
      modal.style.display = 'flex';
    }
  });

  // Add this function to close the modal when clicking outside of it
  document.addEventListener('click', function (e) {
    // Check if the modal is open and if the clicked target is outside the modal
    if (modal.style.display === 'flex' && !modal.contains(e.target) && !toggleBtn.contains(e.target)) {
      modal.style.display = 'none';
    }
  });

});

//      POST-SETTING MODAL
function deletePost(post_id) {
  $('.' + post_id).toggle();
  // var modal = document.getElementById('postsetModal');
  // var toggleBtn = document.getElementById('post-setting');
  //   //e.preventDefault(); // Prevent default anchor behavior
  //   // Toggle modal display
  //   if (modal.style.display === 'block') {
  //     modal.style.display = 'none';
  //   } else {
  //     modal.style.display = 'block';
  //   }

  // // Add this function to close the modal when clicking outside of it
  // document.addEventListener('click', function (e) {
  //   // Check if the modal is open and if the clicked target is outside the modal
  //   if (modal.style.display === 'block' && !modal.contains(e.target) && !toggleBtn.contains(e.target)) {
  //     modal.style.display = 'none';
  //   }
  // });
}

//      POST-SETTING MODAL
document.addEventListener('DOMContentLoaded', function () {
  var modal = document.querySelector('#filter-comment-modal');
  var toggleBtn = document.querySelector('#filter-comment');


  toggleBtn.addEventListener('click', function (e) {
    e.preventDefault(); // Prevent default anchor behavior
    // Toggle modal display
    if (modal.style.display === 'block') {
      modal.style.display = 'none';
    } else {
      modal.style.display = 'block';
    }
  });

  // Add this function to close the modal when clicking outside of it
  document.addEventListener('click', function (e) {
    // Check if the modal is open and if the clicked target is outside the modal
    if (modal.style.display === 'block' && !modal.contains(e.target) && !toggleBtn.contains(e.target)) {
      modal.style.display = 'none';
    }
  });

});


//      ADD IMAGE SECTION
document.addEventListener('DOMContentLoaded', function () {
  var modal = document.querySelector('.photocontainer');
  var toggleBtn = document.querySelector('.photos');
  var span = document.querySelector(".photoclose")

  span.onclick = function () {
    modal.style.display = "none";
  }

  toggleBtn.addEventListener('click', function (e) {
    e.preventDefault(); // Prevent default anchor behavior
    // Toggle modal display
    if (modal.style.display === 'block') {
      modal.style.display = 'none';
    } else {
      modal.style.display = 'block';
    }
  });

});


document.getElementById('file-input').addEventListener('change', function (event) {
  var preview = document.getElementById('photos');
  preview.innerHTML = ''; // Clear the preview
  var files = event.target.files; // Get the selected files

  for (var i = 0; i < files.length; i++) {
    var file = files[i];

    if (file.type.startsWith('image/')) { // Ensure it's an image
      var reader = new FileReader();

      reader.onload = function (e) {
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
  $('#' + replyId).toggle();
}

function postReply(button, containerId, user_id, comment_id, reply_id) {
  console.log(reply_id);
  var replyInput = button.parentElement.querySelector('textarea');
console.log(containerId);
  var replyText = replyInput.value.trim();
  const request = {
    user_id: user_id,
    comment_id: comment_id,
    reply: replyText,
    reply_id_reply: reply_id || null
  }
  if (replyText !== '') {
    $.ajax({
      url: '/comment/storeReply',
      method: 'post',
      dataType: 'json',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: request,
      beforeSend: function () {
        $(`#replyBtn${comment_id}`).prop('disabled', true);
      },
      success: function (data) {
        console.log(data);
        var repliesContainer = document.getElementById(containerId);
        var newReply = document.createElement('div');
        newReply.classList.add('reply');
        newReply.classList.add('nested-reply'); // Add class for nested replies
        const addReply = data.reply_with_user != null ?
        `<p class="content" style="font-size: 12px; font-style:italic">${user_id == data.user.id ? 'You' : data.reply_with_user.user.fname } replied to ${ data.reply_with_user.user.fname + ' ' + data.reply_with_user.user.lname }</p> 
        <div style="background-color:rgba(255,255,255, .5)">
          <p class="content" style="font-size: 12px; color:gray; font-style:italic">${data.reply_with_user.reply}</p>
        </div>` : '';
        
        newReply.innerHTML = `<div class="reply-container">
              <div class="user-info">
                  <img src="${data.user.profile_photo ? '/images/' + data.user.profile_photo : '/assets/images/avatar.png'}" alt="User Avatar" style=" border-radius: 50%; margin-right: 10px; object-fit: cover;">
                  <div class="user">${data.user.fname + ' ' + data.user.lname}</div>
              </div>
              ` + addReply + `
              <div class="content">${data.reply}</div>
              <div class="actions">
                  <button onclick="toggleReply('replyInputNested-${data.id}')">Reply</button>
                  <button href="#">${moment(data.created_at).fromNow()}</button>
              </div>           
              <div class="reply-input" id="replyInputNested-${data.id}" style="display:none;">
                  <textarea placeholder="Write a reply..."></textarea>
                  <button onclick="postReply(this, 'repliesContainer${comment_id}', '${user_id}', '${comment_id}', '${data.id}')">Reply</button>
              </div>
              <div class="replies" id="nestedRepliesContainer-${containerId}"></div> <!-- Nested replies container -->
          </div>`;
        repliesContainer.appendChild(newReply);
        replyInput.value = '';
      }
    })

  } else {
    alert('Please enter a reply.');
  }
}

function postComment(comment, user_id, post_id) {
  const request = {
    comment: comment,
    user_id: user_id,
    post_id: post_id
  }
  if (comment == "") {
    alert("Comment must not be empty");
  } else {
    $.ajax({
      url: '/comment/store',
      method: 'post',
      dataType: 'json',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: request,
      beforeSend: function () {
        $(`#btn${post_id}`).prop('disabled', true);
      },
      success: function (data) {
        console.log(data);
        $(`#comment${data.post_id}`).val('');
        const newComment = `
        <div class="comment">
        <div class="user-info">
          <img src=" ${data.user.profile_photo ? '/images/' + data.user.profile_photo : '/assets/images/avatar.png'}" alt="Profile Picture">
          <div class="user">${data.user.fname + " " + data.user.lname}</div>
        </div>

        <div class="content">${data.comment}</div>

        <div class="actions">
          <button>Like</button>
          <button onclick="toggleReply('replyInput${data.id}')">Reply</button>
          <button href="#">${moment(data.created_at).fromNow()}</button>
        </div>


        <div class="replies" id="repliesContainer${data.id}"></div> <!-- Replies container for comment 1 -->

        <div class="reply-input" id="replyInput${data.id}">
          <textarea placeholder="Write a reply..."></textarea>
          <button onclick="postReply(this, 'repliesContainer${data.id}', '${data.user.id}', '${data.id}')">Reply</button>
        </div>
      </div>
        `;


        $(`#post${data.post_id}`).append(newComment);
        $(`#btn${post_id}`).prop('disabled', false);
      }
    })
  }

}

function likePost(id, user_id, post_id){
  const request = {
    user_id: user_id,
    post_id: post_id
  }
  $.ajax({
    url: '/like-post',
    method: 'post',
    dataType: 'json',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data: request,
    success: function(data){
      console.log(data);
      if(data == "add"){
       
        if($('#likesCount' + post_id).text() == ""){
          $('#likesCount' + post_id).text(parseInt(1));
        }else{
          $('#likesCount' + post_id).text(parseInt($('#likesCount' + post_id).text()) + 1);
        }
      }else{
        
        if($('#likesCount' + post_id).text() == 1){
          $('#likesCount' + post_id).text('')
        }else{
          $('#likesCount' + post_id).text(parseInt($('#likesCount' + post_id).text()) - 1);
        }
  
      }
      $('#' + id).toggleClass('outlined-heart');
    },
    error: function(xhr){
      alert(xhr.responseText);
    }
  })
  
}

function likeComment(id, user_id, comment_id){
  const request = {
    user_id: user_id,
    comment_id: comment_id
  }
  $.ajax({
    url: '/like-comment',
    method: 'post',
    dataType: 'json',
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data: request,
    success: function(data){
      
      console.log(data);
      if(data == "add"){
       
        if($('#likesCommentCount' + comment_id).text() == ""){
          $('#likesCommentCount' + comment_id).text("1");
          
        }else{
          $('#likesCommentCount' + comment_id).text(parseInt($('#likesCommentCount' + comment_id).text()) + 1);
        }
      }else{
        
        if($('#likesCommentCount' + comment_id).text() == 1){
          $('#likesCommentCount' + comment_id).text('')
        }else{
          $('#likesCommentCount' + comment_id).text(parseInt($('#likesCommentCount' + comment_id).text()) - 1);
        }
  
      }
      $('#' + id).toggleClass('tBold');
    },
    error: function(xhr){
      alert(xhr.responseText);
    }
  })
  
}

function report(post_id, user_id){
  if(confirm('Are you sure you want to report this?')){
    $.ajax({
      url: '/report',
      data: {
        post_id: post_id,
        user_id: user_id
      },
      method: 'post',
      dataType: 'json',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function (data){

      },
      error: function (xhr){
        alert(xhr.responseText);
      }
    })
  }
}


function deletePostId(post_id){
  if(confirm('Are you sure you want to delete this post?')){
    $.ajax({
      url: `/delete-post/${post_id}`,
      method: 'delete',
      dataType: 'json',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      success: function (data){
        if(data == "success"){
          alert("deleted successfully");
          location.reload();
        }
      },
      error: function (xhr){
        alert(xhr.responseText);
      }
    })
  }
}
/* Notif-Section */
function showModal(id){
  document.getElementById(id).style.display = 'block';

  console.log("success");
}
$(document).ready(function() {
  function fetchNotifications() {
      
        $.ajax({
            url: '/notifications', 
            method: 'GET',
            dataType: 'json',
            success: function(data) {
              let notif = "";

              data.forEach((notifs, i) => {
                notif += `
                <div class="notif-container">
                    <a href="#" class="notification-item ${notifs.is_read == 0 ?  'unread-notif' : ''}">
                        <span class="unread"></span>
                        <i class="icon bx bx-post"></i>
                        <div class="content">
                            <h2 class="notification-item-user-block">
                              ${notifs.content}
                            </h2>
                            <span class="timestamp">${moment(notifs.created_at).fromNow()}</span>
                        </div>
                        <button onclick="showModal('settings${notifs.id}')" type="button" class="notif-action">
                            <i class="bx bx-dots-horizontal-rounded"></i>
                        </button>
                    </a>
                  
                    <div class="notif-action-modal" id="settings${notifs.id}">
                        <!-- Your action buttons here -->
                        <a href="#"><i class='bx bx-check'>
                                <p>Mark as read</p>
                            </i></a>
                        <a href="#"><i class='bx bxs-bell'>
                                <p>Remove</p>
                            </i></a>
                    </div>
                </div>
                `;
              });

                $('#notifContainer').html(notif);
            }
        });
    }

    function markNotificationAsRead() {
        console.log('Marking notification as read...');
        $.ajax({
            url: '/ForumController/NotificationUpdate',
            type: 'POST',
            success: function(data) {
                
            }
        });
    }

    // fetch new notifications every 5 seconds
    setInterval(fetchNotifications, 3000);

    // mark notification as read when a user clicks on it
    $(document).on('click', '.notification', function() {
        markNotificationAsRead();
    });
});