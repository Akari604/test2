<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class Test2Controller extends Controller
{
    public function index(ProductRequest $request)
    {
        $product = $request->only(['name', 'price', 'image']);
        
        return view('index', compact('product'));
	  }

    public function detail(Request $request)
    {
        return view('detail');
    }

    public function update(Request $request)
    {
        return view('');
    }

    public function create(Request $request)
    {
        $product = $request->only(['name', 'price', 'image', 'season', 'description']);
        Product::create($product);
        return view('register');
    }

    public function search(Request $request)
    {
        $products = Product::with('product')->ProductSearch($request->product_id)->KeywordSearch($request->keyword)->get();

        return view('index', compact('products'));
    }

    public function destroy(Request $request)
    {
        return view('');
    }
}
