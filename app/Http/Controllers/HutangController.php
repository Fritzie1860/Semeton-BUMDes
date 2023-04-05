<?php

namespace App\Http\Controllers;

use App\Models\Hutang;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class HutangController extends Controller
{
    public function index()
    {
        return view('fitur.datahutang', [
            'pelanggan' => Transaksi::where('status', 'penjualan')->whereDoesntHave('hutang', function($q){ $q->where('sisa', 0); })->latest()->get(),
            'bumdes' => Transaksi::where('status', 'pembelian')->whereDoesntHave('hutang', function($q){ $q->where('sisa', 0); })->latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        $rule = [
            'id_transaksi' => 'required',
            'bayar' => 'required',
        ];
        
        if(!$request->sisa_bayar) {
            $rule['sisa'] = 'required';
        }
        
        $validatedData = $request->validate($rule);

        if($request->sisa_bayar) {
            $validatedData['sisa'] = $request['sisa_bayar'] + $validatedData['bayar'];
        } else {
            $transaksi = Transaksi::find($validatedData['id_transaksi']);

            if($transaksi->status == 'pembelian') {
                foreach($transaksi->jualbeli as $item) {
                    $item->barang->stok += $item->kuantitas;
                    $item->barang->harga = $item->harga;
                    $item->barang->save();
                }
            } else {
                foreach($transaksi->jualbeli as $item) {
                    $item->barang->stok -= $item->kuantitas;
                    $item->barang->save();
                }
            }
        }

        Hutang::create($validatedData);
        return redirect()->back();
    }

    public function show(Transaksi $hutang)
    {
        return view('fitur.detil.hutangusaha', [
            'transaksi' => $hutang
        ]);
    }
}
