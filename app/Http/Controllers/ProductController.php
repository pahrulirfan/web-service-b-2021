<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
//        dd($data);
        return view('product.index', compact('products'));
    }

    public function add()
    {
        return view('product.add');
    }

    public function save(Request $request)
    {
//        dd($request->all());
//        $request->validate([
//            'name' => 'required',
//            'description' => 'required'
//        ]);

        Product::create($request->all());
        return redirect()->route('product.index');
    }
}
