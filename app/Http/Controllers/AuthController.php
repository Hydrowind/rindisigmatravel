<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function signin(){
        return view('admin.dashboard');
    }

    public function signout(){
        return view('login');
    }
}
