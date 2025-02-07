<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="{{ route('home')}}">
            <img src="{{ asset('images/isipa_png.png')}}" alt="Logo" width="40" height="60" class="d-inline-block align-text-top-center">
            {{ config('app.name')}}
        </a>


        <div class="d-lg-none">
            @auth
            <div class="dropdown d-block">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                  <img src="{{ asset('images/USERS.jpg')}}" alt="Profile" class="rounded-circle" height="30" width="30">
                  <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }} </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <span class="dropdown-header">{{ Auth::user()->name }}</span>
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('profil')}}">
                        <i class='bx bx-user' ></i>
                      Mon profil
                    </a>
                  </li>
                  @if (Auth::user()->isAdmin())
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.post.index')}}">
                        <i class='bx bx-user' ></i>
                 administration
                    </a>
                  </li>

                  @endif
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('logout')}}" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class='bx bx-log-out' ></i>
                        Se deconnecter
                    </a>
                  </li>
                </ul>
            </div>
                @else
                <div class="custom-icon">
                    <a href="{{ route('login')}}" ><i class='bx bx-user' ></i></a>
                </div>
            @endauth
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link @if(Request::route()->getname() == 'home') active @endif" href="{{ route('home')}}">Actualités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Evenements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Request::route()->getname() == 'contact') active @endif" href="{{ route('contact')}}">Contact</a>
                </li>
            </ul>
            <div class="d-none d-lg-block">
                @auth
            <div class="dropdown d-block">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                  <img src="{{ asset('images/USERS.jpg')}}" alt="Profile" class="rounded-circle" height="30" width="30">
                  <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }} </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('profil')}}">
                        <i class='bx bx-user' ></i>
                   Mon profil
                    </a>
                  </li>
                  @if (Auth::user()->isAdmin())
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.post.index')}}" target="_blank">
                        <i class='bx bx-user' ></i>
                 administration
                    </a>
                  </li>

                  @endif
                  <li>
                    <a class="dropdown-item d-flex align-items-center" href="{{ route('logout')}}" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class='bx bx-log-out' ></i>
                        Se deconnecter
                    </a>
                  </li>
                </ul>
            </div>
                @else
                <div class="custom-icon">
                    <a href="{{ route('login')}}" ><i class='bx bx-user' ></i></a>
                </div>
            @endauth
            </div>
        </div>


    </div>
</nav>

<x-modal/>
