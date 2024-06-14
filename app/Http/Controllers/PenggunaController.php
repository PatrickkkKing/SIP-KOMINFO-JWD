<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pelatihan;
use App\Models\User;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    
    public function  index()
    {
        $dataUser = User ::all();
        $dataUniv = Pelatihan::all();
        return view('dataPengguna.index', compact('dataUser', 'dataUniv'));
    }

}
