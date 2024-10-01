@extends('auth.authlayout')

@section('title', 'Login')

@section('content')

<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="row justify-content-center w-100">
        <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="text-center mb-5">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/img_logo.jpeg') }}" alt="BootstrapBrain Logo" width="50" height="57">
                </a>
                <h4 class="text-center">Sign in</h4>
            </div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                {{-- Composant input --}}
                <x-input name="email" label="Email" type="email" />
                <x-input name="password" label="Mot de passe" type="password" />

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember" value="remember-me">
                        <label class="form-check-label" for="remember">Se souvenir de moi</label>
                    </div>
                    <a href="{{ route('register') }}" class="text-decoration-none">S'inscrire maintenant</a>
                </div>

                <button class="btn custom-btn w-100" type="submit">Se connecter</button>
            </form>
            <p class="text-center mt-3">Copyright © 2024 ISIP'A KOMORIKO</p>
        </div>
    </div>
</div>

@endsection
