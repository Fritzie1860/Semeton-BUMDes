<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    use HasFactory;
     protected $guarded = [
        'id'
    ];
    public function transaksi(){
         return $this->belongsTo(Transaksi::class, 'id_transaksi');
    }
    public function pendapatan(){
        
         return $this->belongsTo(Pendapatan::class, 'id_pendapatan');
    }
}
