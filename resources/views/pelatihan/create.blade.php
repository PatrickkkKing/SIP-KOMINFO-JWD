@extends('layouts.app')

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-utillities.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Form Pendaftaran Pelatihan JWD | KOMINFO </title>

@section('content')
<div class="container">
    <h1 class="mb-4">Form Pendaftaran P-JWD</h1>
    <form action="{{ route('pelatihan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <h6 for="universitas_mahasiswa">Nama Universitas</h6>
            <input type="text" name="universitas_mahasiswa" id="universitas_mahasiswa" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <h6 for="prodi_mahasiswa">Prodi Mahasiswa</h6>
            <input type="text" name="prodi_mahasiswa" id="prodi_mahasiswa" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <h6 for="nohp_mahasiswa">No HP Aktif</h6>
            <input type="text" name="nohp_mahasiswa" id="nohp_mahasiswa" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <h6 for="email_mahasiswa">Email</h6>
            <input type="email" name="email_mahasiswa" id="email_mahasiswa" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <h6 for="berkas_mahasiswa">Transkip Nilai Mahasiswa</h6>
            <input type="file" name="berkas_mahasiswa" id="berkas_mahasiswa" class="form-control" accept="image/*"  required>
        </div>
        <div class="form-group mb-3">
            <h6 for="sertifikat_mahasiswa">Sertifikat Keahlian</h6>
            <input type="file" name="sertifikat_mahasiswa" id="sertifikat_mahasiswa" class="form-control" accept="image/*"  required>
        </div>
        <button type="submit" class="btn btn-primary">Daftar Pelatihan</button>
    </form>
</div>
@endsection
