<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{

    public function index()
    {
        return view('fitur.stok', [
            'barang' => Barang::orderBy('nama')->get()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
        ]);

        Barang::create($validatedData);

        return redirect()->back()->with('success', 'Data Barang berhasil ditambahkan.');
    }

    public function show(Barang $barang)
    {
        //
    }

    public function update(Request $request, Barang $barang)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'minimum' => 'required',
            'untung' => 'required',
            'status' => 'required'
        ]);

        Barang::where('id', $barang->id)->update($validatedData);

        return redirect()->back()->with('success', 'Data Barang berhasil diupdate.');
    }

    public function destroy(Barang $barang)
    {
        Barang::destroy($barang->id);
        return redirect()->back()->with('success', 'Barang berhasil dihapus!.');
    }
}
