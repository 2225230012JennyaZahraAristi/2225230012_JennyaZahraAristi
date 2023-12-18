<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perpus extends Model
{
    use HasFactory;

    protected $table = 'perpus';
    protected $primaryKey ='id';
    protected $fillable = [
        'nama',
        'nim',
        'tanggal_lahir',
        'angkatan',
        'no_telepon',
        'email',
        'alamat'
    ];

    use HasFactory;
}
