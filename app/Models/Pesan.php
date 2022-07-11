<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pesan';

    protected $table = 'message';

    protected $fillable = [
        'name',
        'email',
        'telepon',
        'pesan',
    ];
}
