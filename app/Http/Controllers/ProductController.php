<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //

    public function products()
    {
        $products = Product::orderBy('id','desc')->get();
        // dd($products);
        return view('page.product.index')->with('products', $products);
    }

    public function getcreate()
    {
      
        return view('page.product.create');
    }

    public function postcreate(Request $request)
    {
    //    dd($request);
            $product = new Product;
            $product->title = $request->title;
            $product->description = $request->description;
            $product->price = $request->price;

            $product->save();

            return "Success";
    }
}
