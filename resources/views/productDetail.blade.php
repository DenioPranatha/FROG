@section('css')
    <link rel="stylesheet" href="/assets/css/productDetail.css">
@endsection

@extends('layouts.main')

@section('title', 'Product Detail')

@section('content')
@if (session()->has('success'))
    {{-- <div class="alert alert-success alert-dismissible fade show p-3 m-0" style="width: 25.5vw" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> --}}
@endif
{{-- <form action="" method="post">
    @csrf --}}
    {{-- <input type="hidden" name="product_id" value="{{ $product->id }}"> --}}
    <div class="productDetail">
        <div class="upperPart d-flex">
            <div class="imgDiv" data-aos="fade-right">
                {{-- <div class="productImage" style="background-image: url({{ asset("assets/img/gelang.png") }})"></div> --}}
                <div class="productImage" style="background-image: url({{ asset('/storage').'/'.$product->image}} )"></div>
                {{-- <div class="productImage" style="background-image: url({{ asset("assets/images/product"."/". $product->image) }})"></div> --}}
            </div>
            <div class="descDiv" data-aos="fade-left">
                <p class="productName">{{ $product->name }}</p>
                <a href="/eventDetail/{{ $product->event->id }}" class="eventName">{{ $product->event->name }}</a>
                {{-- <p class="productPrice">Rp{{ $product->price }}</p> --}}
                <p class="productPrice">Rp. {{ number_format( $product->price , 0 , ' ' , ' ' ) }}</p>

                <p class="qtyText">Quantity:</p>
                <div class="qtyStockDiv d-flex justify-content-start align-items-center">
                    <div class="qtyDiv d-flex justify-content-center align-items-center">
                        <div class="minus d-flex justify-content-center" id="minus">
                            -
                        </div>
                        <div class="productQty d-flex justify-content-center align-items-center">
                            <form action="" method="get" class="ms-3">
                                <input type="number" name="productQty" id="productQty" min="1" max="{{ $product->stock }}" oninput="checkStock(this)">
                            </form>
                        </div>
                        <div class="plus d-flex justify-content-center" id="plus">
                            +
                        </div>
                    </div>
                    <div class="stockDiv">
                        <p class="productStock" id="productStock">Stock:&nbsp;<b><span id="prodStock">{{ $product->stock }}</span></b></p>
                    </div>
                </div>
                <p class="productDesc">{{ $product->description }}</p>
                <div class="btnGroup d-flex justify-content-center align-items-center">

                    <form action="/cartAdd" method="post" id="cartBtn">
                        @csrf
                        <input type="hidden" name="qty" id="qtyCart">
                        <input type="hidden" name="event_id" id="event_id" value="{{ $product->event->id }}">
                        <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                        <button onclick="addToCart();swal(value,'','success')" class="btn p-0" id="type-success" value="Product Has Been Added">
                            <div class="cart2 d-flex justify-content-center align-items-center">
                                <div class="cartSvg">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.8125 3.75H4.545C5.1825 3.75 5.73875 4.17875 5.90375 4.79375L6.3825 6.59M6.3825 6.59C13.3458 6.39486 20.3024 7.16894 27.0525 8.89C26.0225 11.9575 24.7988 14.9375 23.3975 17.8125H9.375M6.3825 6.59L9.375 17.8125M9.375 17.8125C8.38044 17.8125 7.42661 18.2076 6.72335 18.9108C6.02009 19.6141 5.625 20.5679 5.625 21.5625H25.3125M7.5 25.3125C7.5 25.5611 7.40123 25.7996 7.22541 25.9754C7.0496 26.1512 6.81114 26.25 6.5625 26.25C6.31386 26.25 6.0754 26.1512 5.89959 25.9754C5.72377 25.7996 5.625 25.5611 5.625 25.3125C5.625 25.0639 5.72377 24.8254 5.89959 24.6496C6.0754 24.4738 6.31386 24.375 6.5625 24.375C6.81114 24.375 7.0496 24.4738 7.22541 24.6496C7.40123 24.8254 7.5 25.0639 7.5 25.3125ZM23.4375 25.3125C23.4375 25.5611 23.3387 25.7996 23.1629 25.9754C22.9871 26.1512 22.7486 26.25 22.5 26.25C22.2514 26.25 22.0129 26.1512 21.8371 25.9754C21.6613 25.7996 21.5625 25.5611 21.5625 25.3125C21.5625 25.0639 21.6613 24.8254 21.8371 24.6496C22.0129 24.4738 22.2514 24.375 22.5 24.375C22.7486 24.375 22.9871 24.4738 23.1629 24.6496C23.3387 24.8254 23.4375 25.0639 23.4375 25.3125Z" stroke="#522E93" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="cartText">Cart</div>
                            </div>
                        </button>
                    </form>

                    {{-- <a href="/cart" class="btn p-0">
                        <div class="cart2 d-flex justify-content-center align-items-center">
                            <div class="cartSvg">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.8125 3.75H4.545C5.1825 3.75 5.73875 4.17875 5.90375 4.79375L6.3825 6.59M6.3825 6.59C13.3458 6.39486 20.3024 7.16894 27.0525 8.89C26.0225 11.9575 24.7988 14.9375 23.3975 17.8125H9.375M6.3825 6.59L9.375 17.8125M9.375 17.8125C8.38044 17.8125 7.42661 18.2076 6.72335 18.9108C6.02009 19.6141 5.625 20.5679 5.625 21.5625H25.3125M7.5 25.3125C7.5 25.5611 7.40123 25.7996 7.22541 25.9754C7.0496 26.1512 6.81114 26.25 6.5625 26.25C6.31386 26.25 6.0754 26.1512 5.89959 25.9754C5.72377 25.7996 5.625 25.5611 5.625 25.3125C5.625 25.0639 5.72377 24.8254 5.89959 24.6496C6.0754 24.4738 6.31386 24.375 6.5625 24.375C6.81114 24.375 7.0496 24.4738 7.22541 24.6496C7.40123 24.8254 7.5 25.0639 7.5 25.3125ZM23.4375 25.3125C23.4375 25.5611 23.3387 25.7996 23.1629 25.9754C22.9871 26.1512 22.7486 26.25 22.5 26.25C22.2514 26.25 22.0129 26.1512 21.8371 25.9754C21.6613 25.7996 21.5625 25.5611 21.5625 25.3125C21.5625 25.0639 21.6613 24.8254 21.8371 24.6496C22.0129 24.4738 22.2514 24.375 22.5 24.375C22.7486 24.375 22.9871 24.4738 23.1629 24.6496C23.3387 24.8254 23.4375 25.0639 23.4375 25.3125Z" stroke="#522E93" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="cartText">Cart</div>
                        </div>
                    </a> --}}

                    <form action="/buyNow" method="POST" id="buyBtn">
                        @csrf
                        <input type="hidden" name="qty" id="qtyBuy">
                        <input type="hidden" name="event_id" id="event_id" value="{{ $product->event->id }}">
                        <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                        <button onclick="buyNow()" class="btn p-0 ms-3">
                            <div class="buy2 d-flex justify-content-center align-items-center">
                                <div class="buyText">Buy Now!</div>
                            </div>
                        </button>
                    </form>


                    {{-- <a href="/checkout" class="btn p-0 ms-3">
                        <div class="buy2 d-flex justify-content-center align-items-center">
                            <div class="buyText">Buy Now!</div>
                        </div>
                    </a> --}}

                </div>
            </div>
        </div>
        <div class="lowerPart">
            <div class="otherTitle d-flex align-items-center">
                <div class="otherText">
                    Other products from this event
                </div>
                <div class="otherLine ms-3"></div>
            </div>
            <div class="products2 d-flex flex-wrap" data-aos="fade-up">
                @foreach ($products as $product)
                    @include('partials.productCart', ['product' => $product])
                @endforeach
            </div>
        </div>
    </div>
{{-- </form> --}}
@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('/assets/js/productDetail.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/assets/js/swal.js')}}"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
