@section('css')
    {{-- <link rel="stylesheet" href="assets/css/allHistory.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/allHistory.css') }}">
@endsection

@extends('layouts.main')

@section('title', 'Profile')

@section('content')
    <div class="container">
        <h1>Purchase History</h1>
        <div class="flex-container d-flex flex-wrap justify-content-center" data-aos="fade-up">
            @for ($i = 0; $i <6; $i++)
                @include('partials.historyCard')
            @endfor
        </div>
    </div>
@endsection
