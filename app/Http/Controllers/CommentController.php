<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Reply;
use App\Http\Requests\ReplyRequest;
use App\Models\Post;
use App\Models\UserNotification;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(CommentRequest $request)
    {
        $data = $request->validated();
        $comment = Comment::create($data);
        $commentWithUser = Comment::with('user')->with('likes')->find($comment->id);

        $self = Post::with('user')->findOrFail($request->post_id);

        if ($request['user_id'] != $self->user_id) {
            UserNotification::create([
                'self_id' => $self->user_id,
                'user_id' => $request->user_id,
                'notif_type' => 'comment',
                'content' => Auth::user()->fname . ' ' . Auth::user()->lname . ' commented on your post',
                'notif_type_id' => $comment->id
            ]);
        }
        return response()->json($commentWithUser);
    }

    public function storeReply(ReplyRequest $request)
    {
        $data = $request->validated();
        $reply = Reply::create($data);
        $replyWithUser = Reply::with('user')
            ->with('replyWithUser')
            ->find($reply->id);

        if($request->reply_id_reply == null){
            $self = Comment::with('user')->findOrFail($request->comment_id);
        }else{
            $self = Reply::with('user')->findOrFail($request->reply_id_reply);
        }
        

        if ($request['user_id'] != $self->user_id) {
            UserNotification::create([
                'self_id' => $self->user_id,
                'user_id' => $request->user_id,
                'notif_type' => 'reply',
                'content' => Auth::user()->fname . ' ' . Auth::user()->lname . ' replied to your comment',
                'notif_type_id' => $reply->id
            ]);
        }

        return response()->json($replyWithUser);
    }
}
