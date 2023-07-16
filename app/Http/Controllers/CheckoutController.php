<?php

namespace App\Http\Controllers;

use midtrans;
use Midtrans\Snap;
use Midtrans\Config;
use App\Models\Product;
use App\Models\CartDetail;
use App\Models\CartHeader;
use Illuminate\Http\Request;
use App\Models\PaymentDetail;
use App\Models\PaymentHeader;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    //
    public function store(Request $request){
        // dd($request);
        // dd($request->checkedItems);
        // dd(json_decode($request->checkedItems));

        // return redirect('cart');

        if($request->isMethod('post')){

            $product_id = json_decode($request->checkedItems);
            // dd($product_id);
            $cart_header_id = json_decode($request->checkedHeaders);
            // dd($cart_header_id);
            $eventCount = count(array_unique($cart_header_id));
            $cartHeaders = CartHeader::with('event')->find($cart_header_id);

            if($eventCount == 0){
                return redirect('cart')->with('error','Please select at least one product!');
            }else{
                // dd($request);
                // $totalPrice = $request->totalPayments;
                // $validatedDataHeader['user_id'] = auth()->user()->id;
                // $validatedDataHeader['name'] = auth()->user()->name;
                // $validatedDataHeader['phone'] = auth()->user()->phone;
                // $validatedDataHeader['address'] = auth()->user()->address;
                // $validatedDataHeader['date'] = $request->date;
                // $validatedDataHeader['total_price'] = $request->totalPayments;
                // $validatedDataHeader['status'] = $request->status;

                // $paymentHeader = PaymentHeader::create($validatedDataHeader);

                return view('checkout', [
                    'product_id' => $product_id,
                    'cart_header_id' => $cart_header_id,
                    'eventCount' => $eventCount,
                    'cartHeaders' => $cartHeaders,
                    'totalItem' => $request->totalItems,
                    'totalPayment' => $request->totalPayments,
                    'name' => auth()->user()->name,
                    'phone' => auth()->user()->phone,
                    'address' =>  auth()->user()->address
                ]);
            }

        } else{
            return redirect('cart');
        }

        // return redirect('/checkout')->with('product_id', $product_id)->with('cart_header_id', $cart_header_id)->with('eventCount', $eventCount)->with('cartHeaders', $cartHeaders)->with('totalItem', $request->totalItems)->with('totalPayment', $request->totalPayments);
        // return redirect('/checkout');

    }

    public function pay(Request $request){
        // $paymentHeader2 = PaymentHeader::find(81);
        // $paymentHeader2->update([
        //     'status' => 'Paid'
        // ]);
        // dd($request);
        $totalPrice = $request->total_price;
        $validatedDataHeader['user_id'] = $request->user_id;
        $validatedDataHeader['name'] = $request->name;
        $validatedDataHeader['phone'] = $request->phone;
        $validatedDataHeader['address'] = $request->address;
        $validatedDataHeader['date'] = $request->date;
        $validatedDataHeader['total_price'] = $request->total_price;
        $validatedDataHeader['status'] = $request->status;

        $paymentHeader = PaymentHeader::create($validatedDataHeader);

        $phid = $paymentHeader->id;
        $ph = PaymentHeader::find($phid);
        // dd($request->arrayProductId);
        $product_id = $request->arrayProductId;
        $products = Product::find($product_id);

        // dd($products);
        // dd($request->arrayCartDetail->product_id);
        // foreach ($request->arrayCartDetail as $item) {
        //     $cartDetail = json_decode($item, true);
        //     $qtyArray[] = $cartDetail['qty'];
        //     $productIdArray[] = $cartDetail['product_id'];
        // }

        // dd($productIdArray);
        // dd($qty);

        foreach ($products as $product){
            $validatedDataDetail['payment_header_id'] = $phid;
            $validatedDataDetail['product_id'] = $product->id;

            $qty = null;
            foreach ($request->arrayCartDetail as $item) {
                $cartDetail = json_decode($item, true);

                if ($cartDetail['product_id'] == $validatedDataDetail['product_id']) {
                    $qty = $cartDetail['qty'];
                    break;
                }
            }

            $validatedDataDetail['qty'] = $qty;
            $validatedDataDetail['item_price'] = $product->price;
            $validatedDataDetail['item_modal'] = $product->modal;
            PaymentDetail::create($validatedDataDetail);

            // // potong stok
            // $newStock = $product->stock - $qty;
            // $product->update([
            //     'stock' => $newStock
            // ]);
        }

        // Set your Merchant Server Key
        Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Config::$isProduction = config('midtrans.is_production');
        // Set sanitization on (default)
        Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $phid,
                'gross_amount' => $totalPrice,
            ),
            'customer_details' => array(
                'first_name' => $request->name,
                'last_name' => '',
                'phone' => '+62 '.$request->phone
            ),
        );

        $snapToken = Snap::getSnapToken($params);
        // dd($snapToken);

        return view('invoice',[
            'snapToken' => $snapToken,
            'paymentHeader' => $ph,
            'paymentDetails' => PaymentDetail::where('payment_header_id', $phid)->get()
        ]);

    }

    public function callback(Request $request){
        // dd($request);
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture' or $request->transaction_status == 'settlement'){
                $paymentHeader = PaymentHeader::find($request->order_id);
                $paymentHeader->update([
                    'status' => 'Paid'
                ]);

                $paymentDetails = PaymentDetail::where('payment_header_id', $request->order_id)->get();
                foreach($paymentDetails as $pd){
                    $product_id = $pd->product_id;
                    $product = Product::find($product_id);
                    // potong stok
                    $newStock = $product->stock - $pd->qty;
                    $product->update([
                        'stock' => $newStock
                    ]);
                }
            }
        }
    }

    public function invoice(){
        return view('invoice');
    }

    public function invoicePaid($id){
        return view('invoicePaid', [
            'paymentHeader' => PaymentHeader::find($id),
            'paymentDetails' => PaymentDetail::where('payment_header_id', $id)->get()
        ]);
    }

    // public function saveAddress(Request $request){
    //     // dump($request);
    //     // return view('index');
    //     // dd($request);
    //     if($request){
    //         $name = $request->name;
    //         $phone = $request->phone;
    //         $address = $request->address;
    //     }
    //     else{
    //         $name = auth()->user()->name;
    //         $phone = auth()->user()->phone;
    //         $address = auth()->user()->address;
    //     }
    //     return view('checkout', [
    //         'name' => $name,
    //         'phone' => $phone,
    //         'address' =>  $address
    //     ]);
    //     // Session::flash($name, $phone, $address);
    //     // return redirect('checkout')->with('name', $name)->with('phone', $phone)->with('address', $address);
    // }


}
