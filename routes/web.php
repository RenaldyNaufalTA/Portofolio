<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProjekController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortofolioController;

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

//Portofolio
// Route::get('/portofolio', function () {
//     return view('layouts.portofolio.master');
// });

Route::get('/', [PortofolioController::class, 'index']);
Route::get('/about', [PortofolioController::class, 'about']);
Route::get('/projects', [PortofolioController::class, 'projects']);
Route::get('/contact', [PortofolioController::class, 'contact']);

//Auth
Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [RegisterController::class, 'index'])->name('register.view');
    Route::post('/register/store', [RegisterController::class, 'register'])->name('register');
});

//Admin
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/mastersiswa', SiswaController::class);
    Route::resource('/masterprojek', ProjekController::class);
    Route::resource('/masterkontak', KontakController::class);
    Route::post('/mastersiswa/destroy/{id}', [SiswaController::class, 'destroy']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    //Projek
    Route::get('/masterprojek/create/{id}', [ProjekController::class, 'create']);
    //Kontak
    Route::get('/masterkontak/create/{id}', [KontakController::class, 'create']);
    Route::post('/masterkontak/create/jenis', [KontakController::class, 'jenis_kontak']);
    Route::post('/masterkontak/jenis/{id}', [KontakController::class, 'jenis_kontak_destroy']);
});