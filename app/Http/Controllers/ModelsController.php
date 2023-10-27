<?php

namespace App\Http\Controllers;

use App\Models\ModelsTable;
use App\Models\Product;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    function index()
    {
        return view("models", ["models" => ModelsTable::all(), 'products' => Product::all()]);
    }

    function save_model(Request $request)
    {

        ModelsTable::create([
            'product_id' => $request->product,
            'name' => $request->name,
        ]);

        return back();
    }
}
