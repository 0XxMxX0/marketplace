<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\StockController;
use \App\Http\Controllers\SiteController;
use \App\Http\Controllers\SalesController;

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

//SITE PRIMARY
Route::controller(SiteController::class)->group(function(){
    Route::get('/', 'index')->name('page.index');
});

// STOCK ROUTES
Route::controller(StockController::class)->group(function (){
    Route::get('/stock/products', 'index')->name('stock.products');
    Route::get('/stock/products/create', 'create')->name('stock.products.create');
    Route::post('/stock/products/store/', 'store')->name('stock.products.store');
    Route::get('/stock/products/show/{id}', 'show')->name('stock.products.show');
    Route::post('/stock/products/update/{id}', 'update')->name('stock.products.update');
    Route::delete('/stock/products/delete/{id}', 'destroy')->name('stock.products.destroy');
});

// SALES ROUTES
Route::controller(SalesController::class)->group(function (){
    Route::get('sales/', 'index')->name('sales.index');
    Route::get('sales/create', 'create')->name('sales.create');
});

// ACTIONS OTHERS
Route::get('/stock/back/{', function(){
    return redirect()->route('stock.products')
        ->with('sucesso','Action canceled')->with('typeAlert','warning')->with('icon','bi-x-circle-fill');
})->name('back.stock.product');
