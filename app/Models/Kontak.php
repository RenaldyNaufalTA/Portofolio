<?php

namespace App\Models;

use App\Models\Siswa;
use App\Models\JenisKontak;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kontak extends Model
{
    protected $table = 'jenis_kontak_siswa';
    protected $guarded = ['id'];
    protected $fillable = [
        'deskripsi'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id');
    }
    // public function jenis()
    // {
    //     return $this->belongsTo(JenisKontak::class, 'id_jenis');
    // }
}