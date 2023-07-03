@section('css')
    {{-- <link rel="stylesheet" href="assets/css/cart.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}">
@endsection

@extends('layouts.main')

@section('title', 'Cart')

@section('content')
{{-- @dd(auth()->user()->id) --}}
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
        {{-- <div class="btnDiv w-100 h-100 d-flex justify-content-center" data-aos="fade-right">
            <a class="btn btn-1" href="/products" role="button">
                <div class="seeMore">
                    <p>Shop now</p>
                    <i class="bi bi-arrow-right-short"></i>
                </div>
            </a>
        </div> --}}
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
                                            {{-- <div class="eachProductImage" style="background-image: url({{ asset('/assets/images/product').'/'.$cartDetail->product->image}} )"></div> --}}
                                            <div class="eachProductImage" style="background-image: url({{ asset('/storage').'/'.$cartDetail->product->image}} )"></div>
                                            <div class="eachProductDesc {{ $cartDetail->product->id }}">
                                                <div class="productDescName">{{ $cartDetail->product->name }}</div>
                                                <p class="stock d-none">{{ $cartDetail->product->stock }}</p>
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
                                                                <input type="text" name="productQty" id="productQty" value="{{ $cartDetail->qty }}" class="prodQty" readonly>
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
                                                    {{-- <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                                                    </form> --}}
                                                    <div class="trash d-flex align-items-center">
                                                        <div class="slash"></div>
                                                        <form action="/cartDelete" method="post">
                                                            {{-- @method('delete') --}}
                                                            @csrf
                                                            <input type="hidden" name="cart_header_id" value="{{ $cartDetail->cart_header_id }}">
                                                            <input type="hidden" name="product_id" value="{{ $cartDetail->product_id }}">
                                                            <button type="submit" class="trashBtn">
                                                                <i class="bi bi-trash3"></i>
                                                            </button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="eachProductPrice">
                                                <p class="eachProductPrice2">Rp{{ $cartDetail->product->price }}</p>
                                            </div>
                                            <div class="eachProductTotal">
                                                <p class="eachProductTotal2">Rp{{ ($cartDetail->product->price)*($cartDetail->qty) }}</p>
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
                <form action="/checkout" method="post" id="checkoutForm">
                    @csrf
                    <div class="btnClass d-flex justify-content-center">
                        <input type="hidden" name="checkedItems" id="checkedItems">
                        <button type="submit" class="btn" id="checkoutBtn">
                        {{-- <button type="submit" onclick="checkout()" class="btn" id="checkoutBtn"> --}}
                            Checkout Now!
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

