@section('css')
    <link rel="stylesheet" href="assets/css/cart.css">
@endsection

@extends('layouts.main')

@section('title', 'Cart')

@section('content')
    <div class="cartPage d-flex">
        <div class="leftCart">
            <div class="cartTitle">
                Your Cart
            </div>
            <div class="cartLine"></div>
            <div class="selectAll d-flex align-items-center">
                <div class="checkHelp">
                    <label class="checkDiv">
                        <input type="checkbox" name="" id="">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="selectAllText">
                    Select All (6 Items)
                </div>
            </div>
            @for ($j = 0; $j < 2; $j++)
                <div class="cartCard">
                    <div class="selectEvent d-flex align-items-center">
                        <div class="checkHelp">
                            <label class="checkDiv">
                                <input type="checkbox" name="" id="">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="eventCart">
                            Charity Action of RTB
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
                        @for ($i = 0; $i < 2; $i++)
                            <div class="eachProduct d-flex align-items-center">
                                <div class="checkHelp">
                                    <label class="checkDiv">
                                        <input type="checkbox" name="" id="">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="eachProductImage" style="background-image: url({{ asset("assets/img/gelang.png") }})"></div>
                                <div class="eachProductDesc">
                                    <div class="productDescName">Makaroni Pedas</div>
                                    <div class="productDescQtyText">Quantity:</div>
                                    <div class="productDescQty d-flex justify-content-start align-items-center">
                                        <div class="qtyDiv d-flex justify-content-center align-items-center">
                                            <div class="minus d-flex justify-content-center align-items-center" id="minus">
                                                -
                                            </div>
                                            <div class="productQty d-flex justify-content-center align-items-center">
                                                <form action="" method="get">
                                                    <input type="text" name="productQty" id="productQty" value="1" class="prodQty">
                                                </form>
                                            </div>
                                            <div class="plus d-flex justify-content-center align-items-center" id="plus">
                                                +
                                            </div>
                                        </div>
                                        <div class="trash d-flex align-items-center">
                                            <div class="slash"></div>
                                            <i class="bi bi-trash3"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="eachProductPrice">
                                    <p class="eachProductPrice2">Rp100000</p>
                                </div>
                                <div class="eachProductTotal">
                                    <p class="eachProductTotal2">Rp200000</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            @endfor
        </div>
        <div class="rightCart">
            <div class="summaryTitle">
                Order Summary
            </div>
            <div class="summaryLine"></div>
            <div class="summaryTotalItem">
                <p class="totalItemText">Total Items</p>
                <p class="totalItem">6 Items</p>
            </div>
            <div class="summaryTotalPayment">
                <p class="totalPaymentText">Total Payment</p>
                <p class="totalPayment">Rp590000</p>
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

