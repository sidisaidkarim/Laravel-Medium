<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\User;
class WelcomeController extends Controller
{


    public function index(){
        $posts = Post::all();
       if(auth()->check())  {
          $id_user = auth()->user()->id;
          $user = User::find($id_user);
          return view('welcome')->with(['posts'=>$posts,'user_posts'=>$user->posts]);
      }
      return view('welcome')->with('posts',$posts);
    }
}
