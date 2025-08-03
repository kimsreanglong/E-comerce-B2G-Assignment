<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function index(){

        return view('Frontend.service.index');
    }


    public function register(){
        return view('Frontend.service.register');
    }

    public function renew(){
        return view('Frontend.service.renew');
    }



    public function booktest(){
        return view('Frontend.service.bookTest');
    }


    public function checkstatus()  {
        return view('Frontend.service.checkstatus');
    }

    public function downloadDucument(){
        return view('Frontend.service.download');
    }
}