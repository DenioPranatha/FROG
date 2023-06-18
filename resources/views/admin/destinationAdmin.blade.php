@section('css')
    <link rel="stylesheet" href="assets/css/destinationAdmin.css">
@endsection

@extends('admin.mainAdmin')

@section('title', 'Destination')

@section('content')

<div class="all">
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
        {{-- <button class="bubble-box" value="All">All</button> --}}
        <button class="bubble-box" value="">Bencana Alam</button>
        <button class="bubble-box" value="">Panti Asuhan</button>
        <button class="bubble-box" value="">Panti Jompo</button>
        <button class="bubble-box" value="">Fasilitas Umum</button>
    </div>
    <h1>Destination</h1>
    <div class="container-all-card d-flex flex-wrap alig-items-left">
        <a href="" class="add">
            <div class="card d-flex flex-column align-items-center justify-content-center">
                <svg width="91" height="91" viewBox="0 0 91 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M45.5 0.40625C20.636 0.40625 0.40625 20.636 0.40625 45.5C0.40625 70.364 20.636 90.5938 45.5 90.5938C70.364 90.5938 90.5938 70.364 90.5938 45.5C90.5938 20.636 70.364 0.40625 45.5 0.40625ZM45.5 7.34375C66.6143 7.34375 83.6562 24.3857 83.6562 45.5C83.6562 66.6143 66.6143 83.6562 45.5 83.6562C24.3857 83.6562 7.34375 66.6143 7.34375 45.5C7.34375 24.3857 24.3857 7.34375 45.5 7.34375ZM42.0312 24.6875V42.0312H24.6875V48.9688H42.0312V66.3125H48.9688V48.9688H66.3125V42.0312H48.9688V24.6875H42.0312Z" fill="#522E93"/>
                </svg>
                <p>Add Destination</p>
            </div>
        </a>
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
</div>


@endsection

