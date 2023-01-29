<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
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

// Routing untuk sisi user
Route::get('/', [BukuController::class, 'indexMain'])->name('mainpage');
Route::get('/mainpage', [BukuController::class, 'indexMain'])->name('mainpage'); 
Route::get('/peminjamanpage', [BukuController::class, 'indexPeminjaman'])->name('peminjamanpage'); 
Route::post('/pinjam', [PeminjamanController::class, 'store_peminjaman'])->name('store_peminjaman');  


// Routing untuk crud buku - sisi admin
Route::get('/data_buku', [BukuController::class, 'indexBuku'])->name('data_buku');
Route::get('/create_buku', [BukuController::class, 'create_buku'])->name('create_buku'); 
Route::post('/store_buku', [BukuController::class, 'store_buku'])->name('store_buku'); 
Route::get('edit_buku/{id}', [BukuController::class, 'edit_buku'])->name('edit_buku');
Route::post('update_buku/{id}', [BukuController::class, 'update_buku'])->name('update_buku');
Route::post('delete_buku/{id}', [BukuController::class, 'delete_buku'])->name('delete_buku');

// Route::get('/book/data', [BukuController::class, 'dataBuku'])->name('book.data');

Route::get('/data_peminjaman', [PeminjamanController::class, 'data_peminjaman'])->name('data_peminjaman');
Route::patch('update_pengembalian/{id}', [PeminjamanController::class, 'update_pengembalian'])->name('update_pengembalian');
Route::get('edit_peminjaman/{id}', [PeminjamanController::class, 'edit_peminjaman'])->name('edit_peminjaman');
Route::post('update_peminjaman/{id}', [PeminjamanController::class, 'update_peminjaman'])->name('update_peminjaman');
Route::post('delete_peminjaman/{id}', [PeminjamanController::class, 'delete_peminjaman'])->name('delete_peminjaman');


Route::get('/faqpage', function () {
    return view('user.faqpage');
})->name('faqpage');

Route::get('/invoicepage', function () {
    return view('user.invoicepage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
