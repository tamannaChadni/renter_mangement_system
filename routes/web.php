<?php

use App\Http\Controllers\User\LandlordController;
use App\Http\Controllers\User\RenterController;
use App\Http\Controllers\User\RenterDepositReceipt;
use App\Http\Controllers\User\RestAmount;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('renter', [RenterController::class, 'index'])->name('renter');
    Route::post('renter', [RenterController::class, 'store'])->name('renter');
    Route::get('rent-receipt', [RenterDepositReceipt::class, 'index'])->name('rent-receipt');
    Route::post('rent-receipt', [RenterDepositReceipt::class, 'store'])->name('rent-receipt');
    Route::get('rest-rent-receipt', [RestAmount::class, 'index'])->name('rest-rent-receipt');
    Route::post('rest-rent-receipt', [RestAmount::class, 'store'])->name('rest-rent-receipt');
});
