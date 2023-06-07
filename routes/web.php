<?php

use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PesananController;
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
Route::get('/order', [PesananController::class, 'index']);
Route::get('/order/{id}', [PesananController::class, 'show']);
Route::get('/order/{id}/formOrder', [PesananController::class, 'showForm']);
Route::post('/order/{id}/formOrder/checkout', [PesananController::class, 'order']);


