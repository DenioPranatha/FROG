@section('css')
    {{-- <link rel="stylesheet" href="assets/css/cart.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
@endsection

@extends('layouts.main')

@section('title', 'Cart')

@section('content')
{{-- @dd(auth()->user()->id) --}}
@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show p-3" style="width: 93.5%; margin:auto; margin-top:5px;" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    @if ($count == 0)
        <div class="emptyCart d-flex justify-content-center ">
            <div class="picture" style="background-image: url({{ asset('/assets/img/emptyCart.svg') }}"></div>
        </div>
        <div class="emptyText2 w-100 d-flex justify-content-center">
            <div class="emptyText">
                <p class="text-danger text1">Oops! Your cart is empty!</p>
                <p class="text2">Looks like you haven't added anything to your cart yet</p>
            </div>
        </div>
        <div class="btnDiv w-100">
            <a class="btn" href="/products">
                <p>Shop Now!</p>
            </a>
        </div>
    @else
        <div class="cartPage d-flex" data-aos="fade-up">
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
                        @php($total = 0)
                        @php($count = 0)
                        @foreach ($cartHeaders as $cartHeader)
                            @if ($cartHeader->user_id == auth()->user()->id)
                                @foreach ($cartDetails as $cartDetail)
                                    @if ($cartHeader->id == $cartDetail->cart_header_id)
                                        @php($count++)
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        Select All ({{ $count }} Products)
                    </div>
                </div>

                @foreach ($cartHeaders as $cartHeader)
                    @if ($cartHeader->user_id == auth()->user()->id)
                        <div class="cartCard">
                            <div class="selectEvent d-flex align-items-center">
                                <div class="checkHelp">
                                    <label class="checkDiv">
                                        <input type="checkbox" name="eventCheck" id="{{ $cartHeader->id }}" class="eventCheck">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <a href="/eventDetail/{{ $cartHeader->event->id }}" class="eventCart text-decoration-none">
                                    {{ $cartHeader->event->name }}
                                </a>
                            </div>
                            <div class="lineCart"></div>
                            <div class="productCart d-flex ">
                                <p class="productCartText">Product Details</p>
                                <p class="productPriceText">Price</p>
                                <p class="productTotalText">Total</p>
                            </div>
                            <div class="productCartLine"></div>
                            <div class="productGroup" id="productGroup">
                                <div class="d-none" id="result"></div>
                                @include('cartResult')
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
                <form action="/checkout" method="post" id="checkoutForm">
                    @csrf
                    <div class="btnClass d-flex justify-content-center">
                        <input type="hidden" name="checkedItems" id="checkedItems">
                        <input type="hidden" name="checkedHeaders" id="checkedHeaders">
                        <input type="hidden" name="totalItems" id="totalItems">
                        <input type="hidden" name="totalPayments" id="totalPayments">

                        <button type="submit" class="btn" id="checkoutBtn">
                        {{-- <button type="submit" onclick="checkout()" class="btn" id="checkoutBtn"> --}}
                            {{-- Checkout Now! --}}
                            See Summary
                        </button>
                    </div>
                </form>
            </div>
            {{-- <div class="coba">
                akfdshaksdjf
            </div> --}}
        </div>
    @endif
@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/cart.js')}}"></script>
@endsection

