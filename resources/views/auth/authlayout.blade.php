
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ config('app.name')}} | @yield('title') </title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    {{-- Boostrap css --}}

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-7/assets/css/login-7.css">


    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap-icons.css')}}" rel="stylesheet">
    {{-- style icon --}}

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- my style css --}}



    <link href="{{ asset('css/isipanews.css')}}" rel="stylesheet">


    {{-- font style --}}

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">





    <link rel="shortcut icon" href="{{ asset('images/komoriko-transformed (1).ico')}}" type="image/x-icon">

</head>
  <body>




    @yield('content')




    {{-- Bosstrap js --}}

        @include('composent.scripts')
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
