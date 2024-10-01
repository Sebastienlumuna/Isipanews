@extends('auth.authlayout')

@section('title', 'Inscription')


@section('content')

<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="row justify-content-center w-100">
        <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="text-center mb-5">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/img_logo.jpeg') }}" alt="BootstrapBrain Logo" width="50" height="57">
                </a>
                <h4 class="text-center">Sign up</h4>
            </div>
                <form action="{{ route('register')}}" method="POST">

                    @csrf
                    {{--  composent input --}}

                    <x-input name="name" label="Nom complet"  />

                    <x-input name="email" label="Email" type="email" />

                    <x-input name="password" label="Mot de passe " type="password" />

                    <x-input name="password_confirmation" label=" Confirmation du mot de passe " type="password" />

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="{{ route('login') }}" class="text-decoration-none">se connecter </a>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="d-grid">
                        <button class="btn custom-btn w-100" type="submit">S'inscrire</button>
                        </div>
                    </div>

                </form>
                <p class="text-center mt-3">Copyright © 2024 ISIP'A KOMORIKO</p>
        </div>
    </div>
</div>
    </section>
@endsection
