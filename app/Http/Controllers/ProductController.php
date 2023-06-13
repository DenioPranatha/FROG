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

        // kalo pencet salah satu kategori dr home
        if($request->has('cat_id')){
            $products = Product::where('product_category_id', $request->cat_id)->get();
            $cat_id = $request->cat_id;
        }

        // kalo pencet all ato see more ato akses dr url
        else{
            $products = Product::all();
            $cat_id = 0;
        }

        $pg = 1;
        $count = count($products);
        $products = $products->take(5);

        //jika panjang smua kurang dari atau sama dengan 5, maka $pg = -1
        if($count <= 5) $pg = -1;


        // dd(count($products));
        // dd($cat_id);

        return view('products', [
            // 'products' => Product::all()
            // 'products' => Product::where('product_category_id', $request->cat_id)->get()
            'products' => $products,
            'productCategories' => ProductCategory::all(),
            'request' => $request,
            'cat_id' => $cat_id,
            'pg' => $pg
        ]);


    }

    public function result(Request $request)
    {
        //
        // dd($request);
        // dump($request);

        // kalo pencet salah satu kategori dr home
        if($request->has('cat_id')){
            $products = Product::where('product_category_id', $request->cat_id)->get();
            $cat_id = $request->cat_id;
        }

        // kalo pencet all ato see more ato akses dr url
        else{
            $products = Product::all();
            $cat_id = 0;
        }

        $pg = (int)$request->query('pg');
        $pge = 5*$pg;
        $c = count($products);
        if($pge >= $c)$pg = -1;

        // dump($pge);


        // dd($products);

        return view('productsResult', [
            'products' => $products->take($pge),
            'productCategories' => ProductCategory::all(),
            'request' => $request,
            'cat_id' => $cat_id,
            'pg' => $pg
        ]);

        // $popEvents = Event::latest();
        // $events = Event::latest()->filter(request(['search-event', 'category-event']))->get();

        // $events = $events->take($pge);
        // $popular = $popEvents->get();
        // $cat = Category::limit(3)->get();


        // $eventsHtml = view('eventsResult', compact('events', 'popular', 'cat', 'pg'))->render();

        // return $eventsHtml;
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
