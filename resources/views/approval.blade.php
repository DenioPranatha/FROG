@section('css')
    <link rel="stylesheet" href="assets/css/approval.css">
@endsection

@extends('layouts.main')

@section('title', 'Approval')

@section('content')
<div class="container d-flex flex-column align-items-center">
    <h3>Waiting for Approval</h3>
    <div class="card-container d-flex flex-row justify-content-left flex-wrap">
        @foreach ($events as $event)
            <div class="card-test" data-aos="fade-up">
                <div class="eventCartPage">
                    <a href="/approvalDetail/{{ $event->id }}" class="custom-card">
                        <div class="card">
                            @if(file_exists(public_path('assets/images/event/' . $event->image)))
                                <div class="card-img" style="background-image: url({{ asset('/assets/images/event').'/'.$event->image}} )"></div>
                            @else
                                <div class="card-img" style="background-image: url({{ asset('/storage') . '/' . $event->image }} )"></div>
                            @endif
                            <div class="caption">
                                <p>{{ $event->name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
