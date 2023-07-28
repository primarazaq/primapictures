<?php

use App\Http\Controllers\JasaController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KeuanganController;
use App\Http\Middleware\RedirectIfAuthenticated;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
});
Route::get('/login', [LoginController::class, 'index'])->name('login')
    ->middleware('guest');

Route::post('/postLogin', [LoginController::class, 'postLogin']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('admin')->group(function(){

        Route::get('/', function () {
            return redirect('/admin/dashboard');
        });
        
        Route::get('/dashboard', [KeuanganController::class, 'index']);

        Route::get('/jadwalpemotretan', [JadwalController::class, 'jadwal']);
        
        Route::get('/kelolajasa', [JasaController::class, 'index']);

        Route::get('/kelolajasa/{id}', [JasaController::class, 'show']);
        
        Route::post('/kelolajasa/{id}/create', [JasaController::class, 'store']);

        Route::put('/kelolajasa/{id}/update', [JasaController::class, 'update']);

        Route::delete('/kelolajasa/{id}/destroy', [JasaController::class, 'destroy']);


        Route::get('/riwayatpesanan', [PesananController::class, 'riwayat']);
    });
});


// Route::get('/admin', function () {
//     return view('admin.dashboard');
// })->middleware('auth');

Route::get('/order', [PesananController::class, 'index']);
Route::get('/order/{id}', [PesananController::class, 'show']);
Route::get('/order/{id}/formOrder', [PesananController::class, 'showForm']);
Route::get('/checkout/{order_id}', [PembayaranController::class, 'pending']);

Route::post('/order/{id}/formOrder/checkout', [PesananController::class, 'order']);

// Route::post('/status-pembayaran',[PembayaranController::class, 'checkout']);
Route::get('/status-transaksi/{id}',[PembayaranController::class, 'statustransaksi']);
