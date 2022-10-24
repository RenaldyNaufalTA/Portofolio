<?php

namespace App\Models;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projek extends Model
{
    use HasFactory;
    protected $table = 'projek';
    protected $guarded = ['id'];
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}