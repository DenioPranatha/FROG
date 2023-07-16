<?php

namespace App\Http\Controllers;

use App\Models\CartDetail;
use App\Models\CartHeader;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    //
    public function index(){
        $count = 0;
        $count = CartHeader::where('user_id', auth()->user()->id)->get()->count();
        // dd(auth()->user()->id);
        // dd(CartHeader::where('user_id', auth()->user()->id)->get()->count());
        // dd($count);
        Session::put('buy_now', '2');
        return view('cart', [
            'count' => $count,
            'cartHeaders' => CartHeader::all()->load('event'),
            'cartDetails' => CartDetail::all()->load(['product', 'cartHeader']),
        ]);
    }

    public function minus(Request $request){
        // dd($request);
        $validatedData['qty'] = $request->num;
        CartDetail::where('cart_header_id', $request->cart_header_id)->where('product_id', $request->product_id)->update($validatedData);

        return response()->json(['message' => 'Success']);
    }

    public function plus(Request $request){
        // dump($request);
        $validatedData['qty'] = $request->num;
        CartDetail::where('cart_header_id', $request->cart_header_id)->where('product_id', $request->product_id)->update($validatedData);

        return response()->json(['message' => 'Success']);
    }

    public function check(Request $request){
        // dump($request);
        $validatedData['is_checked'] = 1;
        CartDetail::where('cart_header_id', $request->cart_header_id)->where('product_id', $request->product_id)->update($validatedData);


        return response()->json(['message' => 'Success']);
    }

    public function uncheck(Request $request){
        // dump($request);
        $validatedData['is_checked'] = 0;
        CartDetail::where('cart_header_id', $request->cart_header_id)->where('product_id', $request->product_id)->update($validatedData);

        return response()->json(['message' => 'Success']);
    }


    public function destroy(Request $request){
        // dd($request);

        // kalo produk yg mau dihapus dari event a dan di event a ga ada produk lain
        if(CartDetail::where('cart_header_id', $request->cart_header_id)->count() == 1){
            $deleteCH = CartHeader::find($request->cart_header_id);
            $deleteCH->delete();


            $deleteP = CartDetail::where('product_id', $request->product_id)->where('cart_header_id', $request->cart_header_id);
            $deleteP->delete();
        }
        // kalo produk yg mau dihapus dari event a dan di event a masi ada produk lain
        else{
            $deleteP = CartDetail::where('product_id', $request->product_id);
            $deleteP->delete();
        }
        return redirect()->back()->with('deleted','product deleted successfully');
    }
}
