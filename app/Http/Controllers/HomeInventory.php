<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeInventory extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function daftar_barang()
    {
        return view('apps.daftar_barang');
    }
}
