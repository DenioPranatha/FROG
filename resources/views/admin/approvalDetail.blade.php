@section('css')
    <link rel="stylesheet" href="/assets/css/approvalDetail.css">
@endsection

@extends('layouts.main')

@section('title', 'Approval Detail')

@section('content')
<div class="left-right">
    <div class="desc-container">
        <div class="pic" data-aos="fade-right">
            @if(file_exists(public_path('assets/images/event/' . $event->image)))
                <div class="desc-img" style="background-image: url({{ asset('/assets/images/event').'/'.$event->image}} )"></div>
            @else
                <div class="desc-img" style="background-image: url({{ asset('/storage') . '/' . $event->image }} )"></div>
            @endif
        </div>
        <div class="desc" data-aos="fade-left">
            <div class="desc-headline">
                <b>{{ $event->name }}</b>
            </div>
            <div class="desc-caption">
                {{ $event->description }}
            </div>
            <div class="desc-point"><b>Created By:</b> {{ $event->user->username }}</div>
            <div class="desc-point"><b>Event Duration:</b> {{ $event->duration }}</div>
            <div class="desc-point"><b>Charity Destination:</b> {{ $event->destination->name }}</div>
            <div class="desc-point"><b>Category:</b> {{ $event->destination->category->name }}</div>

            <div class="button-container d-flex flex-row justify-content-center align-items-center">
                <form action="/approvalDetail/{{ $event->id }}/edit" method="POST">
                    @csrf
                    <button type="submit" class="reject" name="isApproved" value="0">Reject</button>
                    <button type="submit" class="approve" name="isApproved" value="1">Approve</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
