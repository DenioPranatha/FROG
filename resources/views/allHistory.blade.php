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
            @if(count($histories) != 0)
                @foreach($histories as $history)
                    @include('partials.historyCard')
                @endforeach
            @else
                <div class="gap">
                    This event has no purchase history
                </div>
            @endif
        </div>
    </div>
@endsection
