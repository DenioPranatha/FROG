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
        <button class="bubble-box" value="">All</button>
        @foreach ($categories as $category)
            <button class="bubble-box" value="">{{ $category->name }}</button>
        @endforeach
        {{-- <button class="bubble-box" value="">Natural Disaster</button>
        <button class="bubble-box" value="">Orphanage</button>
        <button class="bubble-box" value="">Health Assitance</button>
        <button class="bubble-box" value="">Public Facilities</button> --}}
    </div>
    <h1>Destination</h1>
    <div class="container-all-card d-flex flex-wrap alig-items-left">
        <a href="/createDestinationAdmin" class="add">
            <div class="card d-flex flex-column align-items-center justify-content-center">
                <svg width="91" height="91" viewBox="0 0 91 91" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M45.5 0.40625C20.636 0.40625 0.40625 20.636 0.40625 45.5C0.40625 70.364 20.636 90.5938 45.5 90.5938C70.364 90.5938 90.5938 70.364 90.5938 45.5C90.5938 20.636 70.364 0.40625 45.5 0.40625ZM45.5 7.34375C66.6143 7.34375 83.6562 24.3857 83.6562 45.5C83.6562 66.6143 66.6143 83.6562 45.5 83.6562C24.3857 83.6562 7.34375 66.6143 7.34375 45.5C7.34375 24.3857 24.3857 7.34375 45.5 7.34375ZM42.0312 24.6875V42.0312H24.6875V48.9688H42.0312V66.3125H48.9688V48.9688H66.3125V42.0312H48.9688V24.6875H42.0312Z" fill="#522E93"/>
                </svg>
                <p>Add Destination</p>
            </div>
        </a>
        @foreach ($destinations as $destination)
            @include('partials.destinationCardAdmin', ['destination' => $destination])
        @endforeach
    </div>
</div>


@endsection

