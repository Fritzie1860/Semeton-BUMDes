<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Jasa;

class JasaController extends Controller
{
    public function index($id){
        $transaksi=Transaksi::find($id);
        $jasa=Jasa::All();
        return view('fitur.detil.notapendapatan',compact('transaksi','jasa'));
    }
    public function store(Request $request){
        $rule = [
            'id_transaksi' => 'required',
            'id_pendapatan' => 'required',
            'kuantitas' =>'required|numeric',
            'harga' =>'required|numeric',
        ];


        $validate= $request->validate($rule);

        $validate['total'] = $validate['harga'] * $validate['kuantitas'];
        
        Jasa::create($validate);

        return back();

    }
}
