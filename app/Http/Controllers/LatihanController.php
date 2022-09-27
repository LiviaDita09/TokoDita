<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index()
    {
        return "Oke ini Latihan Controller";
    }
    public function beranda()
    {
        $data = array('nama' => 'Livia Dita Eka Puspita');
        return view('beranda', $data);
    }
}
