<?php

namespace App\Http\Controllers;

use App\Models\Orang;
use Illuminate\Http\Request;

class BarangorangController extends Controller
{
    public function store(Request $request)
    {
        Orang::find($request['id_orang'])->barang()->attach($request['id_barang']);
        return redirect()->back();
    }

    public function destroy(Request $request, Orang $barangorang)
    {
        Orang::find($barangorang->id)->barang()->detach($request['id_barang']);
        return redirect()->back();
    }
}
