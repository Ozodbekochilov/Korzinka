<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        return view('welcome', ['products' => Product::all()]);
    }

    function save_product(Request $request)
    {
        if ($request->file('img')) {
            $request->file('img')->store('public');
            $path = 'storage/' . $request->file('img')->hashName();
        }

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'type' => $request->type,
            'image' => $path,
        ]);


        return back();
    }
}
