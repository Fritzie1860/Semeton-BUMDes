<?php

namespace App\Http\Controllers;

use App\Models\Orang;
use App\Models\Barang;
use Illuminate\Http\Request;

class PemasokController extends Controller
{

    public function index()
    {
        return view('fitur.pemasok', [
            'pemasok' => Orang::where('status', 'pemasok')->latest()->get()
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

        return redirect()->back()->with('success', 'Data Pemasok berhasil ditambahkan.');
    }

    public function show(Orang $pemasok)
    {
        return view('fitur.detil.pemasok', [
            'pemasok' => $pemasok,
            'barang' => Barang::whereNotIn('id', $pemasok->barang->pluck('id'))->orderBy('nama')->get()
        ]);
    }

    public function update(Request $request, Orang $pemasok)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' =>'required',
            'kontak' => 'required',
        ]);

        Orang::where('id', $pemasok->id)->update($validatedData);

        return redirect()->back()->with('success', 'Data Pemasok berhasil diupdate.');
    }

    public function destroy(Orang $pemasok)
    {
        Orang::destroy($pemasok->id);
        return redirect()->back()->with('success', 'Pemasok berhasil dihapus!.');
    }
}
