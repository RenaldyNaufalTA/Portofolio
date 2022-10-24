<?php

namespace App\Models;

use App\Models\Projek;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $guarded = ['id'];

    public function projek()
    {
        return $this->hasMany(Projek::class);
    }
    public function kontak()
    {
        return $this->belongsToMany(JenisKontak::class)->withPivot('deskripsi', 'id');
    }
}