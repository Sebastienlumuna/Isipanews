@extends('layout')

@section('title', 'home')

@section('content')

    {{-- slide-bar --}}
<main>
    <section class="slick-slideshow">
        <div class="slick-custom">
            <img src="{{ asset('images/slideshow/header.jpg')}}" class="img-fluid" alt="">

            <div class="slick-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-10">
                            <h1 class="slick-title">Soyez toujours informez</h1>

                            <p class="lead text-white mt-lg-3 mb-lg-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo sebene toujours.</p>

                            <a href="#" class="btn custom-btn">Nous suivre</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slick-custom">
            <img src="{{ asset ('images/slideshow/ellipse_1.jpg')}}" class="img-fluid" alt="">

            <div class="slick-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-10">
                            <h1 class="slick-title">Monent Event</h1>

                            <p class="lead text-white mt-lg-3 mb-lg-5">Lorem ipsum dolorus ration cody-lannom-G95AReIh_Ko-unsplash kukzueuzieuziuezieuziuzi</p>

                            <a href="#" class="btn custom-btn">Voir les Event</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slick-custom">
            <img src="{{ asset('images/slideshow/oip_1.jpg')}}" class="img-fluid" alt="">

            <div class="slick-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-10">
                            <h1 class="slick-title">Toujours premier en RDC</h1>

                            <p class="lead text-white mt-lg-3 mb-lg-5">Tooplate is one of the best HTML CSS template websites for everyone.</p>

                            <a href="{{ route('contact')}}" class="btn custom-btn">Nous suivre</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- end slide-bar --}}

    {{-- content home --}}

    <section class="about section-padding">
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


