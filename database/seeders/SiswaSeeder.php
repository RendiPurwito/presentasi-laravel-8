<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'nama' => 'Majiid Muhammad',
            'jeniskelamin' => 'Laki-Laki',
            'agama' => 'Islam',
            'jurusan' => 'RPL',
            'notelepon' => '081297096073',
            'alamat' => 'Jl. Juanda'
        ]);
    }
}
