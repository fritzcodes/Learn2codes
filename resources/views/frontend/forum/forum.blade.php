<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn2Code</title>
    <link rel="stylesheet" href="assets/css/forum.css">
    <link rel="stylesheet" href="upload.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500&display=swap" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.25.0/themes/prism.min.css" rel="stylesheet" />

    <script src="assets/js/forum.js" defer></script>
    <script src="assets/js/insertimg.js" defer></script>
    

    

</head>
<body>
    <!-- -----------SIDEBAR------------ -->
<header>
  <div class="user">
    <ul>
      <li>
        <a href="#" class="bx bx-menu" id="menu-icon"></a>            
      </li>
      <li>
        <div class="logo">
          <img src="images/2 (1).jpg" alt="logo">
        </div>
      </li>
      <li>
        <input type="search" id="search" placeholder="Search">  
        <div>
          <!--
        <a href="" id="filter" class="notif-setting">
            <i class="bx bx-dots-horizontal-rounded"></i>
          </a>            
          -->
  
                 
          </div>            
      </li >
      <!--
      <li class="filter">
        <a class="bx bxs-filter-alt" id="filter">    
        </a>
   

        
      </li>
         -->     
    </ul>
          
  </div>
    <div class="right-btn">
      <a href="#" class="bx bxs-bell" id="notif"><span class="indicator"></span></a>
      <a href="#"><img src="/newForum/images/avatar.jpg" alt="user" class="avatar"></a>  

      
    </div>

    <div id="notifModal" class="modal">
      <!-- Modal content -->
      <div id="notif-content" class="notif-content">
        <!--<span class="close">&times;</span>-->

        <div class="notif-header">
          <h2>Notifications</h2> 
            <a href="#" id="notif-setting" class="notif-setting">
              <i class="bx bx-dots-horizontal-rounded"></i>
            </a>

              <div id="notifsetModal">
                <a href="#"><i class='bx bx-check'></i><p>Mark all as read</p></a>                
                <a href="#"><i class='bx bxs-bell'></i><p>Open notifications</p></a> 
                <a href="#"><i class='bx bxs-trash'></i><p>Clear all notifications</p></a> 
              </div>

        </div>




            
            <div class="notif-container" >
            <a href="#" class="notification-item unread-notif">
              <span class="unread"></span>
                <img src="images/avatar.jpg" alt="Notification Icon" class="icon">
                <div class="content">
                  <h2 class="notification-item-user-block">
                    <span class="notification-item-user-name">Kioh Samson</span> is watching your repository
                  </h2>
                    <span class="timestamp">3hrs ago</span>
                </div>

                <button data-target="settings1" type="button" class="notif-action">
                    <i class="bx bx-dots-horizontal-rounded"></i>
                </button>


            </a>

            <div class="notif-action-modal" id="settings1">
              <a href="#"><i class='bx bx-check'><p>Mark as read</p></i></a>                
              <a href="#"><i class='bx bxs-bell'><p>Remove</p></i></a> 
            </div>
          </div>

          <div class="notif-container">
            <a href="#" class="notification-item">
                <img src="images/avatar.jpg" alt="Notification Icon" class="icon">
                <div class="content">
                  <h2 class="notification-item-user-block">
                    <span class="notification-item-user-name">David Matthew Arsenal</span> is watching your repository
                  </h2>
                    <span class="timestamp">1 day ago</span>
                </div>

                <button data-target="settings2" type="button" class="notif-action">
                    <i class="bx bx-dots-horizontal-rounded"></i>
                </button>
            </a>

            <div class="notif-action-modal" id="settings2">
              <a href="#"><i class='bx bx-check'><p>Mark as unread</p></i></a>                
              <a href=""><i class='bx bxs-bell'><p>Remove</p></i></a> 
            </div>
          </div>
          

            <!--
            <a href="#" class="notif-container">
              <span class="unread"></span>

                  <button data-target="settings1" type="button" class="notif-action">
                      <i class="bx bx-dots-horizontal-rounded"></i>
                  </button>

                  <div class="notif-action-modal" id="settings1">
                      <a href=""><i class='bx bx-check'><p>Mark as read</p></i></a>                
                      <a href=""><i class='bx bxs-bell'><p>Remove</p></i></a> 
                  </div>

                   <img src="images/avatar.jpg" alt="">
                    <div class="notification-list-user-block"><span class="notification-list-user-name">Kioh Samson</span> is watching your main repository
                        <div class="notification-date">2 min ago</div> 
                    </div> 

            </a>
            -->

            <!-- WHEN NO NOTIF DISPLAYED THIS WILL SHOW UP-->
            <div class="empty-state">
              <i class='bx bx-wink-smile'></i>
              <p>You're all caught up!</p>
          </div>
          
          <div>
            <a href="#" class="list-footer">
                See previous notifications
            </a>
          </div>

  </div>
