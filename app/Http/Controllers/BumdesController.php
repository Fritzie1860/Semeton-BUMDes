<?php

namespace App\Http\Controllers;

use App\Models\Bumdes;
use App\Models\Pengelola;
use App\Models\Usaha;
use Illuminate\Http\Request;

class BumdesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fitur.profilbumdes', [
            'bumdes' => Bumdes::first(),
            'ketua' => Pengelola::where('status', 'Ketua')->first('kontak'),
            'bendahara' => Pengelola::where('status', 'Bendahara')->first('kontak'),
            'usahajasa' => Usaha::where('jenis', 'Jasa')->latest()->get(),
            'usahadagang' => Usaha::where('jenis', 'Dagang')->latest()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bumdes  $bumdes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' =>'required',
        ]);

        Bumdes::where('nama', $request['old_nama'])->where('alamat', $request['old_alamat'])->update($validatedData);

        return redirect()->back()->with('success', 'Data Bumdes berhasil diupdate.');
    }

}
