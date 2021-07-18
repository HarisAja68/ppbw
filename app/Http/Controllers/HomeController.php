<?php

namespace App\Http\Controllers;

use App\Models\huaweiModel;
use App\Models\iphoneModel;
use App\Models\KaryawanModel;
use App\Models\oppoModel;
use App\Models\pocoModel;
use App\Models\realmeModel;
use App\Models\redmiModel;
use App\Models\samsungModel;
use App\Models\suppliersModel;
use App\Models\User;
use App\Models\vivoModel;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $role = Role::create(['name' => 'karyawan']);
        // $permission = Permission::create(['name' => 'user']);
        // auth()->user()->givePermissionTo('suppliers');
        // auth()->user()->assignRole('karyawan');
        // $role = Role::findById(1);
        // $role->givePermissionTo('user');
        // $roles = Auth::user()->getRoleNames();
        // dd($roles);
        $karyawan = KaryawanModel::count();
        $suppliers = suppliersModel::count();
        $user = User::count();
        $role = Role::count();
        $iphone = iphoneModel::count();
        $samsung = samsungModel::count();
        $oppo = oppoModel::count();
        $vivo = vivoModel::count();
        $realme = realmeModel::count();
        $huawei = huaweiModel::count();
        $redmi = redmiModel::count();
        $poco = pocoModel::count();
        return view('home', compact('karyawan', 'suppliers', 'user', 'role', 'iphone',
            'samsung', 'oppo', 'vivo', 'realme', 'huawei', 'redmi', 'poco'));
    }
}
