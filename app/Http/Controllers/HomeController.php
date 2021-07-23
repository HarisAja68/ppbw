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
use Spatie\Permission\Models\Role;

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
