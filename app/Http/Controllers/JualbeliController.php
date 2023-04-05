<?php

namespace App\Http\Controllers;

use App\Models\Jualbeli;
use Illuminate\Http\Request;

class JualbeliController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_transaksi' => 'required',
            'id_barang' => 'required',
            'harga' => 'required',
            'kuantitas' =>'required',
        ]);

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
