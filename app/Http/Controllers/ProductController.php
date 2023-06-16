<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // dd($request);

        // kalo pencet salah satu kategori dr home
        if($request->has('cat_id')){
            $products = Product::where('category_id', $request->cat_id)->get();
            $cat_id = $request->cat_id;
        }

        // kalo pencet all ato see more ato akses dr url
        else{
            $products = Product::all();
            $cat_id = 0;
        }

        $pg = 1;
        $count = count($products);
        $products = $products->take(25);

        //jika panjang smua kurang dari atau sama dengan 25, maka $pg = -1
        if($count <= 25) $pg = -1;


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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('addProduct', [
            'productCategories' => ProductCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:15',
            'category_id' => 'required',
            'stock' => 'required|numeric|min:1',
            'price' => 'required|numeric|min:1',
            'modal' => 'required|numeric|min:1',
            'description' => 'required|max:450'
        ]);

        $validatedData['event_id'] = 4;
        // $validatedData['image'] = ;

        // $validatedData['user_id'] = auth()->user()->id;
        // $validatedData['excerpt'] = str::limit($request->body, 200);

        Product::create($validatedData);

        return redirect('/products')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('productDetail', [
            // ini buat nunjukin rekomendasi dari event yg sama di product detail
            'products' => Product::where('event_id', $product->event_id)->where('id', '!=', $product->id)->take(5)->get(),

            // ini buat product detailnya
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function result(Request $request)
    {
        //
        // dd($request);
        // dump($request);

        // kalo pencet salah satu kategori dr home
        if($request->query('cat-id')){
            $products = Product::where('product_category_id', $request->query('cat-id'))->get();
            $cat_id = $request->cat_id;
        }

        // kalo pencet all ato see more ato akses dr url
        else{
            $products = Product::all();
            $cat_id = 0;
        }

        $pg = (int)$request->query('pg');
        $pge = 25*$pg;
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
}
