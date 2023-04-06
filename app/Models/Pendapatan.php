<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendapatan extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function usaha(){
        return $this->belongsTo(Usaha::class, 'id_usaha'); // 1 
    } 
}
