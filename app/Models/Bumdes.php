<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bumdes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'alamat', 'foto'
    ];

    protected $attributes = [
        'alamat' => null,
        'foto' => null,
    ];
}
