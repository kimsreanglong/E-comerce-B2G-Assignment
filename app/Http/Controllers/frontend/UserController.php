<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('Frontend.users.index');
    }

    public function register(){
        return view('Frontend.users.register');
    }

    public function  profile(){
        return view('Frontend.users.profile');
    }
}
