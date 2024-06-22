@extends('welcome')
        <!-- Scripts -->
        {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-utillities.css') }}">
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

        {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script> --}}
        {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
        <!-- Font Awesome -->
        {{-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> --}}
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> --}}
    
        <title>Pelatihan Digital Talent Scholarship| KOMINFO </title>

        {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}
    <style>
        .card-custom {
            border: 1px solid #e1e4e8;
            border-radius: 8px;
            margin-top: 20px;
            padding: 20px;
        }
        .badge-custom {
            background-color: #0030ce;
            color: #1c0e6e;
            padding: 5px 10px;
            border-radius: 12px;
            font-size: 12px;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 20px;
            padding: 10px 20px;
        }
        .card-body-custom {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card-title {
            font-size: 1.2rem;
        }
        .card-text {
            font-size: 0.9rem;
        }
    </style>

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-custom">
                <div class="card-body card-body-custom">
                    <span class="badge badge-custom mb-2">Buka</span>
                    {{-- <h5 class="card-title">Batch 4</h5> --}}
                    <h6 class="card-subtitle mb-2 text-muted">Junior Web Developer</h6>
                    <p class="card-text">
                        <strong>Vocational School Graduate Academy</strong><br>
                        <i class="far fa-calendar-alt"></i> 10 June 2024 - 14 June 2024<br>
                        <i class="fas fa-map-marker-alt"></i> Sumatera Utara<br>
                        <i class="fas fa-school"></i> 
                        BBPSDMP Medan
                    </p>
                    <a href="{{ route('register') }}" class="btn btn-primary">Daftar Sekarang</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-custom">
                <div class="card-body card-body-custom">
                    <span class="badge badge-custom mb-2">Buka</span>
                    {{-- <h5 class="card-title">Batch 4</h5> --}}
                    <h6 class="card-subtitle mb-2 text-muted">Junior Graphic Design</h6>
                    <p class="card-text">
                        <strong>Vocational School Graduate Academy</strong><br>
                        <i class="far fa-calendar-alt"></i> 10 June 2024 - 14 June 2024<br>
                        <i class="fas fa-map-marker-alt"></i> Sumatera Utara<br>
                        <i class="fas fa-school"></i> 
                        BBPSDMP Medan
                    </p>
                    <a href="{{ route('register') }}"class="btn btn-primary">Daftar Sekarang</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-custom">
                <div class="card-body card-body-custom">
                    <span class="badge badge-custom mb-2">Buka</span>
                    {{-- <h5 class="card-title">Batch 4</h5> --}}
                    <h6 class="card-subtitle mb-2 text-muted">Operator Komputer Madya</h6>
                    <p class="card-text">
                        <strong>Vocational School Graduate Academy</strong><br>
                        <i class="far fa-calendar-alt"></i> 10 June 2024 - 14 June 2024<br>
                        <i class="fas fa-map-marker-alt"></i> Sumatera Utara<br>
                        <i class="fas fa-school"></i> 
                        BBPSDMP Medan
                    </p>
                    <a href="{{ route('register') }}" class="btn btn-primary">Daftar Sekarang</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-custom">
                <div class="card-body card-body-custom">
                    <span class="badge badge-custom mb-2">Buka</span>
                    {{-- <h5 class="card-title">Batch 4</h5> --}}
                    <h6 class="card-subtitle mb-2 text-muted">Junior Laravel Developer</h6>
                    <p class="card-text">
                        <strong>Vocational School Graduate Academy</strong><br>
                        <i class="far fa-calendar-alt"></i> 10 June 2024 - 14 June 2024<br>
                        <i class="fas fa-map-marker-alt"></i> Sumatera Utara<br>
                        <i class="fas fa-school"></i> 
                        BBPSDMP Medan
                    </p>
                    <a href="{{ route('register') }}" class="btn btn-primary">Daftar Sekarang</a>
                </div>
            </div>
        </div>
        
    </div>
</div>
    
@endsection