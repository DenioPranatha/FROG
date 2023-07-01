@section('css')
<link rel="stylesheet" href="assets/css/destinationAdmin.css">
@endsection

{{-- @extends('admin.mainAdmin') --}}
@extends('layouts.main')

@section('title', 'Destination')

@section('content')

<div class="all">
    <div class="search-row">
        <form action="">
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

        <button class="bubble-box purple-but" value="All">All</button>
        @foreach ($categories as $category)
            <button class="bubble-box"  value="{{ $category->name }}">{{ $category->name }}</button>
        @endforeach
    </div>

    @if (session()->has('deleted'))
        <div class="alert alert-success alert-dismissible fade show p-3 m-2" style="width: 100%" role="alert">
            {{ session('deleted') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('fail'))
        <div class="alert alert-danger alert-dismissible fade show p-3 m-2" style="width: 100%" role="alert">
            {{ session('fail') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h1>Destination</h1>
    <div id="destinationResult">
        @include('destinationResult')
    </div>
</div>


@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/destinationAdmin.js')}}"></script>
@endsection
