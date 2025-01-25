@extends('layout')

@section('title', 'home')

@section('content')

    {{-- slide-bar --}}
<main>

            <div class="hero-section vh-100 d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-8 col-md-10 col-12">
                            <h1 class="hero-title">Bienvenue sur chez nous !</h1>
                            <p class="hero-text">Restez  brancher sur le nouvelle de votre institut</p>
                            <a href="#about" class="btn custom-btn mt-4">Voir les Actus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    {{-- end slide-bar --}}

    {{-- content home --}}

    <section class="about section-padding" id="about">
        <div class="container">
            <div class="row">

                <div class="col-12 text-center">
                    <h2 class="mb-5"><span>Nos</span> Actualités</h2>
                </div>

                <section class="container">

                      <!-- Example post (repeat for each post) -->

                      <x-post :posts="$posts"/>
            </section>
             {{ $posts->links('pagination::bootstrap-5') }}
</main>



    @endsection


