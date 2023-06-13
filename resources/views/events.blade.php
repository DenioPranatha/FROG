@section('css')
    <link rel="stylesheet" href="/assets/css/events.css">
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
            @foreach($popular as $event)
            <div class="carousel-item">
                <a href="/eventDetail/{{ $event->id }}" class="custom-card">
                    @include('partials.eventCart', ['event' => $event])
                </a>
            </div>
            @endforeach
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
    <div class="section5">
        <div id="section5"></div>
    </div>
    <div class="search-row">
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
        <button class="bubble-box" value="All">All</button>

        @foreach ($cat as $c)
            <button class="bubble-box" value="{{ $c->name }}">{{ $c->name }}</button>
        @endforeach

    </div>
    <br>

    @include('eventsResult')


@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/events.js')}}"></script>
@endsection
