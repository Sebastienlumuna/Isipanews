<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Str;
use App\Models\Categorie;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
       return $this->form();
    }



     /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
        return $this->form($post);
    }

    // centralisé l'utilisation du fomulaire
    protected function form(Post $post = new  Post): View
    {
        $categories = Categorie::all();
        return view('admin.form', [
            'post' => $post,
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request): RedirectResponse
    {
        // utilise save
        $post = new Post();
      return  $this->save($post, $request);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        // utilise save
        return  $this->save($post, $request);
    }


    // centralisationd de la creation et de la modification

    protected function save(Post $post, PostRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if($request->hasFile('Image')){
            // supprimer l'ancienne image
            if($post->exists &&  $post->Images){
                Storage::delete($post->Images);
            }
            $validated['Image'] = $request->file('Image')->store('images');
        }

        $validated['extrait'] = Str::Limit($validated['Contenu'], 100);

        $validated['user_id'] = auth()->id();

        $post->fill($validated);
        $post->save();

        return redirect()->route('show', ['post'=> $post])
        ->with('success',  ($post->wasRecentlyCreated ? 'article publier avec succès' : 'article modifier avec succès' ));

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        // supprimer l'ancienne image
            Storage::delete($post->Image);
            $post->delete();

            return redirect()->route('admin.post.index')->with('success', 'article supprimer avec succès');


    }
}
