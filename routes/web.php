<?php

use App\Http\Controllers\KerjasamaController;
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

Route::get('/', [KerjasamaController::class, 'index']);

Route::get('/dasboard', function () {
    return view('dasboard.index');
})->name('dasboard');

Route::get('/pelaporan', function () {
    return view('pelaporan.index');
})->name('pelaporan');

Route::get('/pengaturan', function () {
    return view('pengaturan.index');
})->name('pengaturan');

Route::get('/pjawab', function () {
    return view('pjawab.index');
})->name('pjawab');

Route::resource('kerjasama', KerjasamaController::class);
