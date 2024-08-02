 @extends('client.clientlayout')

 @section('title', 'Accueil')

 @section('content')

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
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-3">
                      <!-- Example post (repeat for each post) -->
                      <div class="col mb-3">
                        <div class="card h-100">
                            <img src="{{ asset('images/oip_1.jpeg')}}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title fw-bold"><a href="post-page.html">ISIPA Komoriko dans le sebene de l'éducation</a></h5>
                            <p class="card-text"><span class="badge bg-primary">Education</span> <span class="text-muted">Publié le 18-08-2024</span></p>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque animi libero eius aliquam deserunt suscipit debitis dolorum magnam fugit. Natus et earum ratione... <a href="post-page.html">Lire la suite..</a></p>
                            <div class="d-flex align-items-center justify-content-between mt-3">
                              <div class="d-flex align-items-center">
                                <img src="{{ asset('images/ellipse_1.jpeg')}}" alt="User" class="rounded-circle me-2" width="30" height="30">
                                <span>Sebastien lumuna</span>
                              </div>
                              <div>
                                <span><a href=""><i class='bx bx-comment-detail bx-tada' ></i></a></span> <!-- Replace with actual comment count -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-3">
                        <div class="card h-100">
                            <img src="{{ asset('images/oip_1.jpeg')}}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title fw-bold"><a href="#">ISIPA Komoriko dans le sebene de l'éducation</a></h5>
                            <p class="card-text"><span class="badge bg-primary">Education</span> <span class="text-muted">Publié le 18-08-2024</span></p>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque animi libero eius aliquam deserunt suscipit debitis dolorum magnam fugit. Natus et earum ratione... <a href="#">Lire la suite..</a></p>
                            <div class="d-flex align-items-center justify-content-between mt-3">
                              <div class="d-flex align-items-center">
                                <img src="{{ asset('images/ellipse_1.jpeg')}}" alt="User" class="rounded-circle me-2" width="30" height="30">
                                <span>Sebastien lumuna</span>
                              </div>
                              <div>
                                <span><a href=""><i class='bx bx-comment-detail bx-tada' ></i></a></span> <!-- Replace with actual comment count -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col mb-3">
                        <div class="card h-100">
                            <img src="{{ asset('images/oip_1.jpeg')}}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title fw-bold"><a href="#">ISIPA Komoriko dans le sebene de l'éducation</a></h5>
                            <p class="card-text"><span class="badge bg-primary">Education</span> <span class="text-muted">Publié le 18-08-2024</span></p>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque animi libero eius aliquam deserunt suscipit debitis dolorum magnam fugit. Natus et earum ratione... <a href="#">Lire la suite..</a></p>
                            <div class="d-flex align-items-center justify-content-between mt-3">
                              <div class="d-flex align-items-center">
                                <img src="{{ asset('images/ellipse_1.jpeg')}}" alt="User" class="rounded-circle me-2" width="30" height="30">
                                <span>Sebastien lumuna</span>
                              </div>
                              <div>
                                <span><a href=""><i class='bx bx-comment-detail bx-tada' ></i></a></span>
                              </div>
                            </div>
                          </div>
                        </div>
            </section>
</main>


 @endsection
