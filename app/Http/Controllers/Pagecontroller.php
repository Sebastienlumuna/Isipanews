<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
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

    public function show(Post $post ): View
    {
        return view('home.show',[
            'post' => $post,
        ]
    );
    }

    public function postbycategorie(Categorie  $categorie): View
    {

        return view('home.home',  [
            'posts' => $categorie->posts()->paginate(9)
        ]);

    }
    public function campus(){
        return view('home.campus');
    }

    public function contact(){
        return view('home.contact');
    }
}
