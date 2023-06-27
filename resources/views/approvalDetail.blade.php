@section('css')
    <link rel="stylesheet" href="assets/css/approvalDetail.css">
@endsection

@extends('layouts.main')

@section('title', 'Approval Detail')

@section('content')
<div class="left-right">
    <div class="desc-container">
        <div class="pic" data-aos="fade-right">
            <div class="desc-img" style="background-image: url({{ asset('assets/img/rtb.webp') }})"></div>
        </div>
        <div class="desc" data-aos="fade-left">
            <div class="desc-headline">
                <b>RTB Chinese New Year Jualan</b>
            </div>
            <div class="desc-caption">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id odit, aut aliquid sapiente tenetur sequi adipisci excepturi culpa maiores veniam deserunt praesentium voluptate suscipit, maxime hic! Totam impedit necessitatibus deserunt libero quisquam dolorem eius ullam accusamus nisi quia!
            </div>
            <div class="desc-point"><b>Created By:</b> Lorem Ipsum</div>
            <div class="desc-point"><b>Event Duration:</b> Lorem Ipsum - Lorem Ipsum</div>
            <div class="desc-point"><b>Charity Destination:</b> Lorem Ipsum</div>
            <div class="desc-point"><b>Category:</b> Lorem Ipsum</div>

            <div class="button-container d-flex flex-row justify-content-center align-items-center">
                <button class="reject">Reject</button>
                <button class="approve">Approve</button>
            </div>
        </div>
    </div>
</div>
@endsection
