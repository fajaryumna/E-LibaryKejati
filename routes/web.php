<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
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
//     return view('user.mainpage');
// });

// Route::get('/peminjamanpage', function () {
//     return view('user.peminjamanpage');
// });

Route::get('/mainpage', [BukuController::class, 'indexMain'])->name('mainpage'); //show 
Route::get('/peminjamanpage', [BukuController::class, 'indexPeminjaman'])->name('peminjamanpage'); //show 


Route::get('/faqpage', function () {
    return view('user.faqpage');
});

Route::get('/invoicepage', function () {
    return view('user.invoicepage');
});
