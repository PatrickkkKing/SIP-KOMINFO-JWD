@extends('layouts.app')
    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-utillities.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Home | KOMINFO </title>
    <link rel="icon" href="{{ asset('img/logo-kominfo.png') }}" type="image/x-icon">


@section('content')
    <div class="container">
            @if (empty(Auth::user()->name))
                <a href="{{url('layouts/error')}}">
                <div style="justify-content: center; display:flex;">
                    <div class="alert alert-warning">
                        Silakan untuk login ulang kembali... Terima kasih.
                        <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </div>
                </div>
            @else
            <h3 class="p-2 text-primary-emphasis">
                Selamat Datang, {{ ucwords(Auth::user()->name) }}
            </h3>
            @endif
    </div>

    <div style="justify-content:center; background-color:#FFFFFF; margin-right:10px">
        <div class="d-flex">
            @role('admin')
            <div class="row m-1">
                <div class="col-md-12">
                    <div class="card" style="width: 250px">
                        <div class="card-body d-flex justify-content-between align-items-center position-relative" style="background-color:#03aec6">    
                            <h3 class="text-center" id="dataCount">{{ $totalPengguna }}</h3>
                            {{-- <h3 class="text-center" id="dataCount">1</h3> --}}
                            <img src="{{ asset('img/profile.png') }}" alt="pengguna" class="ml-auto" style="height: 50px; background-color: rgba(3, 174, 198, 0.5);">
                        </div>
                        <div class="card-header" style="background-color:#018799">
                            <a href="{{ url('home/') }}" class="text-decoration-none text-dark justify-content-between align-items-center d-flex">
                                <h5 class="text-start fs-6">Data Pengguna</h5>
                                <img src="{{ asset('img/panah.png') }}" alt="Panah">
                            </a>
                            {{-- <img src="{{ asset('img/panah.png') }}" alt="Panah"> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-1">
                <div class="col-md-12">
                    <div class="card" style="width: 250px">
                        <div class="card-body d-flex justify-content-between align-items-center position-relative" style="background-color:#03aec6">    
                            <h3 class="text-center" id="dataCount">{{ $totalPengajuan }}</h3>
                            {{-- <h3 class="text-center" id="dataCount">1</h3> --}}
                            <img src="{{ asset('img/magang.png') }}" alt="magang" class="ml-auto" style="height: 50px; background-color: rgba(3, 174, 198, 0.5);">
                        </div>
                        <div class="card-header" style="background-color:#018799">
                            <a href="{{ url('internships/') }}" class="text-decoration-none text-dark justify-content-between align-items-center d-flex">
                                <h5 class="text-start fs-6">Data Pelatihan JWD</h5>
                                <img src="{{ asset('img/panah.png') }}" alt="Panah">
                            </a>
                            {{-- <img src="{{ asset('img/panah.png') }}" alt="Panah"> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endrole

        </div>
    </div>
@endsection