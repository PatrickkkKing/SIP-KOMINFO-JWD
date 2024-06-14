@extends('layouts.app')

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-utillities.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Detail Pendaftar Pelatihan JWD | KOMINFO </title>

@section('content')
<div class="container">
    <h1 class="mb-4">Detail Pendaftar JWD</h1>
    <div class="card">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6"><strong>Nama Mahasiswa:</strong> {{ $pelatihan->user->name }}</div>
                <div class="col-md-6"><strong>Universitas Mahasiswa:</strong> {{ $pelatihan->universitas_mahasisw }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6"><strong>Prodi Mahasiswa:</strong> {{ $pelatihan->prodi_mahasiswa }}</div>
                <div class="col-md-6"><strong>No HP Mahasiswa:</strong> {{ $pelatihan->nohp_mahasiswa }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6"><strong>Email Mahasiswa:</strong> {{ $pelatihan->email_mahasiswa }}</div>
                <div class="col-md-6"><strong>Status:</strong> {{ ucfirst($pelatihan->status) }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6"><strong>Transkip Mahasiswa:</strong></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if ($pelatihan->berkas_mahasiswa)
                        <img src="{{ asset('storage/' . $pelatihan->berkas_mahasiswa) }}" alt="Transkip Nilai" class="img-fluid">
                    @else
                        <p>Tidak ada transkip tersedia.</p>
                    @endif
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 mt-5"><strong>Sertifikat mahasiswa:</strong></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @if ($pelatihan->sertifikat_mahasiswa)
                        <img src="{{ asset('storage/' . $pelatihan->sertifikat_mahasiswa) }}" alt="Sertifikat Keahlian" class="img-fluid">
                    @else
                        <p>Tidak ada sertifikat tersedia.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection