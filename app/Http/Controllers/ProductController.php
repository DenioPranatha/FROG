<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use App\Models\CartDetail;
use App\Models\CartHeader;
use App\Models\Category;
use App\Models\Event;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
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
        // kalo pencet salah satu kategori dr home
        $products = Product::filter(request(['search-box', 'cat-id']))->get();
        if($request->query('cat-id')){
        //     $products = Product::where('category_id', $request->query('cat-id'))->get();
            $cat_id = (int)$request->query('cat-id');
            $namacat = ProductCategory::find($cat_id)->name;
        }
        // // kalo pencet all ato see more ato akses dr url
        else{
        //     $products = Product::all();
            $namacat = "All";
            $cat_id = 0;
        }

        $pg = (int)$request->query('pg');
        $pge = 25*$pg;
        $c = count($products);
        if($pge >= $c)$pg = -1;


        return view('productsResult', [
            'products' => $products->take($pge),
            'productCategories' => ProductCategory::all(),
            'request' => $request,
            'cat_id' => $cat_id,
            'pg' => $pg,
            'namacat' => $namacat,
            'search-box' => $request->query('search-box'),
        ]);

    }

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

    public function add(Request $request){
        // UNTUK MASUKIN CART HEADER

        // ambil seluruh cart header yang dimiliki oleh si user itu
        $chs = CartHeader::where('user_id', auth()->user()->id)->get();

        // flag buat tandain udh ada produk dr event itu blm di keranjangnya
        // kalo ada flagnya 1, kalo gada 0
        $flag = 0;

        // ngecek udah ada produk dr event itu blm di keranjangnya
        foreach($chs as $ch){
            if($request->event_id == $ch->event_id && auth()->user()->id == $ch->user_id){
                // dd($request);
                $flag = 1;
            }
        }

        // kalo blm ada, baru insert di database
        if($flag == 0){
            $validatedDataHeader['event_id'] = $request->event_id;
            $validatedDataHeader['user_id'] = auth()->user()->id;
            CartHeader::create($validatedDataHeader);
        }


        // UNTUK MASUKIN CART DETAIL

        // buat dapetin cart header dari cart detail saat ini
        $chid = CartHeader::where('user_id', auth()->user()->id)->where('event_id', $request->event_id)->first();

        // buat dapetin smua produk yang event id nya sama dengan cart header id saat ini
        $cds = CartDetail::where('cart_header_id', $chid->id)->get();

        // kalo produknya blom ada di keranjang
        $flag2 = 0;

        foreach($cds as $cd){
            // udah ada di keranjang
            if($cd->product_id == $request->product_id){
                $line = $cd;
                $flag2 = 1;
            }
        }

        // kalau produknya udah ada di keranjang, tambahin qty nya dgn qty yg baru
        if($flag2 == 1){
            // dd($line);
            $validatedData['qty'] = $line->qty + $request->qty;
            // $validatedData['cart_header_id'] = $line->cart_header_id;
            // $validatedData['product_id'] = $line->product_id;
            CartDetail::where('cart_header_id', $chid->id)->where('product_id', $request->product_id)->update($validatedData);
        }

        // masukin ke keranjang
        else{
            // input ke database cart detail
            $validatedDataDetail['cart_header_id'] = $chid->id;
            $validatedDataDetail['product_id'] = $request->product_id;
            $validatedDataDetail['qty'] = $request->qty;
            CartDetail::create($validatedDataDetail);
        }

        // return redirect('/products')->with('success', 'New post has been added!');

        return redirect()->back()->with('success', 'Product has been added to cart!');
    }

    public function buy(Request $request){
        // dump($request);
        // redirect('/checkout');
        return redirect('/checkout')->with('success', 'New post has been added!');
        // return view("checkout");
    }
}
