<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ProductController::class, 'index'])->name('index');

Route::post('/save_product', [ProductController::class, 'save_product'])->name('save_product');


Route::get('/types', [ProductController::class, 'view_types'])->name('types');

Route::post('/save_type', [ProductController::class,'save_type'])->name('save_type');
