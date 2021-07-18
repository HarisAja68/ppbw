<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HuaweiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_huawei')->insert([
            [
                'kode' => '123_A',
                'nama' => 'huawei',
                'foto' => 'no_image.jpg',
                'harga' => 'Rp. 5.000.000',
                'stok' => '20',
                'created_at' => Date('Y-m-d H:i:s'),
                'updated_at' => Date('Y-m-d H:i:s'),
            ]
       ]);
    }
}
