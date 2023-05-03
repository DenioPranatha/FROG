@section('css')
    <link rel="stylesheet" href="assets/css/myEvents.css">
@endsection

@extends('layouts.main')

@section('title', 'My Events')

@section('content')
    <div class="container">
        <h1 class="section-title">Your Ongoing Events</h1>

        <div class="card-container">
            @for ($i = 0; $i <2; $i++)

            <a href="myEventDetail" class="card-container">
                <div class="card">
                    <div class="card-image">
                        <div class="event-image" style="background-image: url({{ asset('assets/img/Event-image.png') }})"></div>
                    </div>
                    <div class="card-section-box d-flex align-items-center justify-content-end">
                        <div class="card-section-box-text d-flex align-items-center justify-content-center ">
                            <p>Your Ongoing Event</p>
                        </div>
                        <div class="card-section-box-icon d-flex align-items-center">
                            <a href="#">
                                <div class="card-section-box-icon1">
                                    <img src="assets/img/add-product 2.svg" alt="">
                                </div>
                            </a>
                            <a href="#">
                                <div class="card-section-box-icon2">
                                    <img src="assets/img/pencil-square.svg" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </a>
            @endfor
            <a href="myEventDetail" class="card-container">
                <div class="card-add">
                    <div class="card-section-box-add">
                        <a href="myEventDetail">
                            <div class="card-section-box-add-img">
                                <img src="assets/img/add-button.svg" alt="" width="100px" height="100px">
                            </div>
                        </a>
                    </div>
                </div>
            </a>
        </div>

        <h1 class="section-title-finished">Your Finished Events</h1>
        <div class="card-container">
            @for ($i = 0; $i < 2; $i++)
            <a href="myEventDetail" class="card-container">
                <div class="card">
                    <div class="card-image">
                        <div class="event-image" style="background-image: url({{ asset('assets/img/Event-image.png') }})"></div>
                    </div>
                    <div class="card-section-box-finished">
                        <div class="card-section-box-text-finished">
                            <p>Your Finished Event</p>
                        </div>
                    </div>
                </div>
            </a>
            @endfor
        </div>
    </div>
@endsection

