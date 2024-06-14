@extends('layouts.app')

    <!-- Scripts -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-utillities.css') }}">
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Pelatihan JWD | KOMINFO </title>

@section('content')
<div class="container">
    <h1 class="mb-2">Daftar Pelatihan JWD</h1>

    @role('mahasiswa')
    <div class="mt-5 mb-2">
        <a href="{{ route('pelatihan.create')}}" class="btn btn-success">Tambah</a>
    </div>
    @endrole

    <table class="table">
        <thead>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>Nama Universitas</th>
                <th>Prodi Mahasiswa</th>
                <th>No. HP</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pelatihans as $row)
            <tr>
                <td>{{ $row->user->name }}</td>
                <td>{{ $row->universitas_mahasiswa }}</td>
                <td>{{ $row->prodi_mahasiswa }}</td>
                <td>{{ $row->nohp_mahasiswa }}</td>
                <td>{{ $row->email_mahasiswa }}</td>
                <td>{{ ucfirst($row->status) }}</td>
                <td>
                    <a href="{{ route('pelatihan.show', $row->id) }}" class="btn btn-info">Detail</a>
                    @if(Auth::user()->hasRole('admin'))
                        <a href="{{ route('pelatihan.edit', $row->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('pelatihan.destroy', $row->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
