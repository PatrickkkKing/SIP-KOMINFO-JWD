@extends('layouts.app')

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-utillities.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Data Pengguna Pelatihan | KOMINFO </title>

    <style>
        .profile-photo {
            border-radius: 50%; /* Ini yang membuat bentuknya menjadi lingkaran */
            object-fit: cover; /* Menjaga proporsi gambar */
        }
    </style>

@section('content')
<div class="container">
    <h1 class="mb-5">Data Pengguna Pelatihan JWD</h1>

    {{-- @role('mahasiswa')
    <div class="mt-5 mb-2">
        <a href="{{ route('pelatihan.create')}}" class="btn btn-success">Tambah</a>
    </div>
    @endrole --}}

    <table class="table">
        <thead>
            <tr>
                <th>Foto Profile</th>
                <th>Nama</th>
                <th>Email</th>
                {{-- <th>Nama Universitas</th> --}}
                {{-- <th>Aksi</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach($dataUser as $row)
            <tr>
                <td>
                    @if ($row && $row->profile_photo)
                    <img class="profile-photo" src="{{ asset('storage/' . $row->profile_photo) }}" alt="Profile Photo" width="20">
                    @else
                        <img class="profile-photo" src="{{ asset('img/admin.png') }}" alt="Default Profile Photo" width="20">
                    @endif
                </td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email}}</td>
                {{-- <td>{{ $row->pelatihan->universitas_mahasiswa }}</td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection
