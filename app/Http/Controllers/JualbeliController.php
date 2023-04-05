<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Jualbeli;
use Illuminate\Http\Request;

class JualbeliController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);
        $rule = [
            'id_transaksi' => 'required',
            'id_barang' => 'required',
            'kuantitas' =>'required',
        ];

        if(isset($request['harga'])) {
            $rule['harga'] = 'required';
        }

        $validatedData = $request->validate($rule);

        if(!isset($request->harga)) {
            $barang = Barang::firstWhere('id', $request->id_barang);
            $validatedData['harga'] = $barang->harga + $barang->untung;
        }

        $validatedData['total'] = $validatedData['harga'] * $validatedData['kuantitas'];

        Jualbeli::create($validatedData);

        return redirect()->back();
    }

    public function update(Request $request, Jualbeli $jualbeli)
    {
        $validatedData = $request->validate([
            'harga' => 'required',
            'kuantitas' =>'required',
        ]);

        $validatedData['total'] = $validatedData['harga'] * $validatedData['kuantitas'];

        Jualbeli::where('id', $jualbeli->id)->update($validatedData);

        return redirect()->back();
    }

    public function destroy(Jualbeli $jualbeli)
    {
        Jualbeli::destroy($jualbeli->id);
        return redirect()->back();
    }
}
