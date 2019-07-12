<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    //
    public function index(){
        
        $posts=DB::select('select * from posts');
        //$posts= Post::all();
        return view('posts.index')->with('posts',$posts);
    }
}
