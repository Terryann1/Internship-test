<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomLogcontroller;
use App\Http\Controllers\CustomRegController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile',[App\Http\Controllers\profilecontroller::class,'index'])->name('viewprofile');
Route::get('/login',[CustomLogcontroller::class,'index'])->name('login');
Route::get('/register',[CustomRegController::class,'index'])->name('register');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');