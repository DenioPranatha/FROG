@section('css')
    <link rel="stylesheet" href="assets/css/approval.css">
@endsection

@extends('layouts.main')

@section('title', 'Approval')

@section('content')
<div class="container d-flex flex-column align-items-center">
    <h3>Waiting for Approval</h3>
    <div class="card-container d-flex flex-row justify-content-left flex-wrap">
        @foreach ($event as $event )
            <div class="card-test">
                @include('partials.eventCart', ['event' => $event])
            </div>
        @endforeach
    </div>
</div>
@endsection
