<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>


    {{-- import css and js --}}
    @vite(['resources/css/app.css','resources/js/app.js'])

    {{-- css materialize --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    {{-- css materialize icons--}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/672ebfa361.js" crossorigin="anonymous"></script>

</head>
<body>

    {{-- navbar --}}
    @include('partials.navbar')

    {{-- slider --}}
    @include('partials.banner-slide')

    {{-- conteúdo principal --}}
    @yield('content')

    {{-- footer --}}
    @include('partials.footer')

    {{-- import JQuery--}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    {{-- import javascript materialize --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</body>
</html>
