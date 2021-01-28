<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __invoke(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function skill(){
        return view('skill');
    }

    public function contact(){
        return view('contact');
    }

}
