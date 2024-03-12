<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('welcome');
});
Route::get('/register', [AuthController::class, 'index'])->name('auth.register');
Route::post('/register', [AuthController::class,'register'])->name('auth.register.post');
Route::get('/image', [ImageController::class,'index'])->name('image');
Route::post('/image', [ImageController::class,'ph'])->name('image');

Route::group(['middleware' => 'auth.user'], function () {
    // Здесь ваши защищенные маршруты
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'auth'])->name('auth.login.post');
    Route::get('/dashboard', [DashboardController::class,'index'])->name('main.dashboard');
    Route::post('/dashboard', [AuthController::class,'logout'])->name('auth.logout');
});

Route::get('/papka', [ImageController::class, 'ppp'])->name('papka.ppp');