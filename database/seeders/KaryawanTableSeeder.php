<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('tbl_karyawan')->insert([
            [
                'nip' => '123',
                'nama' => 'ahmad',
                'alamat' => 'Surabaya',
                'no_hp' => '09876',
                'foto' => 'no_image.jpg',
                'created_at' => Date('Y-m-d H:i:s'),
                'updated_at' => Date('Y-m-d H:i:s'),
            ]
       ]);
    }
}
