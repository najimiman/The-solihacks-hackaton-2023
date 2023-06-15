<?php

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function(){
    return view('index');
});


Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});
Route::resource('Service', ServiceController::class);
Route::get('toutservice',[ServiceController::class,'index'])->name('toutservice');
Route::get('servicemobile',[ServiceController::class,'servicemobile'])->name('servicemobile');
Route::get('servicefix',[ServiceController::class,'servicefix'])->name('servicefix');

Route::get('servicefibreobtique',[ServiceController::class,'servicefibreobtique'])->name('servicefibreobtique');
Route::get('serviceinternet',[ServiceController::class,'serviceinternet'])->name('serviceinternet');