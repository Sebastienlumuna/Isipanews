<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pagecontroller extends Controller
{

    // renvoie la vue home
    public function home(){
        return view('home.home');
    }

    public function campus(){
        return view('home.campus');
    }

    public function contact(){
        return view('home.contact');
    }
}
