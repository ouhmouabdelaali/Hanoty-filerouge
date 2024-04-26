<?php
use App\Http\Controllers\AuthController; 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




// User routes

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [UserController::class, 'logout']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
// Wallet routes
Route::post('/wallets', [WalletController::class, 'createwallet']);
Route::post('/wallets/add-balance', [WalletController::class, 'addBalance']);

// Transaction routes

Route::post('/transactions', [TransactionController::class, 'newtronsaction']);
// Route::post('/transactions', [TransactionController::class, 'createtransaction']);
Route::get('/transactionstory', [TransactionController::class, 'getUserTransactions']); 
Route::get('/getwallets', [WalletController::class, 'getAllWallets']);

// Route::get('/getwallets', [WalletController::class, 'getAllWallets']);
});

// Route::get('/getwallets', [WalletController::class, 'getAllWallets'])->middleware('cors');

Route::get('/getwallets', [WalletController::class, 'getAllWallets']);