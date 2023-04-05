<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $attributes = [
        'keterangan' => null,
        'gambar' => null,
    ];

    public function orang()
    {
        return $this->belongsTo(Orang::class, 'id_orang');
    }

    public function usaha()
    {
        return $this->belongsTo(Usaha::class, 'id_usaha');
    }

    public function jualbeli()
    {
        return $this->hasMany(Jualbeli::class, 'id_transaksi');
    }

    public function hutang()
    {
        return $this->hasMany(Hutang::class, 'id_transaksi');
    }

    public function latestHutang()
    {
        return $this->hasOne(Hutang::class, 'id_transaksi')->latestOfMany();
    }
}
