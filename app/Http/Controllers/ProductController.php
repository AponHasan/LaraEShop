<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use Image;
use Storage;
use DB;


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
        // dd($request);
        

            $product = new Product;
            $product->title = $request->title;
            $product->description = $request->description;
            $product->price = $request->price;

            $product->save();

        if(count($request->image)>0)
        {
            foreach($request->image as $images)
            {
                // $images=$request->file('image');
                $img='image'.time(). '.'. $images->getClientOriginalExtension();
                $localtion=public_path('images/products/' .$img);
                Image::make($images)->save($localtion);

                $productImage = new ProductImage;
                $productImage->product_id = $product->id;
                $productImage->image =$img;
                $productImage->save();
            }
        }
        //     if($request->hasFile('image'))
        //     {
        //         $images=$request->file('image');
        //         $img='image'.time(). '.'. $images->getClientOriginalExtension();
        //         $localtion=public_path('images/products/' .$img);
        //         Image::make($images)->save($localtion);

        //         $productImage = new ProductImage;
        //         $productImage->product_id = $product->id;
        //         $productImage->image =$img;
        //         $productImage->save();
                
        //     }
        // else{
        //         $productImage = new ProductImage;
        //         $productImage->product_id = $product->id;
        //         $productImage->image ='demopic.png';
        //         $productImage->save();
        //     }

            

            return "Success";
    }
}
