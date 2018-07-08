<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        $page = "welcome";
        return view('front/welcome', compact('page'));
    }

    public function tournament(){
        $page = "tournament";
        return view('front/tournament', compact('page'));
    }

    public function rules(){
        $page = "rules";
        return view('front/rules', compact('page'));
    }

    public function how_to_join(){
        $page = "how_to_join";
        return view('front/how_to_join', compact('page'));
    }

    public function contact(){
        $page = "contact";
        return view('front/contact', compact('page'));
    }
}