</div>

  </header>



<!-- -----------MAIN CONTENT------------ -->
<div class="main-content">   

  <div class="contents">
    <div class="feed">
      <div class="writeout">
        <div class="writein">
          <a href="#" id="createbtn"><h2>Write your thoughts...</h2></a>
        </div>
      </div>

      <div id="postModal" class="modal">
        <div class="modal-content">
          <div class="createheader">
          <h2>Create Post<span class="close">&times;</span></h2>
          </div>

            <hr>

        <form id="postForm" action="/upload" method="post" enctype="multipart/form-data">
            <div class="info-header">
              <div>
                <a href="#"class="profile-pic"><img src="/newForum/images/avatar.jpg" alt="Profile Picture" id="profile-pic"></a>
              </div>
    
              <div class="post-info">
                    <div class="first-name">
                        <p><a href="#">David Matthew</a><span class="feelings" style="display: none;">is <img src="images/smiley.PNG" alt=""> feeling happy</span></p>
                    </div>
    
                    <!--
                   <div class="date">
                      March 4, 2024
                    </div>                      
                    -->
              </div>
            </div>

              <div class="postContent">

                <div class="createcaption">
                  <textarea id="textContent" name="textContent" placeholder="Type a caption here..."></textarea>
                </div>
              
                <div class="photocontainer">
                  <span class="photoclose">&times;</span>
                    <input type="file" id="file-input" name="image" accept="image/png, image/jpeg" onchange="preview()" multiple>
                  <label for="file-input">
                    <i class='bx bx-upload'></i> &nbsp; Choose A Photo
                  </label>
                  <p id="num-of-files">
                    No Files Chosen
                  </p>  
                <div id="photos">
                    
                </div>             
                </div>
              </div>

              
              
              <div class="create-footer">
                <div id="add-content" class="add-content">
                  <a href="" class="photos" data-tooltip="Add Photos"><i class='bx bx-image-add'></i></a>
                  <a href="" class="emotions" data-tooltip="Add Feelings"><i class='bx bxs-heart-circle'></i></a> 
                  <a href="" class="snippet" data-tooltip="Insert Code"><i class='bx bx-code'></i></a>                
                  <a href="" class="hashtag" data-tooltip="Add Hashtag"><i class='bx bx-link-alt'></i></a>                   
                </div>

                <button type="submit" id="postbtn">Post</button>                 
              </div>
  

          </form>
        </div>
      </div>



      <div class="post">
        <div class="post-header">
          <div>
            <a href="#"class="profile-pic"><img src="/newForum/images/avatar.jpg" alt="Profile Picture" id="profile-pic"></a>
          </div>

          <div class="post-info">
                <div class="first-name">
                    <p><a href="#">David Matthew</a><span class="feelings">is <img src="images/smiley.PNG" alt=""> feeling happy</span></p>
                </div>

                <div class="date">
                  March 4, 2024
                </div>
            </div>
      
          <div class="post-setting">
              <a href="#" id="post-setting"><i class="bx bx-dots-horizontal-rounded"></i>
              </a>

            <div id="postsetModal" class="modal">    
                <a href=""><i class='bx bxs-trash' ></i><p>Delete</p></a>                
                <a href=""><i class='bx bxl-instagram-alt'></i><p>Report</p></a>                           
                  
            </div>

          </div> 


        </div>

        <div class="post-content">
          <div class="caption">
              <p>
                This is an example post. Here you can add your text, images, or any other content you wish to share.
              </p>

              <div class="tags">
                <a href="#"><p>#Forums</p></a>
                <a href="#"><p>#HTML</p></a>
                <a href="#"><p>#Coding</p></a>
                <a href="#"><p>#Forums</p></a>
            </div>
          </div>

          <div class="code-snippet"> <!--where code will display-->     
            <div class="code-name">
              <p>hello.java</p>
            </div>
                    <pre>
        <code>
          public class Main {
            public static void main(String[] args) {
              System.out.println("Hello World");
            }
          }
        </code> 
                  </pre>
          </div>

          <div class="image-gallery"> <!--where picture/s will displayed-->
            <img class="post-pic" src="assets/images/animals.png" alt="Image 1">
            <img class="post-pic" src="assets/images/feeling.PNG" alt="Image 2">
            <img class="post-pic" src="assets/images/feel.png" alt="Image 3">
          </div>

        </div>

          <div class="line">
            <hr>
          </div>

        <div class="post-footer"> <!--add buttons example: react, reply if necessary
          <div class="footer-btn" id="comment-btn">
            <a href="#"><i class=""></i></a>
            <p></p>
          </div>
          <div class="footer-btn" id="comment-btn">
            <a href="#"><i class=""></i></a>
            <p></p>
          </div>  -->
            <a href="#" class="footer-btn" id="comment-btn"><i class="bx bxs-message-rounded"></i>
            <p>Comment</p>            
            </a>
            <a href="#" class="footer-btn" id="share-btn"><i class='bx bxs-share'></i>
            <p>Share</p>            
            </a>

            <div id="shareModal" class="modal">
              <div id="share-content" class="share-content">
                <a href=""><i class='bx bxl-facebook'></i></a>
                <a href=""><i class='bx bxl-instagram-alt'></i></a> 
                <a href=""><i class='bx bxl-twitter'></i></a>                
                <a href=""><i class='bx bx-link-alt'></i></a>                   

              </div>
            </div>

            
        </div>

        <div class="main-comment-sec" id="main-comment-sec">  <!--comment section / hidden in default-->
            <div class="line">
              <hr>
            </div>          

            <div id="filter-comment">
              <a href="#" >All comments <i class="bx bx-chevron-down"></i></a>
            </div> 

            <div id="filter-comment-modal">
              <a href=""><i class='bx bx-check'></i><p>Newest</p></a>                
            <a href=""><i class='bx bxs-bell'></i><p>All comments</p></a> 
          </div>

          <div class="comment-sec"> 


            <!-------------------------------------COMMENT BODY-->
            <div class="comments">
              
              <div class="comment">
                  <div class="user-info">
                      <img src="images/avatar.jpg" alt="Profile Picture">
                      <div class="user">Shenrick Remandaban</div> 
                  </div>
          
                  <div class="content">I am good how are you.</div>
          
                  <div class="actions">
                      <button>Like</button>
                      <button onclick="toggleReply('replyInput1')">Reply</button>
                      <button href="#">1h</button>
                  </div>
                  
                  
                  <div class="replies" id="repliesContainer1"></div> <!-- Replies container for comment 1 -->
             
                  <div class="reply-input" id="replyInput1">
                    <textarea placeholder="Write a reply..."></textarea>
                    <button onclick="postReply(this, 'repliesContainer1')">Reply</button>
                  </div>
                </div>
          
          
              <div class="comment">
                  <div class="user-info">
                      <img src="images/avatar.jpg" alt="Profile Picture">
                      <div class="user">Gian Isangga</div>
                  </div>
                  <div class="content">Thank you kid</div>
                  <div class="actions">
                      <button>Like</button>
                      <button onclick="toggleReply('replyInput2')">Reply</button>
                      <button href="#">2h</button>
                    </div>
                  <div class="reply-input" id="replyInput2">
                      <textarea placeholder="Write a reply..."></textarea>
                      <button onclick="postReply(this, 'repliesContainer2')">Reply</button>
                  </div>
                  <div class="replies" id="repliesContainer2"></div> <!-- Replies container for comment 2 -->
              </div>
          </div>



            <!--
            <div class="comment-body">
              
                <div class="user-comment">  
                  <div>
                    <a href="#" class="profile-pic"><img src="/admin/avatar.jpg" alt="Profile Picture"></a>            
                  </div>
                  <div class="comment-container">
                      <div class="fullname">
                        <h2><a href="#">David Matthew Borromeo</a><span id="author">Author</span></h2>
                      </div>
                        
                        <div class="comment">
                          <p >
                                                      So, there I was, deep into the night, staring at my screen with bloodshot eyes.
                          I had this piece of code in front of me that, by all accounts, should've been working flawlessly. 
                          But, as luck would have it, the universe seemed to have other plans. The bug was as elusive as a shadow in the dark.
                          You see, everything was peachy until you tried to upload an image alongside some text through our fancy new form. The text?
                          It went through just fine. But the image? It vanished into thin air, like it was being swallowed by some digital black hole.
                          </p>
                          <div class="comment-pic"> 
                            <img src="/newForum/images/Technology.png" alt="Image 1">
                          </div>
                        </div>
                  </div>
                    
                  <div class="comment-setting">
                        <a href="#" ><i class="bx bx-dots-horizontal-rounded"></i></a>
                  </div>              
      
                </div>

                <div class="comment-footer">
                  <div class="time">
                    <a href="#">2h</a>
                  </div> 
                  <div class="reply">
                    <a href="#">reply</a>
                  </div>
                  <div class="reply">
                    <a href="#">edited</a>
                  </div>                    
                </div>


                <div class="reply-comment-body">
                <div class="reply-comment">  
                  <div>
                    <a href="#" class="profile-pic"><img src="/admin/avatar.jpg" alt="Profile Picture"></a>            
                  </div>
                  <div class="reply-container">
                      <div class="fullname">
                        <h2><a href="#">Jehu Famor</a></h2>
                      </div>
                        
                        <div class="comment">
                          <p >
                            Nice!😄
                          </p>
                        </div>
                  </div>
                    
                  <div class="comment-setting">
                        <a href="#" ><i class="bx bx-dots-horizontal-rounded"></i></a>
                  </div>              
      
                </div>

                <div class="comment-footer">
                  <div class="time">
                    <a href="#">2h</a>
                  </div> 
                  <div class="reply">
                    <a href="#">reply</a>
                  </div>                    
                </div>
      

            </div>
      
            </div>
          -->

            <!------------------------------additional comment structure
            
            <div class="comment-body">
              <div class="user-comment">  
                <div>
                  <a href="#" class="profile-pic"><img src="/admin/avatar.jpg" alt="Profile Picture"></a>            
                </div>
                <div class="comment-container">
                    <div class="fullname">
                      <h2><a href="#">Fritz Retiza</a></h2>
                    </div>
                      
                      <div class="comment">
                        <p>
                          <a href="#">David Matthew</a> hey I can help you let me send my file later.
                        </p>
                      </div>
                </div>
                  
                <div class="comment-setting">
                      <a href="#" ><i class="bx bx-dots-horizontal-rounded"></i></a>
                </div>              
    
              </div>

              <div class="comment-footer">
                <div class="time">
                  <a href="#">2h</a>
                </div> 
                <div class="reply">
                  <a href="#">reply</a>
                </div>                    
              </div>

              <div class="reply-comment-body">
              <div class="reply-comment">  
                <div>
                  <a href="#" class="profile-pic"><img src="/admin/avatar.jpg" alt="Profile Picture"></a>            
                </div>
                <div class="reply-container">
                    <div class="fullname">
                      <h2><a href="#">Aedus Obrero</a></h2>
                    </div>
                      
                      <div class="comment">
                        <p >
                          let's go
                        </p>
                      </div>
                </div>
                  
                <div class="comment-setting">
                      <a href="#" ><i class="bx bx-dots-horizontal-rounded"></i></a>
                </div>              
    
              </div>

              <div class="comment-footer">
                <div class="time">
                  <a href="#">2h</a>
                </div> 
                <div class="reply">
                  <a href="#">reply</a>
                </div>                    
              </div>
    

          </div>
    
          </div>
-->
            
        </div>        
      </div>
    </div>

    
   
  

  </div>

    <!-------------------sidebar content-->
      <div class="content2" id="content2"> 
        <div class="sidebar">
          <ul class="main-menu">
          <li class="dropdown">
            <a href="javascript:void(0)">Recent<span class="icon">▼</span></a>
            <ul class="dropdown-content">
                <li><a href="#">Java</a></li>
            </ul>
        </li>
          <div>
            <hr>
          </div>
          <li class="dropdown">
            <a href="javascript:void(0)">Topics<span class="icon">▼</span></a>
            <ul class="dropdown-content">
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">UI/UX</a></li>
                <li><a href="#">Java</a></li>
                <li><a href="#">Python</a></li>
                <li><a href="#">C#</a></li>
                <li><a href="#">C++</a></li>
                
  
                
            </ul>
        </li>
        <li class="dropdown">
          <a href="javascript:void(0)">Resources<span class="icon">▼</span></a>
          <ul class="dropdown-content">
              <li><a href="#">Web Design</a></li>
              <li><a href="#">Web Development</a></li>
              <li><a href="#">SEO</a></li>

          </ul>
      </li>

          <li><a href="#">About</a></li>
      </ul>
        </div>

      </div>

  </div>
   
  
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>