<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;

class CommentController extends Controller
{
    public function store(Request $request){

      $this->validate($request,[
        'comment'=>'required',
      ]);

      $comment = new Comment;
      $comment->body = $request->input('comment');
      $comment->user_id = auth()->user()->id;
      $comment->post_id = $request->input('post_id');
      $comment->save();

        return redirect()->route('posts.show',['id'=>$request->input('post_id')]);
    }

}
