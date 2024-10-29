<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    
    protected $table = 'pendaftarans';

   
    protected $fillable = [
        'id_siswa',
        'id_wali',
        'id_jurusan',
        'tanggal_daftar',
        'status',
    ];

    // Relasi ke tabel Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

    // Relasi ke tabel Wali
    public function wali()
    {
        return $this->belongsTo(Wali::class, 'id_wali');
    }

    // Relasi ke tabel Jurusan
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan');
    }
}
