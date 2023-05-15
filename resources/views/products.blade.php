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
        <div class="categoriesDiv">
            <div class="categories">
                @for ($i =0 ; $i <3 ; $i++)
                    <div class="categoriesCart">
                        <p>Category 1</p>
                    </div>
                    <div class="categoriesCart">
                        <p>asdfhajdfhjadfadf</p>
                    </div>
                    <div class="categoriesCart">
                        <p>Cated</p>
                    </div>
                    <div class="categoriesCart">
                        <p>Cated</p>
                    </div>
                    <div class="categoriesCart">
                        <p>Categorydga</p>
                    </div>
                    @endfor
                {{-- <a href="events">
                    <div class="categoriesCart">
                        <p>See more...</p>
                    </div>
                </a> --}}
            </div>
        </div>
        <div class="productsDiv">
            <div class="products d-flex flex-wrap">
                {{-- @for ( $i=0 ; $i<20 ; $i++)
                    @include('partials.productCart')
                @endfor --}}
                @foreach ($products as $product)
                    @include('partials.productCart', ['product' => $product])
                @endforeach
            </div>
            <span id="more">
                <div class="products d-flex flex-wrap">
                    @foreach ($products as $product)
                        @include('partials.productCart', ['product' => $product])
                    @endforeach
                    {{-- @for ( $i=0 ; $i<20 ; $i++)
                        @include('partials.productCart')
                    @endfor --}}
                </div>
            </span>
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
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/products.js')}}"></script>
@endsection
