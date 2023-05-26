<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // ini buat nunjukin smua produk
    public function index(Request $request){
        // dd($request);
        if($request->has('cat_id')){
            $products = Product::where('product_category_id', $request->cat_id)->get();
        }
        else{
            $products = Product::all();
        }
        return view('products', [
            // 'products' => Product::all()
            // 'products' => Product::where('product_category_id', $request->cat_id)->get()
            'products' => $products,
            'productCategories' => ProductCategory::all(),
            'request' => $request
        ]);
    }

    // ini buat product detail
    public function detail(Product $product){
        // dd($product);
        return view('productDetail', [
            // ini buat nunjukin rekomendasi dari event yg sama di product detail
            'products' => Product::where('event_id', $product->event_id)->where('id', '!=', $product->id)->take(5)->get(),

            // ini buat product detailnya
            'product' => $product
        ]);
    }

    // public function store(Request $request){
    //     // dd($request);
    //     return view('products');
    // }
}
