@section('css')
    {{-- <link rel="stylesheet" href="/assets/css/events.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/events.css') }}">
@endsection

@extends('layouts.main')

@section('title', 'Events')

@section('content')

    {{-- <div class="banner-container" id="banner" data-bs-ride="carousel">
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
    </div> --}}
    <div class="bannerDiv">
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
            {{-- <p>keren bet lo</p> --}}
        </div>
    </div>

    {{-- <div class="header" data-aos="fade-up" data-aos-duration="1000">Popular Events</div> --}}
    <div class="header">Popular Events</div>
    <div id="carouselExample" class="carousel popular-carousel">
        <div class="carousel-inner popular-carousel-inner">
            @foreach($popular as $event)
            <div class="carousel-item2">
                <a href="/eventDetail/{{ $event->id }}" class="custom-card">
                    @include('partials.eventCart', ['event' => $event])
                </a>
            </div>
            @endforeach
        </div>

        <button class="carousel-control-prev popular-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next popular-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>
    <div class="section5">
        <div id="section5"></div>
    </div>
    <div class="search-row" data-aos="fade-up">
        <form action="/events#section5">
            @csrf
            <div id="bubble-box">
                <input type="text" name="search-event" id="search-event" placeholder="Search event or category" class="no-outline" value={{ request('search-event') }}>
                <button class="search-button" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="search">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </button>
            </div>
        </form>

        <button class="bubble-box bbox-resposive"   value="All">All</button>
        @foreach ($cat as $c)
            <button class="bubble-box bbox-resposive"  value="{{ $c->name }}">{{ $c->name }}</button>
        @endforeach

    </div>

    <br>

    <div id="result-container1" data-aos="fade-up">
        @include('eventsResult')
    </div>

    <div id="hi">

    </div>

    {{-- <div class="finished-header">Finished Events</div>

    <div class="finished" data-aos="fade-up">
        <div class="catalog-container">
            @foreach($finisheds as $finished)
                @include('partials.eventCart', ['event' => $finished])
            @endforeach
        </div>
    </div>
    <div class="gap"></div>
    <div class="gap"></div> --}}


@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/events.js')}}"></script>
@endsection
