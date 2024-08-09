@extends('auth.authlayout')

@section('title', 'Inscription')


@section('content')

    <section class="bg-light p-3 p-md-4 p-xl-5 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="card border border-light-subtle rounded-4">
                    <div class="card-body p-3 p-md-4 p-xl-5">
                <div class="row">
                    <div class="col-12">
                    <div class="mb-5">
                        <div class="text-center mb-4">
                        <a href="{{ route('home')}}">
                            <img src="{{ asset('images/img_logo.jpeg')}}" alt="BootstrapBrain Logo" width="50" height="57">
                            {{ config('app.name')}}
                        </a>
                        </div>
                        <h4 class="text-center">Welcome back you've been missed!</h4>
                    </div>
                    </div>
                </div>
                <form action="{{ route('register')}}" method="POST">

                    @csrf
                    {{--  composent input --}}

                    <x-input name="name" label="Nom complet"  />

                    <x-input name="email" label="Email" type="email" />

                    <x-input name="password" label="Mot de passe " type="password" />

                    <x-input name="password_confirmation" label=" Confirmation du mot de passe " type="password" />

                    <div class="col-12 mt-3">
                        <div class="d-grid">
                        <button class="btn custom-btn w-100" type="submit">S'inscrire</button>
                        </div>
                    </div>

                </form>
                <div class="row mx-2">
                    <div class="col-12">
                    <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                        <a href="{{ route('login')}}" class="link-secondary text-decoration-none">Se connecter</a>
                    </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
@endsection
