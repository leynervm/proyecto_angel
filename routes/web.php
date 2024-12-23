<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use Gloudemans\Shoppingcart\Facades\Cart;
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
    ->prefix('admin')->group(function () {

        Route::get('/', [AdminController::class, 'dashboard'])->name('admin');
        Route::get('/orders', [OrderController::class, 'index'])->name('admin.orders');
        Route::get('/orders/{order}/show', [OrderController::class, 'show'])->name('admin.orders.show');

        Route::get('/services', [AdminController::class, 'services'])->name('admin.services');
        Route::get('/estados', [AdminController::class, 'estados'])->name('admin.estados');

        Route::get('/historial-pagos', [AdminController::class, 'payments'])->name('admin.payments');

        Route::post('/json/services', [HomeController::class, 'jsonservices'])->name('admin.services.json');
    
        Route::post('/searchcliente', [ApiController::class, 'searchcliente'])->name('admin.searchcliente');
    });


Route::post('/cart/add', [HomeController::class, 'addcart'])->name('cart.add');


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/nosotros', [HomeController::class, 'nosotros'])->name('nosotros');
Route::get('/tracking', [HomeController::class, 'tracking'])->name('tracking');
Route::get('/order/{order:purchase}/detalles', [HomeController::class, 'results'])->name('orders.search.results');
// Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/orders', [HomeController::class, 'orders'])->name('orders');
Route::get('/popular-services', [HomeController::class, 'services'])->name('services');
Route::get('/estados', [HomeController::class, 'estados'])->name('estados');
