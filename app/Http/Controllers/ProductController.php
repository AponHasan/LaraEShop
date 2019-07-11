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
}
