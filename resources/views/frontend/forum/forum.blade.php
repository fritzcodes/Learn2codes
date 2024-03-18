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
    <script src="assets/js/forum.js" defer></script>
    <script defer> let btn = document.querySelector('#menu-icon');
        let navbar = document.querySelector('.content2');

        btn.onclick = function () {
        navbar.classList.toggle('active');
        }
    </script>

    

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
          <img src="assets/images/Logo.jpg" alt="logo">
        </div>
      </li>
      <li>
        <input type="search" id="search" placeholder="Search">              
      </li >
      <!--
      <li class="filter">
        <a class="bx bxs-filter-alt" id="filter">    
        </a>


          <div id="filterModal" class="modal">
          <div id="filter-content" class="filter-content">
            <a href="#">Java</a>
            <a href="#">Python</a>
            <a href="#">Web Development</a>
            <a href="#">Figma</a>
            <a href="#">Game Development</a>
            <a href="#">Javascript</a>
            <a href="#">CSS</a>

            
          </div>
        </div>    

        
      </li>
         -->     
    </ul>
          
  </div>
    <div class="right-btn">
      <a href="#" class="bx bxs-bell" id="notif"><span class="indicator"></span></a>
      <div id="notifModal" class="modal">
      
        <!-- Modal content -->
        <div id="notif-content" class="notif-content">
          <!--<span class="close">&times;</span>-->
          <div>
            <h2>Notifications</h2>
          </div>

  
        </div>
      </div>

      <a href="#"><img src="/newForum/images/avatar.jpg" alt="user" class="avatar"></a>  
    </div>




    <!--
    <ul class="navbar">
      <ul class="profile">
        <button onclick="document.location='#'"><li><img src="/newForum/images/avatar.jpg" alt="Avatar" class="avatar"></li>
          <h3>Garen Damacia</h3></button>
      </ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#forums">Forums</a></li>
      <li><a href="C:\Users\David Matthew\OneDrive\Documents\david\playMenu\playMenu.html">Playground</a></li>
      <li><a href="C:\Users\David Matthew\OneDrive\Documents\david\moduleLang\moduleLang.html">Modules</a></li>
      <li><a href="#leaderboard">Leaderboard</a></li>
      <button onclick="document.location='login'" class="login-btn" >Login</button>
    </ul>-->
  </header>



<!-- -----------MAIN CONTENT------------ -->
<div class="main-content">   


  <div class="contents">
    <div class="feed">
      <div class="writeout">
        <div class="writein">
          <a href="#"><h2>Write your thoughts...</h2></a>
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
              <a href="#" ><i class="bx bx-dots-horizontal-rounded"></i></a>
          </div> 
        </div>

        <div class="post-content">
          <div class="caption">
              <p>
                This is an example post. Here you can add your text, images, or any other content you wish to share.
              </p>

              <div class="tags">
                <a href="#"><p>#Forums</p></a>
                <a href="#"><p>#Java</p></a>
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
          <div class="footer-btn" id="comment-btn">
            <a href="#"><i class="bx bxs-message-rounded"></i></a>
            <p>Comment</p>
          </div>
            
        </div>

        <div class="main-comment-sec">  <!--comment section / hidden in default-->
            <div class="line">
              <hr>
            </div>          

            <div class="filter-comment">
              <a href="#" >All comments <i class="bx bx-chevron-down"></i></a>
            </div> 

          <div class="comment-sec"> 
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
                          <div class="comment-pic"> <!--where picture/s will displayed-->
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

            <!--additional comment structure-->
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

            <!-------------OUTDATED additional comment structure
            <div class="comment-body">
              <div>
                <a href="#" class="profile-pic"><img src="/admin/avatar.jpg" alt="Profile Picture"></a>            
              </div>

                <div class="user-comment">  
                  <div class="comment-container">

                        <div class="fullname">
                          <p><a href="#">David Matthew Borromeo</a><span id="author">Author</span></p>
                        </div>
                        
                      <div class="comment">
                        <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                          Est, deserunt libero. Ex, a. Dolores maxime sequi debitis est, fugit magnam sint,
                          praesentium quidem eos cumque error molestiae expedita recusandae ut.
                        </p>
                      </div>

                  </div>
                                
                      <div class="comment-footer">
                        <div class="edit">
                          <a href="#">edit</a>
                        </div>
                        <div class="reply">
                          <a href="#">reply</a>
                        </div>
                        <div class="time">
                          <a href="#">2h</a>
                        </div>
                      </div>

                      <div class="reply-comment-body">
                        <div>
                          <a href="#" class="profile-pic"><img src="/admin/avatar.jpg" alt="Profile Picture"></a>            
                        </div>

                        <div class="reply-comment">
                          <div class="comment-container">
                              <div class="fullname">
                                <p><a href="#">David Matthew Borromeo</a></p>
                              </div>

                            <div class="comment">
                              <p >Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Est, deserunt libero. Ex, a. Dolores maxime sequi debitis est, fugit magnam sint,
                                praesentium quidem eos cumque error molestiae expedita recusandae ut.
                              </p>
                            </div>
                          </div>

                            <div class="comment-footer">
                              <div class="edit">
                                <a href="#">edit</a>
                              </div>
                              <div class="reply">
                                <a href="#">reply</a>
                              </div>
                              <div class="time">
                                <a href="#">1m</a>
                              </div>
                              <div class="more-reply">
                                <a href="#">view more replies</a>
                              </div>
                            </div>
                        </div>

                          <div class="comment-setting">
                            <a href="#" ><i class="bx bx-dots-horizontal-rounded"></i></a>
                          </div>

                      </div>
                </div>

                      <div class="comment-setting">
                        <a href="#" ><i class="bx bx-dots-horizontal-rounded"></i></a>
                    </div>      

            </div>  
            -->
        
        </div>        
      </div>
    </div>
   
  

  </div>

    <!-------------------sidebar content-->
      <div class="content2" > 
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