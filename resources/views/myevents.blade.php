@section('css')
    <link rel="stylesheet" href="assets/css/myEvents.css">
@endsection

@extends('layouts.main')

@section('title', 'My Events')

@section('content')
    <div class="container">
        <h1 class="section-title">Your Ongoing Events</h1>

        <div class="card-container">
            <a href="myEventDetail" class="card-container">
                <div class="card">
                    <div class="card-image">
                        <img class="event-image" src="assets/img/Event-image.png" alt="">
                    </div>
                    <div class="card-section-box">
                        <div class="card-section-box-text">
                            <p>Your Ongoing Event</p>
                        </div>
                        <a href="#">
                            <div class="card-section-box-icon1">
                                <img src="assets/img/add-product 2.svg" alt="">
                            </div>
                        </a>
                        <a href="#">
                            <div class="card-section-box-icon2">
                                <img src="assets/img/edit 1 (1).svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </a>
            <a href="myEventDetail" class="card-container">
                <div class="card">
                    <div class="card-image">
                        <img class="event-image" src="assets/img/Event-image.png" alt="">
                    </div>
                    <div class="card-section-box">
                        <div class="card-section-box-text">
                            <p>Your Ongoing Event</p>
                        </div>
                        <a href="#">
                            <div class="card-section-box-icon1">
                                <img src="assets/img/add-product 2.svg" alt="">
                            </div>
                        </a>
                        <a href="#">
                            <div class="card-section-box-icon2">
                                <img src="assets/img/edit 1 (1).svg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </a>
        </div>

        <h1 class="section-title-finished">Your Finished Events</h1>
        <div class="card-container">
            <a href="myEventDetail" class="card-container">
                <div class="card">
                    <div class="card-image">
                        <img class="event-image" src="assets/img/Event-image.png" alt="">
                    </div>
                    <div class="card-section-box-finished">
                        <div class="card-section-box-text-finished">
                            <p>Your Finished Event</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="myEventDetail" class="card-container">
                <div class="card">
                    <div class="card-image">
                        <img class="event-image" src="assets/img/Event-image.png" alt="">
                    </div>
                    <div class="card-section-box-finished">
                        <div class="card-section-box-text-finished">
                            <p>Your Finished Event</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection

