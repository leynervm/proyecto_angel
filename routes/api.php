<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['web'])->post('/admin/searchcliente', [ApiController::class, 'searchcliente'])->name('api.admin.searchcliente');
Route::middleware(['web'])->post('/admin/searchorder', [ApiController::class, 'searchorder'])->name('api.admin.searchorder');
