@section('css')
    <link rel="stylesheet" href="assets/css/approval.css">
@endsection

@extends('layouts.main')

@section('title', 'Approval')

@section('content')
<div class="left-right">
    <div class="container d-flex flex-column align-items-center justify-content-center">
        <h3>Waiting for Approval</h3>
        <div class="card-container d-flex flex-row justify-content-left flex-wrap">
            @foreach ($events as $event)
                <div class="card-test" data-aos="fade-up">
                    @include('partials.eventCart', ['event' => $event])
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
