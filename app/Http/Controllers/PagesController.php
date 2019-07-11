<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $posts=['post1','post2','post3'];
        return view('index')->with('posts',$posts);
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }
}
