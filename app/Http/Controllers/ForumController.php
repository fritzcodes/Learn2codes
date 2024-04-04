<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\ImagePost;

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
        ->with(['comments.user', 'comments.replies.user'])
        ->get();
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

}