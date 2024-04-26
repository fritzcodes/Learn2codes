<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Forum | Learn2Code</title>
    <link rel="stylesheet" href="/assets/css/forum.css">
    <link rel="shortcut icon" type="x-icon" href="assets/images/logo.svg">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.25.0/themes/prism.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="/assets/js/forum.js" defer></script>
    <script src="/assets/js/insertimg.js" defer></script>
    <style>
        .unread {
            margin: 5px;
            content: '';
            position: absolute;
            display: inline-block;
            width: 10px;
            height: 10px;
            border-radius: 100%;
            background-color: #ef172c;
            animation: 1.5s infinite beatHeart;
            transform-origin: center;
        }

        .indicator {
            content: '';
            /* Add the number 1 here */
            position: absolute;
            top: -5px;
            /* Adjust position */
            right: -4px;
            /* Adjust position */
            display: inline-block;
            width: 20px;
            height: 20px;
            padding: 5px 0 0 0;
            border-radius: 100%;
            background-color: #ef172c;
            /* Change color to white or any desired color for the number */
            color: #fff;
            /* Set the text color */
            font-weight: bold;
            /* Make the number bold */
            font-size: 10px;
            /* Adjust font size */
            text-align: center;
            /* Center the number horizontally */
            animation: 1.5s infinite beatHeart;
            transform-origin: center;
        }

        @keyframes beatHeart {
            0% {
                transform: scale(0.9);
            }

            25% {
                transform: scale(1.1);
            }

            40% {
                transform: scale(0.9);
            }

            60% {
                transform: scale(1.1);
            }

            100% {
                transform: scale(0.9);
            }
        }


        .list-footer {
            display: flex;
            justify-content: center;
            font-size: var(--p-font);
            color: #fff;
            padding: 10px 0px;
            line-height: 1.5;
            font-weight: 700;
            background-color: var(--main-color);
            border-radius: 3px;

        }




        .user ul {
            align-items: center;
            display: flex;
        }

        .user ul li {
            margin-right: 10px;
        }

        .navbar {
            position: absolute;
            top: 0;
            right: -100%;
            width: 40%;
            height: 100vh;
            background: #000;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 60px 0%;
            transition: 0.5s all;
        }

        .open {
            right: 0;
        }

        .list {
            width: 50%;
            margin-top: 100px;
        }

        .profile button {
            display: flex;
            color: var(--bg-color);
            border-style: unset;
            background: transparent;
            cursor: pointer;
            align-items: center;
            text-align: left;
        }

        .profile h3 {
            margin-left: 10px;
            white-space: nowrap;
            overflow: hidden;
            max-width: 300px;
            text-overflow: ellipsis;
            scroll-behavior: unset;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .no-post {
            padding: 20px 0;
            width: 100%;
            display: block;
            text-align: center;
            justify-content: center;
        }

        .no-post img {
            width: 40%;
            height: auto;
            object-fit: cover;
            animation: float 3s ease-in-out infinite;

        }

        /* Keyframes for floating effect */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }


        .no-post h2 {
            padding: 10px 0;
            font-size: var(--h2-font);
            color: var(--second-color);
        }
    </style>




</head>

