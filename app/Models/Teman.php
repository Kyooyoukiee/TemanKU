<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teman extends Model
{
    protected $fillable = [
        'nama_teman',
        'tanggal_lahir',
        'nomor_kursi',
        'hobi',
        'makanan_favorit',
    ];
}
