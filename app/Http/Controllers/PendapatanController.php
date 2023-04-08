<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendapatan;
class PendapatanController extends Controller
{

    public function store(Request $request){
       
        $request->validate([
            'jenis' => ['required']
        ]);
        $data=Pendapatan::create([
            'id_usaha'=>$request->id,
            'jenis_pendapatan' => $request->jenis
        ]);
      
        return back(); 
    }
}
