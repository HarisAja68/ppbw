<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RealmeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_realme')->insert([
            [
                'kode' => '123_A',
                'nama' => 'realme',
                'foto' => 'no_image.jpg',
                'harga' => 'Rp. 5.000.000',
                'stok' => '20',
                'created_at' => Date('Y-m-d H:i:s'),
                'updated_at' => Date('Y-m-d H:i:s'),
            ]
       ]);
    }
}
