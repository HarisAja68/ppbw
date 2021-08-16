<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{
    HomeController,
    KaryawanController,
    SuppliersController,
    OppoController,
    VivoController,
    SamsungController,
    IphoneController,
    RealmeController,
    RedmiController,
    PocoController,
    HuaweiController,
    UserController,
    RoleController,
};


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes(['verify' => true]);

Route::middleware(['verified'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::resource('suppliers', SuppliersController::class);
    Route::get('/cetak_suppliers', [SuppliersController::class, 'cetak_suppliers']);
    Route::get('/cetak_excel', [SuppliersController::class, 'export']);
    Route::post('/impor_excel', [SuppliersController::class, 'import'])->name('import');

    Route::resource('karyawan', KaryawanController::class);
    Route::get('/cetak_karyawan', [KaryawanController::class, 'cetak_karyawan']);

    Route::resource('oppo', OppoController::class);
    Route::get('/cetak_oppo', [OppoController::class, 'cetak_oppo']);
    Route::resource('vivo', VivoController::class);
    Route::get('/cetak_vivo', [VivoController::class, 'cetak_vivo']);
    Route::resource('samsung', SamsungController::class);
    Route::get('/cetak_samsung', [SamsungController::class, 'cetak_samsung']);
    Route::resource('iphone', IphoneController::class);
    Route::get('/cetak_iphone', [IphoneController::class, 'cetak_iphone']);
    Route::resource('realme', RealmeController::class);
    Route::get('/cetak_realme', [RealmeController::class, 'cetak_realme']);
    Route::resource('redmi', RedmiController::class);
    Route::get('/cetak_redmi', [RedmiController::class, 'cetak_redmi']);
    Route::resource('poco', PocoController::class);
    Route::get('/cetak_poco', [PocoController::class, 'cetak_poco']);
    Route::resource('huawei', HuaweiController::class);
    Route::get('/cetak_huawei', [HuaweiController::class, 'cetak_huawei']);

    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);

    Route::get('/profil', [UserController::class, 'profil'])->name('user.profil');
    Route::post('/profil', [UserController::class, 'editProfil'])->name('user.edit_profil');
});
