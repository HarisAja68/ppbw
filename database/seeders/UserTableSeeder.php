<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
          [
              'name' => 'owner',
              'foto' => 'no_image.jpg',
              'email' => 'owner@gmail.com',
              'email_verified_at' => now(),
              'password' => Hash::make('12345678'),
              'remember_token' => Str::random(60),
              'created_at' => Date('Y-m-d H:i:s'),
              'updated_at' => Date('Y-m-d H:i:s'),
          ]
       ]);
    }
}
