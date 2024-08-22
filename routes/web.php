<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->prefix('dashboard')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

        Route::get('/orders', [AdminController::class, 'orders'])->name('dashboard.orders');
        Route::get('/services', [AdminController::class, 'services'])->name('dashboard.services');
        Route::get('/estados', [AdminController::class, 'estados'])->name('dashboard.estados');
    });


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/orders', [HomeController::class, 'orders'])->name('orders');
Route::get('/popular-services', [HomeController::class, 'services'])->name('services');
Route::get('/estados', [HomeController::class, 'estados'])->name('estados');
