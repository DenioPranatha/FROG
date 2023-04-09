<link rel="stylesheet" href="assets/css/events.css">

@extends('layouts.main')

@section('title', 'Events')

@section('content')
    {{-- <a class="btn btn-primary" href="{{ route('product') }}">product</a> --}}

    <div class="banner">
        <img src="assets/img/banner.png" class="img-fluid" alt="Responsive image">
    </div>
    <div class="header" data-aos="fade-up" data-aos-duration="1000">Popular Events</div>
    <div id="carouselExample" class="carousel">
        <div class="carousel-inner">
            @for($i = 0; $i < 10; $i++)
            <div class="carousel-item">
                <a href="" class="custom-card">
                    <div class="card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="1000" data-aos-once="true">
                        <img src="assets/img/rtb.webp" class="card-img">
                        <div class="caption">
                            <p>RTB Chinese New Year Jualan</p>
                        </div>
                    </div>
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
        <div class="form-group bubble-box">
            <input type="text" name="search-event" id="search-event" placeholder="Search Event or categories" class="no-outline">
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
        @for($i = 0; $i < 25; $i++)
        <a href="" class="custom-card">
            <div class="card" data-aos="flip-left" data-aos-duration="1000" data-aos-once="true">
                <img src="assets/img/rtb.webp" class="card-img">
                <div class="caption">
                    <p>RTB Chinese New Year Jualan</p>
                </div>
            </div>
        </a>
        @endfor
    </div>




    <div class="pagination-container">
        <div class="prev">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
        </div>
        @for($i = 1; $i<=6; $i++)
        <a class="page-num">{{ $i }}</a>
        @endfor
        <div class="next">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </div>
    </div>
    @endsection

{{-- <script src="assets/js/events.js"></script> --}}

{{-- <script type="text/javascript" src="assets/js/events.js"></script> --}}

<script type="text/javascript" src="{{URL::asset('assets/js/events.js')}}"></script>
