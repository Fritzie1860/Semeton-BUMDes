<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengelola extends Authenticatable
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $attributes = [
        'alamat' => null,
        'kontak' => null,
        'foto' => null,
    ];

    protected $hidden = [
        'password',
    ];
}
