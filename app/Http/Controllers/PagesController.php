<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(Request $request){
       
        $posts=['post1','post2','post3'];
        return view('index')->with('posts',$posts);
    }

    public function home(Request $request){
        $user=$request->input('username');
        
        return view('hom')->with('user',$user);
    }
    
    public function login(){
        return view('login');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }
}
