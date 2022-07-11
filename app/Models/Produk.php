<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_produk';

    protected $table = 'produk';

    protected $fillable = [
        'nama_produk',
        'ket_produk',
        'level_produk',
        'calorie',
        'moisture',
        'ash_content',
        'fixed_carbon',
        'burning_time',
        'ash_type',
        'size',
        'certificate',
        'packaging',
        'img_produk'
    ];
}
