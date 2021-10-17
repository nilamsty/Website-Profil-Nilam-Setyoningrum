<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\TentangSayaController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\HubungiSayaController;
use App\Http\Controllers\HubungiSayaMail;

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
    return view('welcome');
});

Route::get('/beranda',[BerandaController::class, 'index'])->name('beranda.index');

Route::get('/tentangsaya', [TentangSayaController::class, 'index'])->name('tentangsaya.index');

Route::get('/pengalaman', [PengalamanController::class, 'index'])->name('pengalaman.index');

Route::get('/hubungisaya', [HubungiSayaController::class, 'index'])->name('hubungisaya.index');

Route::post('/pesandikirim', [HubungiSayaController::class, 'kirimemail'])->name('hubungisaya.dikirim');