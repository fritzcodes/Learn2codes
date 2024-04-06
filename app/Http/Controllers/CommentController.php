<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Reply;
use App\Http\Requests\ReplyRequest;
class CommentController extends Controller
{
    public function store(CommentRequest $request){
        $data = $request->validated();
        $comment = Comment::create($data);
        $commentWithUser = Comment::with('user')->find($comment->id);
        return response()->json($commentWithUser);
    }

    public function storeReply(ReplyRequest $request){
        $data = $request->validated();
        $reply = Reply::create($data);
        $replyWithUser = Reply::with('user')
        ->with('replyWithUser')
        ->find($reply->id);
        return response()->json($replyWithUser);
        
    }
}
