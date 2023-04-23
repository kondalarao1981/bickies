<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ProfileController;

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
    return view('index');
})->middleware('page-cache');

Route::middleware(['auth.admin.redirect'])->group(function () {
    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
});

Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});