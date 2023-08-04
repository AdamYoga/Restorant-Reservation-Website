<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\admin_tablesController;
use App\Http\Controllers\admin_dashboardController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\bypassController;

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

// Route::post('/pesan', [PesanController::class, 'store'])->name('pesan');
// Route::resource('/pesan', \App\Http\Controllers\PesanController::class);
Route::get('/pesan',[PesanController::class,"index"])->name('pesan');
Route::post('/pesan_input',[PesanController::class, 'store']);


Route::resource('/admin_dashboard', \App\Http\Controllers\admin_dashboardController::class);
Route::resource('/admin_tables', \App\Http\Controllers\admin_tablesController::class);
Route::resource('/bypass', \App\Http\Controllers\bypassController::class);


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

Route::resource('/menu', MenuController::class);
Route::get('/booking', [BookingController::class, 'index'])->name('booking.index');
Route::put('/booking/{id}', [BookingController::class, 'update'])->name('booking.update');
