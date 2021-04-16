<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bukus')->insert([
            'id_buku' => '1',
            'judul' => 'Aku Cinta Kamu',
            'kategori' => 'Romance',
            'penerbit' => 'Muhammad Dhiyaul',
            'pengarang' => 'Fathin Naufaliya',
            'jumlah' => '10',
            'status' => 'Ada'
        ]);
    }
}
