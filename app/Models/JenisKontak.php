<?php

namespace App\Models;

use App\Models\Kontak;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisKontak extends Model
{
    use HasFactory;
    protected $table = 'jenis_kontak';
    protected $guarded = ['id'];

    public function siswa()
    {
        return $this->belongsToMany(Siswa::class);
    }
}