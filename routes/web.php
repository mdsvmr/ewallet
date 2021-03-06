<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Expenses; //Load class Members 
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

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    // Route::get('/dashboard', grafikDatas::class)->name('index');
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::get('expense', Expenses::class)->name('expense'); //Tambahkan routing ini
});

Route::get('cetak-data',[Expenses::class, 'cetakData'])->name('cetak-data');