<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orang extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }

    public function barang()
    {
        return $this->belongsToMany(Barang::class, 'barangorangs', 'id_orang', 'id_barang');
    }
}
