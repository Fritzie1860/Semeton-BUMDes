<?php

namespace App\Http\Controllers;

use App\Models\Orang;
use App\Models\Usaha;
use App\Models\Barang;
use App\Models\Pembelian;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{

    public function index()
    {
        // dd(request('t'));
        
            // return view('fitur.penjualan', [
            //     'transaksi' => Transaksi::where('status', 'penjualan')->latest()->get(),
            //     'pelanggan' => Orang::where('status', 'pelanggan')->orderBy('nama')->get(),
            //     'usaha' => Usaha::where('jenis', 'dagang')->orderBy('nama')->get()
            // ]);
        switch (request('t')) {
            case 'jasa':
                return view('fitur.pendapatan', [
                    // 'transaksi' => Transaksi::where('status', 'penjualan')->latest()->get(),
                    // 'pelanggan' => Orang::where('status', 'pelanggan')->orderBy('nama')->get(),
                    // 'usaha' => Usaha::where('jenis', 'dagang')->orderBy('nama')->get()
                ]);
            case 'bebanjasa':
                return view('fitur.bebanjasa', [
                    // 'transaksi' => Transaksi::where('status', 'penjualan')->latest()->get(),
                    // 'pelanggan' => Orang::where('status', 'pelanggan')->orderBy('nama')->get(),
                    // 'usaha' => Usaha::where('jenis', 'dagang')->orderBy('nama')->get()
                ]);
            case 'bebandagang':
                return view('fitur.bebandagang', [
                    // 'transaksi' => Transaksi::where('status', 'penjualan')->latest()->get(),
                    // 'pelanggan' => Orang::where('status', 'pelanggan')->orderBy('nama')->get(),
                    // 'usaha' => Usaha::where('jenis', 'dagang')->orderBy('nama')->get()
                ]);
            case 'penjualan':
                return view('fitur.penjualan', [
                    'transaksi' => Transaksi::where('status', 'penjualan')->latest()->get(),
                    'pelanggan' => Orang::where('status', 'pelanggan')->orderBy('nama')->get(),
                    'usaha' => Usaha::where('jenis', 'dagang')->orderBy('nama')->get()
                ]);
            case 'transaksi':
                 return view('fitur.pendapatan', [
                'transaksi' => Transaksi::where('status', 'pendapatan')->latest()->get(),
                'pelanggan' => Orang::where('status', 'pelanggan')->orderBy('nama')->get(),
                'usaha' => Usaha::where('jenis', 'jasa')->orderBy('nama')->get()
            ]);
            default:
                return view('fitur.pembelian', [
                    'transaksi' => Transaksi::where('status', 'pembelian')->latest()->get(),
                    'pemasok' => Orang::where('status', 'pemasok')->orderBy('nama')->get(),
                    'usaha' => Usaha::where('jenis', 'dagang')->orderBy('nama')->get()
                ]);
        }
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'id_orang' =>'required',
            'id_usaha' => 'required',
            'keterangan' => 'nullable',
            'gambar' => 'required',
            'status' => 'required'
        ]);

        if($request->gambar !=''){
             // if($pengelola->file !='' && $pengelola->file != null){
            //     $file_old= $path.$pengelola->file;
            //     unlink($file_old);
            // }
            $path =public_path().'\images\upload\\';
         
           

            // upload new file
            $file=$request->gambar;
            $filename=$file->getClientOriginalName();
            $file->move($path, $filename);

            $data=Transaksi::create([
                'tanggal' => $request->tanggal,
                'id_orang' =>$request->id_orang,
                'id_usaha' => $request->id_usaha,
                'keterangan' => $request->keterangan,
                'gambar' => $filename,
                'status' => $request->status
            ]);
        
         
        }
        return redirect()->back()->with('success', 'Data Transaksi berhasil ditambahkan.');
    }

    public function show(Transaksi $transaksi)
    {
        if($transaksi->status == 'pembelian') {
            return view('fitur.detil.notapembelian', [
                'transaksi' => $transaksi,
                'barang' => Barang::whereNotIn('id', $transaksi->jualbeli->pluck('id_barang'))->orderBy('nama')->get()
            ]);
        } 
        
        else {
            return view('fitur.detil.notapenjualan', [
                'transaksi' => $transaksi,
                'barang' => $transaksi->orang->barang,
                'penjualan' => $transaksi->pembelian
            ]);
        }
    }

    public function update(Request $request, Transaksi $transaksi)
    {        
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'id_orang' =>'required',
            'id_usaha' => 'required',
            'keterangan' => 'nullable'
        ]);

        Transaksi::where('id', $transaksi->id)->update($validatedData);

        return redirect()->back()->with('success', 'Data Transaksi berhasil diupdate.');
    }

    public function destroy(Transaksi $transaksi)
    {
        Transaksi::destroy($transaksi->id);
        return redirect()->back()->with('success', 'Transaksi berhasil dihapus!.');
    }
}
