<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SourcesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ArticlesController;

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

// News Sources
Route::prefix('sources')->name('sources.')->group(function () {
    // Get all the news releases
    Route::get('', [SourcesController::class, 'index'])->name('index');
    Route::get('/{id}', [SourcesController::class, 'show'])->name('show');
});

// Products
Route::prefix('products')->name('products.')->group(function () {
    Route::get('', [ProductsController::class, 'index'])->name('index');
    Route::get('/{id}', [ProductsController::class, 'show'])->name('show');
});

// Orders
Route::prefix('orders')->name('orders.')->group(function () {
    Route::get('', [OrdersController::class, 'index'])->name('index');
    Route::get('/{id}', [OrdersController::class, 'show'])->name('show');
});

// Articles
Route::prefix('articles')->name('articles.')->group(function () {
    // Get all the news releases
    Route::get('', [ArticlesController::class, 'index'])->name('index');
    Route::get('/{id}', [ArticlesController::class, 'show'])->name('show');
    Route::get('/{sourceID}', [ArticlesController::class, 'showBySourceID'])->name('show-source');
});
