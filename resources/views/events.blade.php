@section('css')
    <link rel="stylesheet" href="assets/css/events.css">
@endsection

@extends('layouts.main')

@section('title', 'Events')

@section('content')

    <div class="banner-container" id="banner" data-bs-ride="carousel">
        <div class="banner-inner">
            <div class="banner-item">
                <div class="banner d-block" style="background-image: url({{ asset('assets/img/banner.png') }})"></div>
            </div>
            <div class="banner-item">
                <div class="banner d-block" style="background-image: url({{ asset('assets/img/banner.png') }})"></div>
            </div>
            <div class="banner-item">
                <div class="banner d-block" style="background-image: url({{ asset('assets/img/banner.png') }})"></div>
            </div>
        </div>
    </div>

    <div class="header" data-aos="fade-up" data-aos-duration="1000">Popular Events</div>
    <div id="carouselExample" class="carousel">
        <div class="carousel-inner">
            @for($i = 0; $i < 10; $i++)
            <div class="carousel-item">
                <a href="/eventDetail" class="custom-card">
                    @include('partials.eventCart')
                </a>
            </div>
            @endfor
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>
    <div class="search-row">
        <div class="form-group bubble-box" id="form-group">
            <input type="text" name="search-event" id="search-event" placeholder="Search event or category" class="no-outline">
            <button class="search-button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="search">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </button>
        </div>
        <a href="" class="custom-card">
            <div class="bubble-box">Category 1</div>
        </a>
        <a href="" class="custom-card">
            <div class="bubble-box">Category 2</div>
        </a>
        <a href="" class="custom-card">
            <div class="bubble-box">Category 3</div>
        </a>
    </div>
    <br>

    <div class="catalog-container">
        @for($i = 0; $i < 20; $i++)
            <a href="/eventDetail" class="custom-card">
                @include('partials.eventCart')
            </a>
        @endfor
    </div>

    <span id="more">
        <div class="catalog-container">
            @for ( $i=0 ; $i<20 ; $i++)
                <a href="/eventDetail" class="custom-card">
                    @include('partials.eventCart')
                </a>
            @endfor
        </div>
    </span>

    <div class="more-products">
        <div class="line1"></div>
        <button class="more" id="myBtn">More Products</button>
        <div class="line1"></div>
    </div>


    @endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/events.js')}}"></script>
@endsection
