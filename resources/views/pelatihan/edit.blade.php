@extends('layouts.app')

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-utillities.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Edit Data Pendaftar | DISKOMINFO </title>

@section('content')
<div class="container">
    <h1>Edit Data Pendaftar JWD</h1>

    <form method="POST" action="{{ route('pelatihan.update', $pelatihan->id) }}">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="proses" {{ $pelatihan->status == 'proses' ? 'selected' : '' }}>Proses</option>
                <option value="ditolak" {{ $pelatihan->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                <option value="diterima" {{ $pelatihan->status == 'diterima' ? 'selected' : '' }}>Diterima</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
@endsection
