
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangmasukController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UsermanagementController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');


Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Route::get('/admin/suppliers', [SuppliersController::class, 'index'])->middleware('auth');

Route::resource('/admin/suppliers', SuppliersController::class)->middleware('auth');
Route::resource('/admin/barang',BarangController::class)->middleware('auth');
Route::resource('/admin/barangmasuk', BarangmasukController::class)->middleware('auth');
Route::resource('/admin/transaksi',TransaksiController::class)->middleware('auth');
Route::get('/admin/cetak',[CetakController::class,'index'])->middleware('auth');
Route::resource('/admin/usermanagement', UsermanagementController::class)->middleware('auth');


Route::resource('/admin/pemilik', PemilikController::class)->middleware('auth');



// Route::resource('/admin/suppliers', SuppliersController::class)->only([
//     'index', 'show'
// ])->middleware('auth');

// Route::resource('/admin/suppliers', SuppliersController::class)->except([
//     'create', 'store', 'update', 'destroy'
// ])->middleware('auth');

// test lagiI