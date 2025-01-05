<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Str;
use App\Models\Categorie;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{

    public Function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index', [

            'posts' =>Post::without('categorie')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Categorie::all();
        return view('admin.form', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        //
        $validated = $request->validated();

       if($request->hasFile('Image')) {
           $validated['Image'] = $request->file('Image')->store('images');
       }

       $validated['extrait'] = Str::Limit($validated['Contenu'], 100);

       $validated['user_id'] = auth()->id();



       $post = Post::create($validated);

       return redirect()->route('show', ['post' => $post])->with('success', 'Votre article a bien été publié');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
