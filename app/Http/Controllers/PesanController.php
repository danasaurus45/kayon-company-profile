<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index()
    {
        $pesan = Pesan::all();
        return view('admin.pages.pesan', compact('pesan'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'email' => 'required|string|max:100',
            'telepon' => 'required|number|min:8',
            'pesan'  => 'required|string|max:1000'
        ]);

        Pesan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,               
            'pesan' => $request->pesan
        ]);

        return redirect()->route('home')->with('status', 'Berhasil menambahkan pesan');
    }

    public function destroy($id)
    {
        Pesan::destroy($id);
        return redirect()->route('admin.message')->with('status','Berhasil menghapus pesan');
    }
}
