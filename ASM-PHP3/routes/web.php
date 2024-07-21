<?php

use App\Http\Controllers\TinController;
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
    return view('client.index');
});

Route::get('/chitiettin/{id}', [TinController::class, 'chitiet']);
Route::get('/cat/{id}', [TinController::class, 'tintrongloai']);
Route::get('/timkiem', [TinController::class, 'timkiem'])->name('timkiem');