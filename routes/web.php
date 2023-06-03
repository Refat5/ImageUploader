<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ImageController;
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
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('post-login', [LoginController::class, 'login'])->name('login.post'); 
Route::get('registration', [RegisterController::class, 'index'])->name('register');
Route::post('create-registration', [RegisterController::class, 'register_create'])->name('register.create'); 
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
//Photo Route
Route::group(['prefix' => 'image', 'as' => 'image.', 'middleware' => ['auth']], function () {
   Route::get('/', [ImageController::class, 'index'])->name('list'); 
   Route::get('/create', [ImageController::class, 'create'])->name('create'); 

});