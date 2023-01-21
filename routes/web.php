<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Models\Pegawai;
use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'register' => true, // Register Routes...
    'reset' => false, // Reset Password Routes...
    'verify' => false, // Email Verification Routes...
]);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/home/tambah', function(){
    return view('tambah');
})->name('tambah');

Route::get("/home/edit{id}", [PegawaiController::class, 'edit'])->name('edit');

Route::post('/home/update', [PegawaiController::class, 'update'])->name('update');

Route::post('/home/store', [PegawaiController::class, 'store'])->name('store');

Route::get('/home/delete{id}', [PegawaiController::class, 'delete'])->name('delete');