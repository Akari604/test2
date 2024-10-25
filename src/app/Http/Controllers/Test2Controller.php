<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class Test2Controller extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        $products = Product::Paginate(6);
        return view('index', compact('products'));
	  }

    public function edit($protectId)
    {
        $form = Product::find($protectId);
        return view('detail')->with(':productId', $form);
    }

    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Product::find($request->id)->update($form);
        return view('/products');
    }

    public function store(Request $request)
    {
        $img = $request->file('image');
        $path = $img->store('storage');
        $products->image = basename($path);
        return view('register');
    }

    public function create(ProductRequest $request)
    {
        $form = $request->all();
        Product::create($form);
        return redirect('/products');
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
