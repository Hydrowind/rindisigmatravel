<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function tour(){
        return view('tour');
    }

    public function blog(){
        return view('blog');
    }

    public function about(){
        return view('about');
    }
}
