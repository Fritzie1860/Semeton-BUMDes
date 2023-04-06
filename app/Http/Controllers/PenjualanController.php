<?php

namespace App\Http\Controllers;

use App\Models\Orang;
use App\Models\Penjualan;
use App\Models\Usaha;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{

    public function index()
    {
        return view('fitur.penjualan', [
            'transaksi' => Transaksi::where('status', 'penjualan')->latest()->get(),
            'pelanggan' => Orang::where('status', 'pelanggan')->orderBy('nama')->get(),
            'usaha' => Usaha::where('jenis', 'dagang')->orderBy('nama')->get()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_transaksi' => 'required',
            'id_barang' => 'required',
            'harga' => 'required',
            'kuantitas' =>'required',
        ]);

        $validatedData['total'] = $validatedData['harga'] * $validatedData['kuantitas'];

        Penjualan::create($validatedData);

        return redirect()->back()->with('success', 'Penjualan berhasil ditambahkan.');
    }

    public function update(Request $request, Penjualan $penjualan)
    {
        $validatedData = $request->validate([
            'id_barang' => 'required',
            'harga' => 'required',
            'kuantitas' =>'required',
        ]);

        $validatedData['total'] = $validatedData['harga'] * $validatedData['kuantitas'];

        Penjualan::where('id', $penjualan->id)->update($validatedData);

        return redirect()->back()->with('success', 'Penjualan berhasil diupdate.');
    }

    public function destroy(Penjualan $penjualan)
    {
        Penjualan::destroy($penjualan->id);
        return redirect()->back()->with('success', 'Penjualan berhasil dihapus!.');
    }
}
