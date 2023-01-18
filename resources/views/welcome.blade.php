<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Padayon') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
</head>
<body>
    <nav class="navbar d-flex justify-content-around px-5">
        <div class="container-fluid g-0">
            <div class="left col-8">
                <a class="navbar-brand ml-2" href="{{ route('welcome')}}">Padayon</a>
            </div>
            <div class="right col-4">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row justify-content-around">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('welcome')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main container-fluid g-0">
        <div class="content-wrapper col-6">
            <div class="content">
                <div class="header">
                    <span>Improve our customer's lives by providing effective solutions</span>
                </div>
                <div class="title">
                    <span>Tara dito! May trabaho ka. Makakatulong ka. May tutulong sayo.</span>
                </div>
                <div class="controls">
                    <a class="button" href="{{ route('home')}}"><span>Log-in</span></a>
                    <a class="button" href="{{ route('register')}}"><span>Register</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="footer-copyright text-center py-2">        
        <span>Copyright © 2022 All Rights Reserved by Team Padayon.</span>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
    
</html>