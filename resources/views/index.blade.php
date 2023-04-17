@section('css')
    <link rel="stylesheet" href="assets/css/index.css">
@endsection

@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="index w-100">
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
        <div class="bannerDiv">
            <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="assets/img/banner.png" class="d-block w-100" alt="Brain Stroke Logo">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="assets/img/banner.png" class="d-block w-100" alt="Brain Stroke Code">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="assets/img/banner.png" class="d-block w-100" alt="Brain Stroke Prediction Team">
                    </div>
                </div>
            </div>
        </div>
        <div class="recommendDiv">
            <div class="section-title">
                Recommended events for you
            </div>
            <div id="carouselExample" class="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="" class="custom-card">
                            <div class="card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="1000" data-aos-once="true">
                                <div class="card-img" style="background-image: url({{ asset('assets/img/rtb.webp') }})"></div>
                                <div class="caption">
                                    <p>Event Charity RTB Chinese New Year</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @for($i = 0; $i < 10; $i++)
                    <div class="carousel-item">
                        <a href="" class="custom-card">
                            <div class="card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="1000" data-aos-once="true">
                                <div class="card-img" style="background-image: url({{ asset('assets/img/gelang.png') }})"></div>
                                <div class="caption">
                                    <p>Event Charity RTB Chinese New Year</p>
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
        </div>
        <div class="recProductsDiv">
            <div class="section-title">
                Recommended products for you
            </div>
            <div class="products d-flex flex-wrap">
                @for ( $i=0 ; $i<10 ; $i++)
                    <a href="" class="custom-card">
                        <div class="card" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="1000" data-aos-once="true">
                            <div class="card-img" style="background-image: url({{ asset('assets/img/gelang.png') }})"></div>
                            <div class="caption">
                                <p>Event Charity RTB Chinese New Year</p>
                            </div>
                        </div>
                    </a>
                @endfor
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/index.js')}}"></script>
@endsection