<body>
    <!-- -----------SIDEBAR------------ -->
    <header>
        <div class="user">
            <ul>
                <li>
                    <a class="bx bx-menu" id="menu-icon"></a>
                </li>
                <li>
                    <div class="logo">
                        <a href="/forum">
                            <img src="assets/images/Logo.jpg" alt="logo">
                        </a>
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
                </li>
                <!--
      <li class="filter">
        <a class="bx bxs-filter-alt" id="filter">
        </a>
   

        
      </li>
         -->
            </ul>

        </div>
        <div class="right-btn">

            <a href="#" class="bx bxs-bell" id="notif"><span class="indicator">{{ $notifCount }}</span></a>
            <script>
                $(document).ready(function() {
                    $('.indicator').css('content', '5');
                })
            </script>
            <a href="/profile" class="profile-link">
                @if (Auth::check() && Auth::user()->profile_photo)
                <img src="{{ Auth::user()->profile_photo ? asset('/images/' . Auth::user()->profile_photo) : '/assets/images/avatar.png' }}" alt="Profile Photo" class="avatar">
                @else
                <!-- Placeholder image or default avatar -->
                <img src="/assets/images/avatar.png" alt="Default Avatar" class="avatar">
                @endif
            </a>
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
                        <a href="#"><i class='bx bx-check'></i>
                            <p>Mark all as read</p>
                        </a>
                        </a>
                        <a href="#"><i class='bx bxs-trash'></i>
                            <p>Clear all notifications</p>
                        </a>
                    </div>

                </div>



                <div id="notifContainer">
                    @foreach ($notif as $notification)
                    <div class="notif-container" onclick="markNotificationAsReadAdmin('{{ $notification->id }}')">
                        <a href="#" class="notification-item @if (!$notification->is_read) unread-notif @endif" data-notification-id="{{ $notification->id }}" data-post-id="{{ $notification->post_id }}">
                            <span class="unread"></span>
                            <img src="/images/{{ $notification->user->profile_photo }}" alt="Notification Icon" class="icon"> <!-- Display user's avatar -->
                            <div class="content">
                                <h2 class="notification-item-user-block">
                                    <span class="notification-item-user-name"></span>
                                    Post #{{ $notification->post_id }} is reported
                                </h2>
                                <span class="timestamp">{{ $notification->created_at->diffForHumans() }}</span>
                            </div>
                            <!-- <button onclick="showModal('settings{{ $loop->iteration }}')" type="button"
                                    class="notif-action">
                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                </button> -->
                        </a>

                        <!-- <div class="notif-action-modal" id="settings{{ $loop->iteration }}">
                               
                                <a href="#"><i class='bx bx-check'>
                                        <p>Mark as read</p>
                                    </i></a>
                                <a href="#"><i class='bx bxs-bell'>
                                        <p>Remove</p>
                                    </i></a>
                            </div> -->
                    </div>
                    @endforeach
                </div>






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
                        <a href="#" id="createbtn">
                            <h2>Write your thoughts...</h2>
                        </a>
                    </div>
                </div>

                <div id="postModal" class="modal">
                    <div class="modal-content">
                        <div class="createheader">
                            <h2>Create Post<span class="close">&times;</span></h2>
                        </div>

                        <hr>

                        {{-- <form id="postForm" action="/post-forum" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="info-header">
                                <div>
                                    <a href="#" class="profile-pic">
                                        @if (Auth::check() && Auth::user()->profile_photo)
                                        <img src="{{ Auth::user()->profile_photo ? asset('images/' . Auth::user()->profile_photo) : 'assets/images/avatar.png' }}" alt="Profile Picture" class="profile-pic">
                                        @else
                                        <!-- Placeholder image or default avatar -->
                                        <img src="assets/images/avatar.png" alt="Profile Picture" class="profile-pic">
                                        @endif
                                    </a>
                                </div>

                                <div class="post-info">
                                    <div class="first-name">
                                        <p><a href="#">{{ $name->fname . ' ' . $name->lname }}</a><span class="feelings" style="display: none;">
                                                is <img src="images/smiley.PNG" alt=""> feeling happy</span>
                                        </p>
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
                                    <textarea id="textContent" name="content" placeholder="Type a caption here..." required></textarea>
                                </div>

                                <div class="photocontainer">
                                    <span class="photoclose">&times;</span>
                                    <input type="file" id="file-input" name="image[]" accept="image/png, image/jpeg" onchange="preview()" multiple>
                                    <label for="file-input">
                                        <i class='bx bx-upload'></i> &nbsp; Choose A Photo
                                    </label>
                                    <p id="num-of-files">
                                        No Files Chosen
                                    </p>
                                    <div id="photos">

                                    </div>
                                </div>

                                <div class="codecontainer">
                                    <span class="codeclose" onclick="insertCode()">&times;</span>
                                    <div>
                                        <h3>Insert code here</h3>
                                        <textarea name="code" id="" rows="10" style="width: 100%; background-color:black; color:white"></textarea>
                                    </div>
                                </div>
                            </div>



                            <div class="create-footer">
                                <div id="add-content" class="add-content">
                                    <a class="photos" data-tooltip="Add Photos"><i class='bx bx-image-add'></i></a>
                                    <a class="emotions" data-tooltip="Add Feelings"><i class='bx bxs-heart-circle'></i></a>
                                    <a class="snippet" data-tooltip="Insert Code" id="insertCode" onclick="insertCode()"><i class='bx bx-code'></i></a>
                                    <a class="hashtag" data-tooltip="Add Hashtag" id="hashtag"><i class='bx bx-link-alt'></i></a>
                                </div>

                                <button type="submit" id="postbtn">Post</button>
                            </div>


                        </form> --}}
                    </div>
                </div>



                @if (count($posts) > 0)
                @foreach ($posts as $index => $post)
                <div class="post" id="postNotif{{ $post->id }}">
                    <div class="post-header">
                        <div>
                            <a href="#" class="profile-pic"><img src="{{ $post->user->profile_photo ? 'images/' . $post->user->profile_photo : 'assets/images/avatar.png' }}" alt="Profile Picture" id="profile-pic"></a>
                        </div>

                        <div class="post-info">
                            <div class="first-name">
                                <p><a href="#">{{ $post->user->fname . ' ' . $post->user->lname }}</a><!--<span class="feelings">
                    is <img src="images/smiley.PNG" alt=""> feeling happy</span></p> -->
                            </div>

                            <div class="date">
                                <!-- \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->updated_at )->format('h:i a | M. d, Y')  -->
                                {{ \Illuminate\Support\Carbon::parse($post->created_at)->diffForHumans() }}
                            </div>
                        </div>
                        <div class="post-setting">
                            <button href="#" onclick="deletePost(`postsetModal{{ $post->id }}`)" style="background-color: transparent; border:none"><i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <div id="postsetModal" class="modal postsetModal{{ $post->id }}">
                                <a onclick="deletePostId('{{ $post->id }}')"><i class='bx bxs-trash'></i>
                                    <p>Delete</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="post-content">
                        <div class="caption">
                            @php
                            $content = $post->content;

                            preg_match_all('/#(\w+)/', $content, $matches);

                            $hashtags = $matches[1];
                            foreach ($hashtags as $hashtag) {
                            $content = str_replace(
                            "#$hashtag",
                            "<a href='/popular/$hashtag' class='hashtags'>#$hashtag</a>",
                            $content,
                            );
                            }

                            @endphp

                            <pre>{!! $content !!}
