<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('add', [DemoController::class, 'CreateWallet'])->name('adds');
Route::get('transfer', [DemoController::class, 'transferView'])->name('transfer');
Route::post('prosestf', [DemoController::class, 'transfer'])->name('ptransfer');
Route::get('cek-saldo', [DemoController::class, 'saldo'])->name('cek');
Route::post('proses-cek', [DemoController::class, 'CekSaldo'])->name('pcek');
