<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('admin.pages.produk', compact('produk'));
    }

    public function create()
    {
        return view('admin.pages.produk-add');
    }

    public function store(Request $request)
    {
        
    }

    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('admin.pages.produk-edit', compact('produk'));
    }

    public function destroy($id)
    {
        Produk::destroy($id);
        return redirect()->route('admin.produk')->with('status', 'Berhasil menghapus data produk');
    }
}
