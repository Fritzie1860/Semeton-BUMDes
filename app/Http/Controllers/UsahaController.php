<?php

namespace App\Http\Controllers;

use App\Models\Usaha;
use Illuminate\Http\Request;

class UsahaController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'lokasi' => 'required',
            'jenis' =>'required',
        ]);

        Usaha::create($validatedData);

        return redirect()->back()->with('success', 'Data Usaha berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function show(Usaha $usaha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usaha $usaha)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'lokasi' => 'required',
        ]);

        Usaha::where('id', $usaha->id)->update($validatedData);

        return redirect()->back()->with('success', 'Data Usaha berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usaha  $usaha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usaha $usaha)
    {
        Usaha::destroy($usaha->id);
        return redirect()->back()->with('success', 'Usaha berhasil dihapus!.');
    }
}
