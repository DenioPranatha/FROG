@section('css')
    <link rel="stylesheet" href="assets/css/cart.css">
@endsection

@extends('layouts.main')

@section('title', 'Cart')

@section('content')
{{-- @dd(auth()->user()->id) --}}
    <div class="cartPage d-flex">
        <div class="leftCart">
            <div class="cartTitle">
                Your Cart
            </div>
            <div class="cartLine"></div>
            <div class="selectAll d-flex align-items-center">
                <div class="checkHelp">
                    <label class="checkDiv">
                        <input type="checkbox" name="selectAll" id="selectAll" class="selectAll2">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="selectAllText">
                    {{-- $tes = 0 --}}
                    {{-- @dd($count) --}}
                    @php($total = 0)
                    @php($count = 0)
                    @foreach ($cartHeaders as $cartHeader)
                        @if ($cartHeader->user_id == auth()->user()->id)
                            @foreach ($cartDetails as $cartDetail)
                                {{-- @if ($cartDetail->cartHeader->user->id == auth()->user()->id && $cartDetail->cartHeader->event_id == ($loop->parent->index+1)) --}}

                                @if ($cartHeader->id == $cartDetail->cart_header_id)
                                    @php($count++)
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    {{-- @dd($count) --}}
                    Select All ({{ $count }} Products)
                </div>
            </div>

            @foreach ($cartHeaders as $cartHeader)
                @if ($cartHeader->user_id == auth()->user()->id)
                    {{-- <p>{{ $loop->index }}</p> --}}
                    <div class="cartCard">
                        <div class="selectEvent d-flex align-items-center">
                            <div class="checkHelp">
                                <label class="checkDiv">
                                    <input type="checkbox" name="eventCheck" id="{{ $cartHeader->id }}" class="eventCheck">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="eventCart">
                                {{ $cartHeader->event->name }}
                            </div>
                        </div>
                        <div class="lineCart"></div>
                        <div class="productCart d-flex ">
                            <p class="productCartText">Product Details</p>
                            <p class="productPriceText">Price</p>
                            <p class="productTotalText">Total</p>
                        </div>
                        <div class="productCartLine"></div>
                        <div class="productGroup">
                            @foreach ($cartDetails as $cartDetail)
                                {{-- @if ($cartHeader->id == $cartDetail->cart_header_id)

                                @endif --}}
                                {{-- <p>{{ $loop->parent->index }}</p> --}}
                                {{-- @if ($cartDetail->cartHeader->user->id == auth()->user()->id && $cartDetail->cartHeader->event_id == ($loop->parent->index+1)) --}}
                                @if ($cartHeader->id == $cartDetail->cart_header_id)
                                    <div class="eachProduct d-flex align-items-center">
                                        <div class="checkHelp">
                                            <label class="checkDiv">
                                                <input type="checkbox" name="itemCheck" class="itemCheck {{ $cartDetail->cart_header_id }}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="eachProductImage" style="background-image: url({{ asset('/assets/images/product').'/'.$cartDetail->product->image}} )"></div>
                                        <div class="eachProductDesc">
                                            <div class="productDescName">{{ $cartDetail->product->name }}</div>
                                            <div class="productDescQtyText">Quantity:</div>
                                            <div class="productDescQty d-flex justify-content-start align-items-center">
                                                <div class="qtyDiv d-flex justify-content-center align-items-center">

                                                    <form action="/cartMinus" method="post">
                                                        @csrf
                                                        <input type="hidden" name="num" class="numMinus">
                                                        <input type="hidden" name="cart_header_id" value="{{ $cartDetail->cartHeader->id }}">
                                                        <input type="hidden" name="product_id" value="{{ $cartDetail->product->id }}">
                                                        <button onclick="cartMinus()" class="minus d-flex justify-content-center align-items-center m-0 pb-1" style="height: 18.5px" id="minus">
                                                            -
                                                        </button>
                                                        {{-- <div class="minus d-flex justify-content-center align-items-center" id="minus">
                                                            -
                                                        </div> --}}
                                                    </form>
                                                    <div class="productQty d-flex justify-content-center align-items-center">
                                                        <form action="" method="get" class="qtyForm">
                                                            <input type="text" name="productQty" id="productQty" value="{{ $cartDetail->qty }}" class="prodQty">
                                                        </form>
                                                    </div>
                                                    <form action="/cartPlus" method="post">
                                                        @csrf
                                                        <input type="hidden" name="num" class="numPlus">
                                                        <input type="hidden" name="cart_header_id" value="{{ $cartDetail->cartHeader->id }}">
                                                        <input type="hidden" name="product_id" value="{{ $cartDetail->product->id }}">
                                                        <button onclick="cartPlus()" class="plus d-flex justify-content-center align-items-center m-0 pb-1" style="height: 18.5px" id="plus">
                                                            +
                                                        </button>
                                                    </form>
                                                    {{-- <div class="plus d-flex justify-content-center align-items-center" id="plus">
                                                        +
                                                    </div> --}}
                                                </div>
                                                <div class="trash d-flex align-items-center">
                                                    <div class="slash"></div>
                                                    <i class="bi bi-trash3"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="eachProductPrice">
                                            <p class="eachProductPrice2">Rp{{ $cartDetail->product->price }}</p>
                                            {{-- <p class="eachProductPrice2">Rp. {{ number_format( $cartDetail->product->price , 0 , ' ' , ' ' ) }}</p> --}}
                                            {{-- Rp. {{ number_format( $product->price , 0 , ' ' , ' ' ) }} --}}
                                        </div>
                                        <div class="eachProductTotal">
                                            <p class="eachProductTotal2">Rp{{ ($cartDetail->product->price)*($cartDetail->qty) }}</p>
                                            {{-- <p class="eachProductTotal2">Rp. {{ number_format( ($cartDetail->product->price)*($cartDetail->qty) , 0 , ' ' , ' ' ) }}</p> --}}
                                            {{-- Rp. {{ number_format( $product->price , 0 , ' ' , ' ' ) }} --}}
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
        <div class="rightCart" id="rightCart">
            <div class="summaryTitle">
                Order Summary
            </div>
            <div class="summaryLine"></div>
            <div class="summaryTotalItem">
                <p class="totalItemText">Total Items</p>
                <p class="totalItem">0 Items</p>
            </div>
            <div class="summaryTotalPayment">
                <p class="totalPaymentText">Total Payment</p>
                <p class="totalPayment">Rp0</p>
            </div>
            <div class="btnClass d-flex justify-content-center">
                <a href="checkout" class="btn">
                    Checkout Now!
                </a>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/cart.js')}}"></script>
@endsection

