<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\Builder;

class Pagecontroller extends Controller
{

    // renvoie la vue home
    public function home(): View
    {
        $posts = Post::with('user', 'categorie')->orderBy('created_at', 'desc')
        ->paginate(9);
        return view('home.home',
        compact('posts')
    );
    }
    public function campus(){
        return view('home.campus');
    }

    public function contact(){
        return view('home.contact');
    }
}
