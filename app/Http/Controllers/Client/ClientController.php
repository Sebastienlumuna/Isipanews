<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

        $user = Auth::user();
        $name = $user->name;
        return view('client.index', compact('name'));
    }

    public function profilview(){

        return view('client.profil');
    }

}
