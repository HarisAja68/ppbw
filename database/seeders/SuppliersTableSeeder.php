<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_suppliers')->insert([
            [
                'kode' => '123_A',
                'nama' => 'ahmad',
                'alamat' => 'Surabaya',
                'barang' => 'Smartphone',
                'no_hp' => '09876',
                'created_at' => Date('Y-m-d H:i:s'),
                'updated_at' => Date('Y-m-d H:i:s'),
            ]
       ]);
    }
}
