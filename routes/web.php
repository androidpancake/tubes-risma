<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenemuanController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('profile', [ProfileController::class, 'index'])->name('user.profil');
Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');

Route::resource('pengaduan', PengaduanController::class);
Route::get('mypengaduan', [PengaduanController::class, 'mypengaduan'])->name('pengaduan.mypengaduan');

Route::get('temukan/{pengaduan}', [PenemuanController::class, 'index'])->name('temukan.index');
Route::get('temukan/create/{pengaduan}', [PenemuanController::class, 'create'])->name('temukan.create');
Route::post('temukan/store', [PenemuanController::class, 'store'])->name('temukan.store');

// Route::resource('temukan', PenemuanController::class);
// Route::post('add', [PenemuanController::class, 'create'])->name('penemuan.create');
