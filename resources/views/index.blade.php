@section('css')
    <link rel="stylesheet" href="/assets/css/index.css">
@endsection

@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="index w-100">
        <div class="searchDiv">
            <form action="/events#section5" class="h-100 d-flex justify-content-center align-items-center">
                @csrf
                <input type="text" name="search-event" id="searchBox" class="searchBox" placeholder="Search events and products" value={{ request('search-event') }}>
                <div class="searchLogo">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.25 26.25L19.7538 19.7538M19.7538 19.7538C21.512 17.9955 22.4997 15.6109 22.4997 13.1244C22.4997 10.6379 21.512 8.25322 19.7538 6.495C17.9955 4.73678 15.6109 3.74902 13.1244 3.74902C10.6379 3.74902 8.25322 4.73678 6.495 6.495C4.73678 8.25322 3.74902 10.6379 3.74902 13.1244C3.74902 15.6109 4.73678 17.9955 6.495 19.7538C8.25322 21.512 10.6379 22.4997 13.1244 22.4997C15.6109 22.4997 17.9955 21.512 19.7538 19.7538Z" stroke="#522E93" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </form>

            {{-- <form action="/events#section5">
                @csrf
                <div id="bubble-box">
                    <input type="text" name="search-event" id="search-event" placeholder="Search events and products" class="no-outline" value={{ request('search-event') }}>
                    <div class="searchLogo">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.25 26.25L19.7538 19.7538M19.7538 19.7538C21.512 17.9955 22.4997 15.6109 22.4997 13.1244C22.4997 10.6379 21.512 8.25322 19.7538 6.495C17.9955 4.73678 15.6109 3.74902 13.1244 3.74902C10.6379 3.74902 8.25322 4.73678 6.495 6.495C4.73678 8.25322 3.74902 10.6379 3.74902 13.1244C3.74902 15.6109 4.73678 17.9955 6.495 19.7538C8.25322 21.512 10.6379 22.4997 13.1244 22.4997C15.6109 22.4997 17.9955 21.512 19.7538 19.7538Z" stroke="#522E93" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
            </form> --}}
        </div>
        <div class="bannerDiv">
            {{-- <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="assets/img/banner.png" class="d-block w-100" alt="Brain Stroke Logo">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="assets/img/banner.png" class="d-block w-100" alt="Brain Stroke Code">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="assets/img/banner.png" class="d-block w-100" alt="Brain Stroke Prediction Team">
                    </div>
                </div>
            </div> --}}
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval='3000'>
                <div class="carousel-inner">
                  <div class="carousel-item item active" data-bs-interval="3000" data-id='1'>
                    <img src="assets/images/banner/banner-1-fix.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Social Support</h3>
                        <p>Lets help them who are in need</p>
                        <a class="carousel-control-prev prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <div class="num"></div>
                        <a class="carousel-control-next next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                  </div>
                  <div class="carousel-item item" data-bs-interval="3000" data-id='2'>
                    <img src="assets/images/banner/banner-2-fix.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Social Support</h3>
                        <p>Lets help them who are in need</p>
                        <a class="carousel-control-prev prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <div class="num"></div>
                        <a class="carousel-control-next next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                  </div>
                  <div class="carousel-item item" data-bs-interval="3000" data-id='3'>
                    <img src="assets/images/banner/banner-3-fix.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Social Support</h3>
                        <p>Lets help them who are in need</p>
                        <a class="carousel-control-prev prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <div class="num"></div>
                        <a class="carousel-control-next next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                  </div>
                  <div class="carousel-item item" data-bs-interval="3000" data-id='4'>
                    <img src="assets/images/banner/banner-4-fix.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Social Support</h3>
                        <p>Lets help them who are in need</p>
                        <button class="carousel-control-prev prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <div class="num"></div>
                        <button class="carousel-control-next next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="recommendDiv">
            <div class="section-title-first">
                Recommended events for you
            </div>
            <div id="carouselExample" class="carousel d-flex flex-wrap">
                <div class="carousel-inner">
                    {{-- <div class="carousel-item active">
                        @include('partials.eventCart', ['event' => $events[0]])
                    </div> --}}
                    @foreach ($events as $event)
                        <div class="carousel-item">
                            @include('partials.eventCart', ['event' => $event])
                        </div>
                    @endforeach
                </div>
                    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button> --}}
                    <button class="carousel-control-prev recommend-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next recommend-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="recProductsDiv">
                <div class="section-title">
                    Recommended products for you
                </div>
                <div class="products d-flex flex-wrap">
                    @foreach ($products as $product)
                        @include('partials.productCart', ['product' => $product])
                    @endforeach
                </div>
                <div class="btnDiv w-100 h-100 d-flex justify-content-center">
                    <a class="btn btn-1" href="/products" role="button">
                        <div class="seeMore">
                            <p>See more</p>
                            <i class="bi bi-arrow-right-short"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="charityDestDiv">
                <div class="section-title2">
                    Charity Destination
                </div>
                <section id="slider">
                    <div class="container">
                        <div class="slider">
                            <div class="owl-carousel">
                                @foreach ($destinations as $destination)
                                    <a href="/destination">
                                        <div class="slider-card">
                                            <div class="kotakLuar d-flex justify-content-center align-items-center mb-4">
                                                {{-- <div class="destImg" style="background-image: url({{ asset("/assets/img/banner.png") }})"></div> --}}
                                                {{-- <img src="{{ asset("/assets/img/PantiAsuhan.png") }}" alt="" > --}}
                                                <div class="destImg" style="background-image: url({{ asset('/assets/images/destination').'/'.$destination->image}} )"></div>
                                            </div>
                                            <h5 class="mb-0 text-center charityText"><b>{{ $destination->name }}</b></h5>
                                            <div class="charityLoc pt-1 d-flex justify-content-center align-items-center">
                                                <i class="bi bi-geo-alt"></i>
                                                <p class="text-center">{{ $destination->location }}</p>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
                <div class="btnDiv w-100 h-100 d-flex justify-content-center">
                    <a class="btn btn-1 btn-2" href="/destination" role="button">
                        <div class="findDest">
                            <p>Find Destination</p>
                            <i class="bi bi-arrow-right-short"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="categoriesDiv">
                <div class="section-title3">
                    Categories
                </div>
                <div class="categories">
                    @foreach ($productCategories as $productCategory)
                        {{-- <a href="/products" class="categoriesCart">
                            <p>{{ $productCategory->name }}</p>
                        </a> --}}

                        <form action="/products" method="POST">
                            @csrf
                            <input type="hidden" name="cat_id" value="{{ $productCategory->id }}">

                            <button type="submit" class="categoriesCart">
                                <p>{{ $productCategory->name }}</p>
                            </button>

                        </form>

                    @endforeach
                    <a href="/products">
                        <div class="categoriesCart">
                            <p>See all products...</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('/assets/js/index.js')}}"></script>
@endsection
