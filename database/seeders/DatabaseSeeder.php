<?php

namespace Database\Seeders;

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
        $this->call([
            UserTableSeeder::class,
            PermissionTableSeeder::class,
            KaryawanTableSeeder::class,
            SuppliersTableSeeder::class,
            HuaweiTableSeeder::class,
            IphoneTableSeeder::class,
            OppoTableSeeder::class,
            PocoTableSeeder::class,
            RealmeTableSeeder::class,
            RedmiTableSeeder::class,
            SamsungTableSeeder::class,
            VivoTableSeeder::class,
        ]);
    }
}
