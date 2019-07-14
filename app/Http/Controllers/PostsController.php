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

    public function create(){
        return view ('posts.create');
    }

    public function store(Request $request){

        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);
        $post=new Post;
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $post->save();
        //DB::insert('insert into posts (title,body) values (?,?)',[$t,$b]);

        //$posts=DB::select('select * from posts');

        //return view ('posts.index')->with('posts',$posts);
        return redirect('/posts');
    }
}
