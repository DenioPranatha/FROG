@section('css')
    <link rel="stylesheet" href="assets/css/products.css">
@endsection

@extends('layouts.main')

@section('title', 'Products')

@section('content')
    <div class="productsPage w-100">
        <div class="searchDiv">
            <form action="" method="post" class="h-100 d-flex justify-content-center align-items-center">
                <input type="text" name="searchBox" id="searchBox" class="searchBox" placeholder="Search events and products">
                <div class="searchLogo">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.25 26.25L19.7538 19.7538M19.7538 19.7538C21.512 17.9955 22.4997 15.6109 22.4997 13.1244C22.4997 10.6379 21.512 8.25322 19.7538 6.495C17.9955 4.73678 15.6109 3.74902 13.1244 3.74902C10.6379 3.74902 8.25322 4.73678 6.495 6.495C4.73678 8.25322 3.74902 10.6379 3.74902 13.1244C3.74902 15.6109 4.73678 17.9955 6.495 19.7538C8.25322 21.512 10.6379 22.4997 13.1244 22.4997C15.6109 22.4997 17.9955 21.512 19.7538 19.7538Z" stroke="#522E93" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </form>
        </div>
        <div class="categoriesDiv" data-aos="fade-up">
            <div class="categories">
                <a href="/products" class="categoriesCart"
                    @if ($cat_id == 0)
                        style="background-color: #522E93; color: white;"
                    @endif>
                    <p>All</p>
                </a>
                @foreach ($productCategories as $productCategory)
                    <form action="/products" method="POST">
                        @csrf
                        <input type="hidden" name="cat_id" value="{{ $productCategory->id }}">

                        {{-- @dd($cat_id) --}}
                        <button type="submit" class="categoriesCart" value="{{ $cat_id }}"
                            @if ($loop->iteration == $cat_id)
                                style="background-color: #522E93; color: white;"
                            @endif>
                            <p>{{ $productCategory->name }}</p>
                        </button>
                    </form>
                @endforeach
                <input type="hidden" name="cat_id1" id="cat_id1" value="{{ $cat_id }}">
            </div>
        </div>
        <div class="productsDiv" data-aos="fade-up">
            {{-- <div class="products d-flex flex-wrap">
                @foreach ($products as $product)
                    @include('partials.productCart', ['product' => $product])
                @endforeach
                @if (count($products) == 0)
                    <div class="w-100 p-4">
                        <h5 class="w-100 d-flex justify-content-center">Product with category {{ $productCategories->where('id', $request->cat_id)->first()->name }} is not found</h5>
                    </div>
                @endif
            </div> --}}
            {{-- @dd($pg) --}}
            {{-- @php
            $i = $pg + 1;
            @endphp
            <div class="fullBtn h-100 w-100 d-flex justify-content-around align-items-center">
                <div class="lineBtn"></div>
                <div class="btnDiv m-0 p-0 d-flex justify-content-center align-items-center" id="myBtn">
                    <button class="btn btn-1">
                        <div class="seeMore">
                            <p>More Products</p>
                        </div>
                    </button>
                </div>
                <div class="lineBtn"></div>
            </div> --}}

            @include('productsResult')
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/products.js')}}"></script>
@endsection
