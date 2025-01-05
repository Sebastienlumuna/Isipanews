
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ config('app.name')}} | @yield('title') </title>

    {{-- Boostrap css --}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-icons.css')}}" rel="stylesheet">
    {{-- style icon --}}

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- my style css --}}

    <link rel="stylesheet" href="{{ asset('css/slick.css')}}"/>

    <link href="{{ asset('css/isipanews.css')}}" rel="stylesheet">

    {{-- font style --}}

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">





    <link rel="shortcut icon" href="{{ asset('images/komoriko-transformed (1).ico')}}" type="image/x-icon">

</head>
  <body>
    
    @if(session('success'))
    <div class="alert alert-success text-center mx-5" role="alert">
        {{ session('success') }}
      </div>
    @endif
        @include('composent.navbar')


    @yield('content')



   <x-footer></x-footer>
    {{-- Bosstrap js --}}

        @include('composent.scripts')
</body>
</html>
