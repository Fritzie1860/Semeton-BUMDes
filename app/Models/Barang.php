<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $attributes = [
        'stok' => 0,
        'minimum' => 0,
        'harga' => 0,
        'untung' => 0,
        'status' => 'Barang Dagangan'
    ];

    public function orang() {
        return $this->belongsToMany(Orang::class, 'barangorangs', 'id_barang', 'id_orang');
    }


    public function jualbeli()
    {
        return $this->hasMany(Jualbeli::class, 'id_barang');
    }
}
