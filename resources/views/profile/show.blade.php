@extends('layouts.app')

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-utillities.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Profile | KOMINFO </title>

@section('content')
<div class="container">
    <h1>Profil Akun</h1>
    
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="profile_photo">Foto Profil</label>
            <input type="file" name="profile_photo" id="profile_photo" class="form-control mb-1">
            @if ($user->profile_photo)
                <img src="{{ asset('storage/' . $user->profile_photo) }}" alt="Profile Photo" width="100">
            @else
                <img src="{{ asset('img/admin.png') }}" alt="Default Profile Photo" width="100">
            @endif
        </div>
        <div class="form-group mt-4">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>
        <div class="form-group mt-4">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}" required disabled>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Update Profil</button>
    </form>
</div>
@endsection
