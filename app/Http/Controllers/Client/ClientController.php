<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Closure;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


  /*  public function index(){

        $posts = Post::with('user', 'categorie')->orderBy('created_at', 'desc')->paginate(9);
        $user = Auth::user();
        $name = $user->name;
        return view('client.index', compact('name', 'posts'));
    }

    */
    public function profilview(){

        return view('client.profil');
    }
    public function index(){

        return view('client.index');
    }

    public function updatepassword(Request $request): RedirectResponse
    {
        $user = Auth::user();

        $validated = $request->validate([
            'current_password' => [
                'required',
                'string',
                function (string $attribute, mixed $value, Closure $fail) use ($user) {
                    if (! Hash::check($value, $user->password)) {
                        $fail("Le :attribute est erroné.");
                    }
                },
            ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user->update([
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('profil')->withStatus('Mot de passe modifié');
    }

    public function updateprofil(Request $request): RedirectResponse
   {
        $user = Auth::user();
        $validator = validator::make($request->all(),[
            'name' => 'nullable|string|between:5,255',
            'email' => 'nullable|email|unique:users,email,'. $user->id,


        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $namechange = $request->input('name') !==$user->name;
        $emailchange = $request->input('email') !==$user->email;

        if($namechange || $emailchange )
        {
            $user->name = $request->input('name', $user->name);
            $user->email = $request->input('email', $user->email);
            $user->save();

            return redirect()->back()->with('status', 'Profil mis à jour avec succès !');

        }

        return redirect()->back()->with('status', 'Aucun changement détecté.');
    }
}