</pre>

                        </div>

                        @if ($post->code != null)
                        <div class="code-snippet"> <!--where code will display-->
                            <div class="code-name">
                                <p> </p>
                            </div>
                            <pre><code>{{ $post->code }}</code> </pre>
                        </div>
                        @endif

                        @if (count($post->images) > 0)
                        <div class="image-gallery">
                            @foreach ($post->images as $image)
                            <img class="post-pic" src="forums/{{ $image->image }}" alt="Image 1">
                            @endforeach
                        </div>
                        @endif


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
                        <p id="likesCount{{ $post->id }}" class="footer-btn">
                            {{ $post->likes_count == 0 ? '' : $post->likes_count }}
                        </p>
                        <a class="footer-btn" onclick="likePost('like{{ $post->id }}', '{{ $name->id }}', '{{ $post->id }}')" style="text-align:left">

                            <i class="fa fa-heart 
                @if (count($post->likes) > 0) @php $outlinedHeart = true; @endphp
                    @foreach ($post->likes as $like)
                        @if ($like->user != null)
                            @php $outlinedHeart = false; @endphp
                            @break @endif
                    @endforeach
                    {{ $outlinedHeart ? 'outlined-heart' : '' }}
@else
outlined-heart
                @endif
            " id="like{{ $post->id }}">
                            </i>

                            <p>Like</p>
                        </a>
                        <a class="footer-btn" onclick="showComment('main-comment-sec{{ $post->id }}')"><i class="bx bxs-message-rounded"></i>
                            <p>Comment</p>
                        </a>
                        <a href="#" class="footer-btn" id="share-btn"><i class='bx bxs-share'></i>
                            <p>Share</p>
                        </a>

                        <div id="shareModal" class="modal">
                            <div id="share-content" class="share-content">
                                <!-- <a href=""><i class='bx bxl-facebook'></i></a>
                <a href=""><i class='bx bxl-instagram-alt'></i></a>
                <a href=""><i class='bx bxl-twitter'></i></a> -->
                                <a href="#" class="copy-link" onclick="copyLink('/forum/{{ $post->id }}')">
                                    <i class='bx bx-link-alt'></i>
                                    <span class="tooltip" id="tooltip">Copy link</span>
                                </a>

                            </div>
                        </div>

                        <script>
                            function copyLink(link) {
                                var linkText = window.location.href;
                                var url = window.location.href;
                                var parser = document.createElement('a');
                                parser.href = url;
                                var host = parser.protocol + "//" + parser.hostname + (parser.port ? ":" + parser.port : "");
                                navigator.clipboard.writeText(host + link).then(function() {
                                    var tooltip = document.getElementById("tooltip");
                                    tooltip.innerText = "Link copied!";
                                    setTimeout(function() {
                                        tooltip.innerText = "Copy link";
                                    }, 1500);
                                }).catch(function(err) {
                                    console.error('Failed to copy: ', err);
                                });
                            }
                        </script>
                    </div>

                    <div class="main-comment-sec" id="main-comment-sec{{ $post->id }}">
                        <!--comment section / hidden in default-->
                        <div class="line">
                            <hr>
                        </div>

                        <div id="filter-comment">
                            <a href="#">All comments <i class="bx bx-chevron-down"></i></a>
                        </div>

                        <div id="filter-comment-modal">
                            <a href=""><i class='bx bx-check'></i>
                                <p>Newest</p>
                            </a>
                            <a href=""><i class='bx bxs-bell'></i>
                                <p>All comments</p>
                            </a>
                        </div>

                        <div class="comment-sec">


                            <!-------------------------------------COMMENT BODY-->
                            <div class="comments" id="post{{ $post->id }}">
                                @if (count($post->comments) > 0)
                                @foreach ($post->comments as $comment)
                                <div class="comment" id="commentNotif{{ $comment->id }}">
                                    <div class="user-info">
                                        <img src="{{ $comment->user->profile_photo ? 'images/' . $comment->user->profile_photo : 'assets/images/avatar.png' }}" alt="Profile Picture">
                                        <div class="user">
                                            {{ $comment->user->fname . ' ' . $comment->user->lname }}
                                        </div>
                                    </div>

                                    <div class="content">
                                        {{ $comment->comment }}
                                        <!-- @if (Auth::user()->id == $comment->user_id)
                  <a href="">Edit</a> |
                  <a href="">Delete</a>
                  @endif -->
                                    </div>

                                    <div class="actions">
                                        <p id="likesCommentCount{{ $comment->id }}">
                                            @if (count($comment->likes) > 0)
                                            {{ count($comment->likes) }}@endif
                                        </p>
                                        <button onclick="likeComment('likeComment{{ $comment->id }}', '{{ $name->id }}', '{{ $comment->id }}')" class="
                    @if (count($comment->likes) > 0) @php $tBold = true; @endphp
                      @foreach ($comment->likes as $like)
                          @if ($like->user != null)
                              @php $tBold = false; @endphp
                              @break @endif
                      @endforeach
                      {{ $tBold ? '' : 'tBold' }}
                    @endif
                    " id="likeComment{{ $comment->id }}">Like</button>
                                        <button onclick="toggleReply('replyInput{{ $comment->id }}')">Reply</button>
                                        <button href="#">{{ \Illuminate\Support\Carbon::parse($comment->created_at)->diffForHumans() }}</button>
                                    </div>


                                    <div class="replies" id="repliesContainer{{ $comment->id }}">
                                        @if (count($comment->replies) > 0)
                                        @foreach ($comment->replies as $reply)
                                        <div class="reply-container reply nested-reply" id="replyNotif{{ $reply->id }}">
                                            <div class="user-info">
                                                <img src="{{ $reply->user->profile_photo ? 'images/' . $reply->user->profile_photo : 'assets/images/avatar.png' }}" alt="User Avatar" style=" border-radius: 50%; margin-right: 10px; object-fit: cover;">
                                                <div class="user">
                                                    {{ $reply->user->fname . ' ' . $reply->user->lname }}
                                                </div>


                                            </div>
                                            @if ($reply->replyWithUser != null)
                                            <p class="content" style="font-size: 12px; font-style:italic">
                                                {{ $name->id == $reply->user->id ? 'You' : $reply->replyWithUser->user->fname }}
                                                replied to
                                                {{ $reply->replyWithUser->user->fname . ' ' . $reply->replyWithUser->user->lname }}
                                            </p>
                                            <div style="background-color:rgba(255,255,255, .5)">
                                                <p class="content" style="font-size: 12px; color:gray; font-style:italic">
                                                    {{ $reply->replyWithUser->reply }}
                                                </p>
                                            </div>
                                            @endif


                                            <div class="content">{{ $reply->reply }}</div>
                                            <div class="actions">
                                                <button onclick="toggleReply('replyInputNested-{{ $reply->id }}')">Reply</button>
                                                <button href="#">{{ \Illuminate\Support\Carbon::parse($reply->created_at)->diffForHumans() }}</button>
                                            </div>
                                            <div class="reply-input" id="replyInputNested-{{ $reply->id }}" style="display:none;">
                                                <textarea placeholder="Write a reply..."></textarea>
                                                <button onclick="postReply(this, 'repliesContainer{{ $comment->id }}', '{{ $name->id }}', '{{ $comment->id }}', '{{ $reply->id }}')">Reply</button>
                                            </div>
                                            <div class="replies" id="nestedRepliesContainer-{{ $comment->id }}">
                                            </div> <!-- Nested replies container -->
                                        </div>
                                        @endforeach
                                        @endif
                                    </div> <!-- Replies container for comment 1 -->

                                    <div class="reply-input" id="replyInput{{ $comment->id }}">
                                        <textarea placeholder="Write a reply..."></textarea>
                                        <button onclick="postReply(this, 'repliesContainer{{ $comment->id }}', '{{ $name->id }}', '{{ $comment->id }}')">Reply</button>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>

                            <div style="padding:12px;">
                                <form action="/comment/store" method="POST" id="commentId{{ $post->id }}" style="display:flex; border: solid var(--main-color); border-radius: 5px;">
                                    @csrf
                                    <textarea name="comment" id="comment{{ $post->id }}" style="width:100%; height:50px; display:inline-block; resize: none; padding: 5px; border: none; border-radius: 5px;" placeholder="Add comment..." required></textarea>
                                    <input type="hidden" id="user_id{{ $post->id }}" value="{{ $name->id }}">
                                    <input type="hidden" id="postId{{ $post->id }}" value="{{ $post->id }}">
                                    <button id="btn{{ $post->id }}" onclick="postComment($('#comment{{ $post->id }}').val(), $('#user_id{{ $post->id }}').val(), $('#postId{{ $post->id }}').val())" style="display: inline-block; width:50px; height:50px; font:bx-send; border: none; cursor: pointer;" value="Comment"><i class="bx bxs-send" style="color: var(--main-color); font-size: 30px;"></i></button>
                                </form>
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


                @endforeach
                @else
                <div class="no-post">
                    <img src="/assets/images/no-post.png" alt="">
                    <h2>No Post Yet</h2>
                </div>

                @endif






            </div>
            @php
            $allHashtags = [];
            foreach ($posts as $post) {
            $content = $post->content;
            preg_match_all('/#(\w+)/', $content, $matches);
            $allHashtags = array_merge($allHashtags, $matches[1]);
            }

            $hashtagCounts = array_count_values($allHashtags);
            arsort($hashtagCounts);
            $popularHashtags = array_slice($hashtagCounts, 0, 5, true);
            @endphp

            @foreach ($posts as $index => $post)
            @php
            $content = $post->content;
            preg_match_all('/#(\w+)/', $content, $matches);
            @endphp

            @endforeach

            <!-------------------sidebar content-->
            <div class="content2" id="content2">
                <div class="sidebar">
                    <ul class="main-menu">
                        <li class="dropdown">
                            <a href="javascript:void(0)">Popular Hashtags<span class="icon">▼</span></a>

                            <ul class="dropdown-content">
                                @foreach ($popularHashtags as $hashtag => $count)
                                <li><a href="/popular/{{ $hashtag }}">#{{ $hashtag }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <div>
                            <hr>
                        </div>
                        <!-- <li class="dropdown">
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

            <li><a href="#">About</a></li> -->
                    </ul>
                </div>

            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $('#hashtag').click(function() {
            $('#textContent').val($('#textContent').val() + '#');
        })

        function fetchNotificationsAdmin() {
            $.ajax({
                url: '/notificationsAdmin',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    let notif = "";

                    data.forEach((notifs, i) => {
                        notif += `
              <div class="notif-container" onclick="markNotificationAsRead('${notifs.id}')">
                  <a href="#" class="notification-item ${notifs.is_read == 0 ? 'unread-notif' : ''}">
                      <span class="unread"></span>
                      <i class="icon bx bx-post"></i>
                      <div class="content">
                          <h2 class="notification-item-user-block">
                           Post # ${notifs.post_id} is reported
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
                },
                error: function(xhr) {
                    console.log(xhr.responseText)
                }
            });
        }
        setInterval(function() {
            fetchNotificationsAdmin();
        }, 3000);
    </script>
</body>

</html>