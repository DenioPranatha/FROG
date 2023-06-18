@section('css')
    <link rel="stylesheet" href="assets/css/destination.css">
@endsection

@extends('layouts.main')

@section('title', 'Destination')

@section('content')
    {{-- <div class="destination">
        <div class="atas">
            <div class="searchDiv">
                <form action="" method="post" class="h-100 d-flex justify-content-start align-items-center">
                    <input type="text" name="searchBox" id="searchBox" class="searchBox" placeholder="Search destination for your event">
                    <div class="searchLogo">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.25 26.25L19.7538 19.7538M19.7538 19.7538C21.512 17.9955 22.4997 15.6109 22.4997 13.1244C22.4997 10.6379 21.512 8.25322 19.7538 6.495C17.9955 4.73678 15.6109 3.74902 13.1244 3.74902C10.6379 3.74902 8.25322 4.73678 6.495 6.495C4.73678 8.25322 3.74902 10.6379 3.74902 13.1244C3.74902 15.6109 4.73678 17.9955 6.495 19.7538C8.25322 21.512 10.6379 22.4997 13.1244 22.4997C15.6109 22.4997 17.9955 21.512 19.7538 19.7538Z" stroke="#522E93" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </form>
            </div>

        </div>
    </div> --}}
    <div class="charityDestDiv">
        <div class="section-title2">
            Popular Destination
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
    </div>
    <br>
    <br>
    <div class="section-title3">
        Destination Near You
    </div>
    <br>
    <br>
    <br>
    <div class="container-all-card d-flex flex-wrap alig-items-left">
        @for ($i = 0; $i < 6; $i++)
            <a href="">
            <div class="container-card d-flex flex-row">
                <div class="card d-flex flex-row align-items-end" style="background-image: url({{ asset('/assets/img/PantiAsuhan.png') }})">
                </div>
                <div class="shadow d-flex flex-row align-items-end">
                    <div class="text">
                        <p class="head">Panti Asuhan Bakti Kasih</p>
                        <p class="sub">Bogor, Jawa Barat</p>
                    </div>
                    <div class="trash">
                        <button>
                            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.625 13.1111V21.4444M11.375 13.1111V21.4444M5.125 7.55556V24.2222C5.125 24.9589 5.45424 25.6655 6.04029 26.1864C6.62634 26.7073 7.4212 27 8.25 27H20.75C21.5788 27 22.3737 26.7073 22.9597 26.1864C23.5458 25.6655 23.875 24.9589 23.875 24.2222V7.55556M2 7.55556H27M6.6875 7.55556L9.8125 2H19.1875L22.3125 7.55556" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            </a>
        @endfor
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('/assets/js/destination.js')}}"></script>
@endsection

