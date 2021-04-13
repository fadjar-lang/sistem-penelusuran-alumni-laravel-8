<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alumni extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 'nama', 'tgl_lahir', 'jk', 'alamat', 'nisn', 'no_ijazah', 'jurusan', 'no_telp', 'pekerjaan', 'tahun_masuk',
        'tahun_lulus'
    ];
    
}
