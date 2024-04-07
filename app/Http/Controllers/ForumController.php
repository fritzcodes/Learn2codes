<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\ImagePost;
use App\Models\LikeComment;
use App\Models\LikePost;
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
        ->with(['likes.user' => function ($query) use ($name){
            $query->where('id', $name->id);
        }])
        ->with(['comments.user', 'comments.replies.user'])
        //->with(['commentsWithLikesCount', 'commentsWithLikesCount.likes'])
        ->with('comments.like.user')
        ->with('comments.replies.replyWithUser')
        ->get();
       //dd($posts);
       return view('frontend.forum.forum', compact('name', 'posts'));
    }

    public function store(PostRequest $request){
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

    public function likePost(Request $request){
        $data = $request->validate([
            'user_id' => 'required',
            'post_id' => 'required',
        ]);
        $liked = LikePost::where('post_id', $data['post_id'])
        ->where('user_id', Auth::user()->id)
        ->exists();
        if($liked){
            LikePost::where('post_id', $data['post_id'])
            ->where('user_id', Auth::user()->id)
            ->delete();
            $data = 'subtract';
        }else{
            LikePost::create($data);
            $data = 'add';
        }
        
        
        return response()->json($data);
    }

    public function likeComment(Request $request){
        $data = $request->validate([
            'user_id' => 'required',
            'comment_id' => 'required',
        ]);
        $liked = LikeComment::where('comment_id', $data['comment_id'])->exists();
        if($liked){
            LikeComment::where('comment_id', $data['comment_id'])->delete();
            $data = 'subtract';
        }else{
            LikeComment::create($data);
            $data = 'add';
        }
        
        
        return response()->json($data);
    }
}