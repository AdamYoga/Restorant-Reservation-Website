<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\admin_tablesController;
use App\Http\Controllers\admin_dashboardController;


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

Route::get('/home', [HomeController::class, "index"]);
Route::get('/pesan', function () {
    return view('pesan');
});


Route::resource('/admin_dashboard', \App\Http\Controllers\admin_dashboardController::class);
Route::resource('/admin_tables', \App\Http\Controllers\admin_tablesController::class);

// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class, 'Auth']);
// Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/register', [RegisterController::class,"index"]);

// Route::post('/registering', [RegisterController::class,"Register"]);
Route::get('/register', [RegisterController::class, 'index']);;
Route::post('/register', [RegisterController::class, 'store']);;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
