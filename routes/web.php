<?php

use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\PrimeController;

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
//Authentication
// Route::get('/', function(){
//     return view('auth.login');
// });
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'login_post'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/post', [AuthController::class, 'registerpost'])->name('register.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/forgot-password', [AuthController::class, 'forgotpassword'])->name('forgotpassword');


Route::group(['middleware' => ['auth']], function () {

    //Dashboard
    Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard.index');

    //Profil
    Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/dashboard/profile/changepassword', [ProfileController::class, 'changepassword'])->name('profile.changepassword');
    Route::post('/dashboard/profile/changeavatar', [ProfileController::class, 'changeavatar'])->name('profile.changeavatar');

    //Data User
    Route::resource('user', UserController::class);

    //Category
    Route::resource('category', CategoryController::class);

    //Service
    Route::resource('service', ServiceController::class);
    //Worker

    //Transaction

    //Booking
    Route::resource('booking', BookingController::class);


    //Prime
    Route::get('/calculate', [PrimeController::class, 'index']);
    Route::post('/calculate', [PrimeController::class, 'calculate']);



    //Review
    Route::resource('review', ReviewController::class);
    Route::get('/api/booking-details/{id}', [ReviewController::class, 'getBookingDetails']);
});
