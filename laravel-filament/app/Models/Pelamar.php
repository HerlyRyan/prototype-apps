<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{

    protected $fillable = [
        'nama',
        'noTelp',
        'alamat',
        'email',
        'posisi',
        'jenisPekerjaan',
        'CV',
    ];
}
