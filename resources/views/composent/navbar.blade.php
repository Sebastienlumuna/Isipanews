<nav class="navbar navbar-expand-lg">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="{{ route('home')}}">
            <img src="{{ asset('images/img_logo.jpeg')}}" alt="Logo" width="40" height="60" class="d-inline-block align-text-top-center">
            {{ config('app.name')}}
        </a>

        <div class="d-lg-none">
            <a href="{{ route('login')}}" ><i class='bx bx-user bx-tada' ></i></a>

        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link @if(Request::route()->getname() == 'home') active
                    @endif" href="{{ route('home')}}">Actualités</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="evenement.html">Evenements</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @if(Request::route()->getname() == 'campus') active
                        @endif" href="{{ route('campus')}}">Campus</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link @if (Request::route()->getname() == 'contact') active
                    @endif" href="{{ route('contact')}}">Contact</a>
                </li>
            </ul>

            <div class="d-none d-lg-block">
                <a href="{{ route('login')}}" ><i class='bx bx-user bx-tada' ></i></a>

            </div>
        </div>
    </div>
</nav>
