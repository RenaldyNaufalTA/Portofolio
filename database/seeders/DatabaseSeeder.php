<?php

namespace Database\Seeders;

use App\Models\JenisKontak;
use App\Models\Kontak;
use App\Models\Projek;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // JenisKontak::create([
        //     'jenis_kontak' => 'Instagram'
        // ]);
        // JenisKontak::create([
        //     'jenis_kontak' => 'Facebook'
        // ]);
        // JenisKontak::create([
        //     'jenis_kontak' => 'Twitter'
        // ]);
        // Projek::create([
        //     'id_siswa' => 2,
        //     'nama_projek' => 'Game Platform',
        //     'deskripsi' => 'Lorem blablabla',
        //     'tanggal' => '2022-08-09'
        // ]);
        // Projek::create([
        //     'id_siswa' => 3,
        //     'nama_projek' => 'Game Rpg',
        //     'deskripsi' => 'Lorem blhhhhhhh',
        //     'tanggal' => '2022-08-09'
        // ]);
        // Projek::create([
        //     'id_siswa' => 4,
        //     'nama_projek' => 'Aplikasi Edit Video',
        //     'deskripsi' => 'Lorem blhhhhhhh',
        //     'tanggal' => '2022-08-09'
        // ]);
        // Kontak::create([
        //     'id_siswa' => 2,
        //     'id_jenis' => 3,
        //     'deskripsi' => 'Hello World'
        // ]);
        Kontak::create([
            'id_siswa' => 3,
            'id_jenis' => 4,
            'deskripsi' => 'Hello World'
        ]);
    }
}