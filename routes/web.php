<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\StoreController;
use  App\Http\Controllers\UserController;
use  App\Http\Controllers\ProductController;
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
    return view('hanoty');
})->name('/');

// Route::get('/search', 'ProductController@search')->name('search');


Route::get('/login', [UserController::class, 'showLoginForm'])->name('loginform');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('registerform');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');


Route::get('/profile', [UserController::class, 'profile'])->name('profile');
// routes/web.php
// Route::get('/products/filter/{subcategoryId}', [UserController::class, 'filterProductsBySubcategory'])->name('filterProductsBySubcategory');

Route::get('/dashborde', [UserController::class, 'dashborde'])->name('dashborde');


Route::get('/streets/{city}', [AddressController::class,'getStreets']);
Route::get('/cities/{state}', [AddressController::class,'getCities']);
Route::get('/states/{country}', [AddressController::class,'getStates']);





Route::get('/createstore', [StoreController::class, 'createForm'])->name('createstoreform');
Route::post('/createstore', [StoreController::class, 'createstore'])->name('createstore');




Route::get('/Providers', [UserController::class, 'provadershow'])->name('Providers');

Route::get('/prodacts/', [ProductController::class, 'productpage'])->name('prodacts');

Route::get('/prodacts/{id}', [ProductController::class, 'productshow'])->name('prodactshow');

Route::get('/createprodacts/', [ProductController::class, 'createForm'])->name('createForm');



// Route::get('/search', [ProductController::class, 'searchforproduct']);
use  App\Http\Controllers\TestController;

Route::get('/test', [TestController::class, 'pr ofile'])->name('test');
