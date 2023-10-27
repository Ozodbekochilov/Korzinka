<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
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

Route::get(
    '/products',
    function () {
        return view('products', ['products' => Product::all()]);
    }
)->name('/');

Route::post('/save_product', function (Request $request) {

    Product::create([
        'name' => $request->name,
    ]);

    return back();
});

Route::get('/delete_product/{id}', function ($id) {
    Product::where('id', '=', $id)->first()->delete();
    return back();
});

Route::get('/edit_product/{id}', function ($id) {
    return view('edit_product', ['product' => Product::where('id', '=', $id)->first()]);
});

Route::post('/save_edit_product/{id}', function ($id, Request $request) {

    Product::where('id', '=', $id)->first()->update([
        'name' => $request->name,
    ]);

    return redirect()->route('/');
});



Route::get('/models', [ModelsController::class, 'index']);

Route::post('/save_model',[ModelsController::class,'save_model']);
