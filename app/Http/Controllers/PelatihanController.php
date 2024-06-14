<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelatihan;
use Illuminate\Support\Facades\Auth;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            $pelatihans = Pelatihan ::all();
        } else {
            $pelatihans = Pelatihan::where('user_id', Auth::id())->get();
        }

        return view('pelatihan.index', compact('pelatihans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelatihan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'universitas_mahasiswa' => 'required|string|max:255',
            'prodi_mahasiswa' => 'required|string|max:255',
            'nohp_mahasiswa' => 'required|string|max:15',
            'email_mahasiswa' => 'required|email|max:255',
            'berkas_mahasiswa' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sertifikat_mahasiswa' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('berkas_mahasiswa')->store('berkas_mahasiswanya', 'public');
        $path2 = $request->file('sertifikat_mahasiswa')->store('sertifikat_mahasiswanya', 'public');

        Pelatihan::create([
            'user_id' => Auth::id(),
            'universitas_mahasiswa' => $request->universitas_mahasiswa,
            'prodi_mahasiswa' => $request->prodi_mahasiswa,
            'nohp_mahasiswa' => $request->nohp_mahasiswa,
            'email_mahasiswa' => $request->email_mahasiswa,
            'berkas_mahasiswa' => $path,
            'sertifikat_mahasiswa' => $path2,
            'status' => 'proses',
        ]);

        return redirect()->route('pelatihan.index')->with('success', 'Berhasil mendaftar pelatihan JWD');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelatihan = Pelatihan::findOrFail($id);

        if (Auth::user()->hasRole('admin') || $pelatihan->user_id == Auth::id()) {
            return view('pelatihan.show', compact('pelatihan'));
        } else {
            return redirect()->route('pelatihan.index')->with('error', 'Unauthorized access.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelatihan = Pelatihan::findOrFail($id);
        return view('pelatihan.edit', compact('pelatihan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status' => 'required|string|in:proses,ditolak,diterima',
        ]);

        $pelatihan = Pelatihan::findOrFail($id);
        $pelatihan->update($request->only('status'));

        return redirect()->route('pelatihan.index')->with('success', 'Status pendaftar berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row = Pelatihan::findOrFail($id);
        $row->delete();

        return redirect('pelatihan');
    }
}
