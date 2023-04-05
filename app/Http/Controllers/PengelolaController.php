<?php

namespace App\Http\Controllers;

use App\Models\Pengelola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PengelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fitur.pengelola', [
            'pengelola' => Pengelola::latest()->get()
        ]);
    }

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
            'kontak' => 'required',
            'username' =>'required',
            'password' => 'required',
            'status' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        Pengelola::create($validatedData);

        return redirect()->back()->with('success', 'Data Pengelola berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengelola  $pengelola
     * @return \Illuminate\Http\Response
     */
    public function show(Pengelola $pengelola)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengelola  $pengelola
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengelola $pengelola)
    {
        $rule = [
            'nama' => 'required|max:255',
            'kontak' => 'required',
            'username' =>'required',
            'status' => 'required'
        ];

        if ($request->password != '') {
            $rule['password'] = ['required'];
        }

        $validatedData = $request->validate($rule);

        if ($request->password != '') {
            $validatedData['password'] = Hash::make($validatedData['password']);
        }

        Pengelola::where('id', $pengelola->id)->update($validatedData);

        return redirect()->back()->with('success', 'Data Pengelola berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengelola  $pengelola
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengelola $pengelola)
    {
        Pengelola::destroy($pengelola->id);
        return redirect()->back()->with('success', 'Pengelola berhasil dihapus!.');
    }
}
