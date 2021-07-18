<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authorities = config('permission.authorities');

        $listPermission = [];
        $ownerPermission = [];
        $karyawanPermission = [];

        foreach ($authorities as $label => $permissions) {
            foreach ($permissions as $permission) {
                $listPermission[] = [
                    'name' => $permission,
                    'guard_name' => 'web',
                    'created_at' => Date('Y-m-d H:i:s'),
                    'updated_at' => Date('Y-m-d H:i:s'),
                ];
                $ownerPermission[] = $permission;

                if (in_array($label, ['manage_suppliers','manage_barang'])) {
                    $karyawanPermission[] = $permission;
                }
            }
        }

        Permission::insert($listPermission);

        $owner = Role::create([
            'name' => 'owner',
            'guard_name' => 'web',
            'created_at' => Date('Y-m-d H:i:s'),
            'updated_at' => Date('Y-m-d H:i:s'),
        ]);
        $karyawan = Role::create([
            'name' => 'karyawan',
            'guard_name' => 'web',
            'created_at' => Date('Y-m-d H:i:s'),
            'updated_at' => Date('Y-m-d H:i:s'),
        ]);

        $owner -> givePermissionTo($ownerPermission);
        $karyawan -> givePermissionTo($karyawanPermission);

        $userowner = User::find(1)->assignRole('owner');

    }
}
