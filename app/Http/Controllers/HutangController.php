<?php

namespace App\Http\Controllers;

use App\Models\Hutang;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class HutangController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with('hutang')->where('status', 'pembelian')->whereHas('hutang', function($q) { $q->where('sisa', '<', 0); })->latest()->get();

        dd($transaksi);
        return view('fitur.datahutang', [
            'pelanggan' => Transaksi::where('status', 'penjualan')->latest()->get(),
            'bumdes' => Transaksi::where('status', 'pembelian')->whereHas('hutang', function($q) { $q->where('sisa', '<', 0); })->latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'id_transaksi' => 'required',
            'bayar' => 'required',
            'sisa' => 'required',
        ]);

        Hutang::create($validatedData);
        return redirect()->back();
    }

    public function edit(Transaksi $hutang)
    {
        return view('fitur.detil.hutangusaha', [
            'transaksi' => $hutang
        ]);
    }
}
