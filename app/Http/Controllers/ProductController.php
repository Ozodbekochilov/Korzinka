<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        return view('welcome', ['products' => Product::all(), 'types' => Type::all()]);
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

    function view_types()
    {
        return view('types', ['types' => Type::all()]);
    }

    function save_type(Request $req)
    {

        Type::create([
            'name' => $req->name
        ]);

        return back();
    }
}
