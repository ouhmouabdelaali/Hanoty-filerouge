<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserController;
use App\Http\Controllers\StoreController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [UserController::class, 'showLoginForm'])->name('loginform');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('registerform');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');





Route::get('/create-store', [StoreController::class, 'createForm'])->name('createstoreform');

Route::post('/create-store', [StoreController::class, 'create'])->name('createstore');

      


// Route::get('/create-store', [StoreController::class, 'createForm'])->name('createstoreform');
// Route::post('/create-store', [StoreController::class, 'create'])->name('createstore');
Route::put('/updatstore{}',[StoreController::class,'updatstore'])->name('updatstore');
Route::delete('/deletacount',[StoreController::class,'deletstore'])->name('deletacount');





Route::get('/profile', [UserController::class, 'profile'])->name('profile');

Route::get('/dashborde', [UserController::class, 'dashborde'])->name('dashborde');

