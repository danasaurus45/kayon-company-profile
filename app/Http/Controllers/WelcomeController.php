<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('welcome', compact('produk'));
    }

    public function detailProduk($id)
    {
        $produk = Produk::find($id);
        return view('detail-produk', compact('produk'));
    }
}
