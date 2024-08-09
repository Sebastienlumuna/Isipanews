@extends('client.clientlayout')

@section('title', 'Accueil')

@section('content')


<section class=" my-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home')}} ">Home </a></li>
              <li class="breadcrumb-item active" aria-current="page">Profil</li>
            </ol>
          </nav>
    </div>
</section>

        @if (session('status'))

                <div class="alert alert-success m-3 p-3" role="alert">
                {{ session('status') }}
                </div>
        @endif

        <section class="section profile my-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card  m-3 p-3">
                            <!-- Bordered Tabs -->

                                <!-- Profile Edit Form -->
                                <form method="POST" action="{{ route('update')}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-header text-center">
                                        <h5>modifier le profil</h5>
                                    </div>

                                  <div class="row mb-3">
                                    <label for="Nom complet" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                    <div class="col-md-8 col-lg-9">
                                      <input name="name" type="text" class="form-control" id="fullName" value="{{ Auth::user()->name}}">
                                    </div>
                                  </div>

                                  <div class="row mb-3">
                                    <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                      <input name="email" type="email" class="form-control" id="Email" value="{{ Auth::user()->email }}">
                                    </div>
                                  </div>


                                  <div class="text-center">
                                    <button type="submit" class="btn btn-primary" id="liveToastBtn">Save Changes</button>
                                  </div>

                                </form> <!-- End Profile Edit Form -->


                                <!-- Change Password Form -->

                        <!-- End Bordered Tabs -->

                        </div>
                        <div class="card  m-3 p-3">
                            <form action="{{ route('update')}}" method="POST">
                                <div class="card-header text-center">
                                    <h5>modifier le mot de passe</h5>
                                </div>

                                @csrf


                              <div class="row">
                                <x-input name="current_password" label="Mot de passe actuelle" type="password" />

                                <x-input name="password" label="Nouveau mot de passe" type="password" />

                                <x-input name="password_confirmation" label="Confirmation" type="password" />


                              <div class="text-center my-3">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                              </div>
                            </div>
                            </form><!-- End Change Password Form -->


                        </div>

                      </div>
                    </div>
        </section>

@endsection
