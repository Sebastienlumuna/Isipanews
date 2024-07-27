<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function registerform(){
        return view('auth.register');
    }

 public function register(Request $request){
     $validated = $request->validate([
       'name' =>'required', 'string', 'min:10',
        'email' => 'required', 'email', 'unique',
        'password' => 'required', 'min:8', 'confirmed',
        ]);

        $validated['password'] = Hash::make($validated['password']);
        dd($validated);

 }
}
