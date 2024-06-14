<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function  index()
    {
        return view('page.index');
    }

    public function  visimisi()
    {
        return view('page.visi-misi');
    }

    public function  pelatihan()
    {
        return view('page.pelatihan');
    }

    public function  kontak()
    {
        return view('page.kontak');
    }

    public function  tentang()
    {
        return view('page.tentang');
    }
    
}
