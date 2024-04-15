<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Models\ImagePost;
use App\Models\LikeComment;
use App\Models\LikePost;
use App\Models\UserNotification;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display the about form.
     */
    public function Index(): View
    {
        $name = Auth::user();
        $posts = Post::with('images')
            ->with('user')
            ->withCount('likes')
            ->with(['likes.user' => function ($query) use ($name) {
                $query->where('id', $name->id);
            }])
            ->with(['comments.user', 'comments.replies.user'])
            ->with(['comments.likes.user' => function ($query) use ($name) {
                $query->where('id', $name->id);
            }])
            ->with('comments.replies.replyWithUser')
            ->where('is_deleted', '0')
            ->orderBy('created_at', 'desc') // Order by created_at column in descending order
            ->get();
        $notif = UserNotification::where('self_id', $name->id)->get();
        //dd($notif);
        return view('frontend.forum.forum', compact('name', 'posts', 'notif'));
    }
    

    public function store(PostRequest $request)
    {
        $post = new Post;
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        unset($data['image']);
        $post->fill($data);
        $post->save();
        $postId = $post->id;
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('forums'), $imageName);
                ImagePost::create([
                    'post_id' => $postId,
                    'image' => $imageName
                ]);
            }
        }
        return back()->with('msg', 'success');
    }

    public function likePost(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'post_id' => 'required',
        ]);
        $liked = LikePost::where('post_id', $data['post_id'])
            ->where('user_id', Auth::user()->id)
            ->exists();
        if ($liked) {
            LikePost::where('post_id', $data['post_id'])
                ->where('user_id', Auth::user()->id)
                ->delete();

            UserNotification::where('notif_type_id', $data['post_id'])
                ->where('user_id', Auth::user()->id)
                ->where('notif_type', 'post')
                ->orderBy('created_at', 'desc')
                ->delete();
            $data = 'subtract';
        } else {
            LikePost::create($data);
            $data = 'add';

            $self = Post::with('user')->findOrFail($request['post_id']);

            if ($request['user_id'] != $self->user_id) {
                UserNotification::create([
                    'self_id' => $self->user_id,
                    'user_id' => $request->user_id,
                    'notif_type' => 'post',
                    'content' => Auth::user()->fname . ' ' . Auth::user()->lname . ' Liked your post',
                    'notif_type_id' => $request->post_id
                ]);
            }
        }


        return response()->json($data);
    }

    public function likeComment(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required',
            'comment_id' => 'required',
        ]);
        $liked = LikeComment::where('comment_id', $data['comment_id'])
            ->where('user_id', Auth::user()->id)
            ->exists();
        if ($liked) {
            LikeComment::where('comment_id', $data['comment_id'])
                ->where('user_id', Auth::user()->id)
                ->delete();

            UserNotification::where('notif_type_id', $data['comment_id'])
                ->where('user_id', Auth::user()->id)
                ->where('notif_type', 'comment')
                ->orderBy('created_at', 'desc')
                ->delete();
            $data = 'subtract';
        } else {
            LikeComment::create($data);
            $data = 'add';

            $self = Comment::with('user')->findOrFail($request['comment_id']);

            if ($request['user_id'] != $self->user_id) {
                UserNotification::create([
                    'self_id' => $self->user_id,
                    'user_id' => $request->user_id,
                    'notif_type' => 'comment',
                    'content' => Auth::user()->fname . ' ' . Auth::user()->lname . ' Liked your comment',
                    'notif_type_id' => $request->comment_id
                ]);
            }
        }


        return response()->json($data);
    }

    public function PopularTopics($hashtag): View
    {
        $name = Auth::user();
        $posts = Post::with('images')
            ->with('user')
            ->withCount('likes')
            ->with(['likes.user' => function ($query) use ($name) {
                $query->where('id', $name->id);
            }])
            ->with(['comments.user', 'comments.replies.user'])
            ->with(['comments.likes.user' => function ($query) use ($name) {
                $query->where('id', $name->id);
            }])
            ->with('comments.replies.replyWithUser')
            ->where('content', 'LIKE', '%#' . $hashtag . '%')
            ->where('is_deleted', '0')
            ->get();
        //dd($posts);
        return view('frontend.forum.popularTopic', compact('name', 'posts'));
    }

    public function Notification()
    {
        $notif = UserNotification::where('self_id', Auth::user()->id)
            ->orderBy('created_at', 'desc') // Order by created_at column in descending order
            ->get();
        return response()->json($notif);
    }
    

    public function NotificationUpdate()
    {
        $notif = UserNotification::where('self_id', Auth::user()->id)
        ->where('is_read', '0')
        ->update(['is_read' => '1']);
        return response()->json($notif);
    }

    public function destroy($id)
    {
        $notif = Post::where('id', $id)->update(['is_deleted' => '1']);
        return response()->json("success");
    }
}