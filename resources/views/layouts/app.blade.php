{{-- @extends('layouts.sidebar') --}}

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('img/logo-kominfo.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-utillities.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    {{-- <link rel="icon" href="{{ asset('img/logo-kominfo.png') }}" type="image/x-icon"> --}}

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        .navbar-custom {
            height: 10%;
        }

        .content-wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
        footer {
            background-color: #f8f9fa;
            border-top: 1px solid #e9ecef;
            text-align: left;
            padding: 0.5 rem;
            margin-left: 15%
        }
    </style>

</head>
<body>

    <!-- Sidebar-->
    <div class="aside1">
        <header>
            <h5 style="color: whitesmoke; margin-bottom: 10%;">P-JWD KOMINFO</h5>

            @if (Auth::check() && Auth::user()->profile_photo)
                <img src="{{ asset('storage/' . Auth::user()->profile_photo) }}" class="profile-photo">
            @else
                <img src="{{ asset('img/admin.png') }}" class="profile-photo">
            @endif
            
            @if (empty(Auth::user()->name))
                <a href="{{ url('layouts/error') }}">
                    <div style="justify-content: center; display:flex;">
                        <div class="alert alert-warning">
                            Silakan untuk login ulang kembali... Terima kasih.
                            <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </div>
                    </div>
                </a>
            @else
                <div class="user">{{ ucwords(Auth::user()->name) }}</div>
            @endif
        </header>
                  
        <aside>
            <ul>
                <li>
                    <a href="{{ url('home/') }}">
                        <img class="icon" src="{{ asset('img/home.png') }}" alt=""> Home
                    </a>
                </li>
                @role('admin')
                <li>
                    <a href="{{url('dataPengguna/')}}">
                        <img class="icon" src="{{ asset('img/admin.png') }}" alt=""> Data Pengguna
                    </a>
                </li>
                @endrole
                <li>
                    <a href="{{url('pelatihan/')}}">
                        <img class="icon" src="{{ asset('img/magang.png') }}" alt=""> Pelatihan JWD
                    </a>
                </li>
                <li>
                    <a href="{{url('profile/')}}">
                        <img class="icon" src="{{ asset('img/profile.png') }}" alt=""> Profile
                    </a>
                </li>
                <li style="margin-top: 6%">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <img class="icon" src="{{ asset('img/logout.png') }}" alt=""> Logout
                    </a>
                </li>
            </ul>
        </aside>
    </div>

    <!-- Navbar-->
    <div class="content-wrapper" id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-custom" style="margin-left: 15%; background-color:#0268dd; height:15%">
            <div class="container">
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @if(Auth::user()->profile_photo)
                                        <img src="{{ asset('storage/' . Auth::user()->profile_photo) }}" alt="Profile Photo" width="30" height="30" class="rounded-circle">
                                    @else
                                        <img src="{{ asset('img/admin.png') }}" alt="Default Profile Photo" width="30" height="30" class="rounded-circle">
                                    @endif
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 content">
            @yield('content')
        </main>

        <footer class="bg-light border-top">
            <div class="p-3">
                2024 © Sistem Informasi Pendaftaran Pelatihan KOMINFO
            </div>
        </footer>
        
    </div>
</body>
</html>
