<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\StockController;
use \App\Http\Controllers\SiteController;

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

//SITE
Route::get('/',[
    SiteController::class, 'index'
])->name('site.home');

Route::get('/stock/site/create/',[
    SiteController::class, 'siteCreateProduct'
])->name('site.stock.create');

// STOCK
Route::get('/stock/',[
    StockController::class, 'index']
)->name('stock.home');

Route::get('/stock/{id}',[
    StockController::class, 'show'
])->name('stock.details');

// STOCK ACTIONS
Route::get('/stock/message/{message}/{typeAlert}/{icon}',[
    StockController::class, 'cancelAction']
)->name('stock.cancelAction');

Route::post('/stock/create',[
    StockController::class, 'store']
)->name('stock.create');

Route::delete('/stock/delete/{id}',[
    StockController::class, 'destroy']
)->name('stock.delete');

Route::post('/stock/edit/{id}',[
    StockController::class, 'edit']
)->name('stock.edit');
