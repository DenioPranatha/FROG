@section('css')
    <link rel="stylesheet" href="assets/css/products.css">
@endsection

@extends('layouts.main')

@section('title', 'Products')

@section('content')
    <div class="productsPage w-100">
        <div class="searchDiv">
            {{-- ini form nya ada 2, takut bahaya --}}
            <form action="/products" method="post" class="h-100 d-flex justify-content-center align-items-center">
                @csrf
                <input type="text" name="searchBox" id="searchBox" class="searchBox" placeholder="Search events and products" value={{ request('search-box') }}>
                <div class="searchLogo">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.25 26.25L19.7538 19.7538M19.7538 19.7538C21.512 17.9955 22.4997 15.6109 22.4997 13.1244C22.4997 10.6379 21.512 8.25322 19.7538 6.495C17.9955 4.73678 15.6109 3.74902 13.1244 3.74902C10.6379 3.74902 8.25322 4.73678 6.495 6.495C4.73678 8.25322 3.74902 10.6379 3.74902 13.1244C3.74902 15.6109 4.73678 17.9955 6.495 19.7538C8.25322 21.512 10.6379 22.4997 13.1244 22.4997C15.6109 22.4997 17.9955 21.512 19.7538 19.7538Z" stroke="#522E93" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </form>
        </div>
        <div class="categoriesDiv" data-aos="fade-up">
            <div class="categories">
                <button class="categoriesCart purple-but" value="0"><p>All</p></button>
                @foreach ($productCategories as $productCategory)
                    <button class="categoriesCart" value="{{ $productCategory->id }}">
                        <p>{{ $productCategory->name }}</p>
                    </button>
                @endforeach
            </div>
        </div>
        <div class="productsDiv" data-aos="fade-up">
            <div id="result-container">
                @include('productsResult')
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/products.js')}}"></script>
@endsection
