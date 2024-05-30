<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BordaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataKostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KriteriaMahasiswaController;
use App\Http\Controllers\KriteriaPemilikKostController;
use App\Http\Controllers\PerhitunganMahasiswaController;
use App\Http\Controllers\PerhitunganPemilikKostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RekomendasiKostController;
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

Route::get('/', [HomeController::class, 'index'])->name('landing-page');
Route::get('/contact', [HomeController::class, 'contact'])->name('landing-page.contact');


//Authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/post', [AuthController::class, 'login_post'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/post', [AuthController::class, 'registerpost'])->name('register.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forgot-password', [AuthController::class, 'forgotpassword'])->name('forgotpassword');


Route::group(['middleware' => ['auth', 'checkRole:admin,mahasiswa,pemilikkost']], function(){

    //Dashboard
    Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');

    //Data Kost
    Route::get('/dashboard/data-kost', [DataKostController::class, 'index'])->name('datakost.index');
    Route::get('/dashboard/data-kost/insert', [DataKostController::class, 'insert'])->name('datakost.insert');
    Route::post('/dashboard/data-kost/push', [DataKostController::class, 'push'])->name('datakost.push');
    Route::get('/dashboard/data-kost/edit/{id}', [DataKostController::class, 'edit'])->name('datakost.edit');
    Route::post('/dashboard/data-kost/update/{id}', [DataKostController::class, 'update'])->name('datakost.update');
    Route::get('/dashboard/data-kost/delete/{id}', [DataKostController::class, 'delete'])->name('datakost.delete');

    //Rekomendasi Kost
    Route::get('/dashboard/rekomendasi-kost', [RekomendasiKostController::class, 'index'])->name('rekomendasikost.index');
    Route::get('/dashboard/rekomendasi-kost/{id}', [RekomendasiKostController::class, 'show'])->name('rekomendasikost.show');

    // Kriteria Mahasiswa
    Route::get('/dashboard/kriteria-mahasiswa', [KriteriaMahasiswaController::class, 'index'])->name('kriteriamahasiswa.index');

    // Kriteria Pemilik Kost
    Route::get('/dashboard/kriteria-pemilikkost', [KriteriaPemilikKostController::class, 'index'])->name('kriteriapemilikkost.index');

    //Perhitungan Mahasiswa
    Route::get('/dashboard/perhitungan-mahasiswa', [PerhitunganMahasiswaController::class, 'index'])->name('perhitunganmahasiswa.index');

    //Perhitungan Pemilik Kost
    Route::get('/dashboard/perhitungan-pemilikkost', [PerhitunganPemilikKostController::class, 'index'])->name('perhitunganpemilikkost.index');

    //Perhitungan Borda
    Route::get('/dashboard/borda', [BordaController::class, 'index'])->name('borda.index');
    Route::post('/dashboard/borda/upload', [BordaController::class, 'upload'])->name('borda.upload');

    //Profil
    Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/dashboard/profile/changepassword', [ProfileController::class, 'changepassword'])->name('profile.changepassword');
    Route::post('/dashboard/profile/changeavatar', [ProfileController::class, 'changeavatar'])->name('profile.changeavatar');
});
