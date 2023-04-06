<?php

namespace App\Http\Controllers;

use App\Models\Orang;
use Illuminate\Http\Request;

class PelangganController extends Controller
{

    public function index()
    {
        return view('fitur.pelanggan', [
            'pelanggan' => Orang::where('status', 'pelanggan')->latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' =>'required',
            'kontak' => 'required',
            'status' => 'required'
        ]);

        Orang::create($validatedData);

        return redirect()->back()->with('success', 'Data Pelanggan berhasil ditambahkan.');
    
    }

    public function update(Request $request, Orang $pelanggan)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' =>'required',
            'kontak' => 'required',
        ]);

        Orang::where('id', $pelanggan->id)->update($validatedData);

        return redirect()->back()->with('success', 'Data Pelanggan berhasil diupdate.');
    }

    public function destroy(Orang $pelanggan)
    {
        Orang::destroy($pelanggan->id);
        return redirect()->back()->with('success', 'Pelanggan berhasil dihapus!.');
    }
}
