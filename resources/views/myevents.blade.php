@section('css')
    {{-- <link rel="stylesheet" href="assets/css/myEvents.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/myEvents.css') }}">
@endsection

@extends('layouts.main')

@section('title', 'My Events')

@section('content')
    <div class="container">
        <h1 class="section-title">Your Ongoing Events</h1>

        <div class="card-container" data-aos="fade-up">
            @if(count($ongoings) != 0)
                @foreach ($ongoings as $ongoing)
                    @include('partials.ongoingEventCard', ['myEvent' => $ongoing])
                @endforeach
            @endif
            <a href="/createEvent" class="card-container">
                <div class="card-add">
                    <div class="card-section-box-add">
                        {{-- <a href="create"> --}}
                            <div class="card-section-box-add-img">
                                {{-- <img src="assets/img/add-button.svg" alt="" width="100px" height="100px"> --}}
                                <svg width="84" height="71" viewBox="0 0 84 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M31.9773 3.74512C14.3168 3.74512 0 17.708 0 34.9317C0 52.1565 14.3168 66.1184 31.9773 66.1184C49.6387 66.1184 63.9545 52.1565 63.9545 34.9317C63.9545 17.708 49.6387 3.74512 31.9773 3.74512ZM31.9773 62.2814C16.5492 62.2814 3.99716 49.9783 3.99716 34.9316C3.99716 19.885 16.5492 7.64332 31.9773 7.64332C47.4053 7.64332 59.9574 19.8851 59.9574 34.9316C59.9574 49.9781 47.4053 62.2814 31.9773 62.2814ZM45.9673 32.9826H33.9759V21.2876C33.9759 20.2117 33.0805 19.3384 31.9773 19.3384C30.8741 19.3384 29.9787 20.2117 29.9787 21.2876V32.9826H17.9872C16.884 32.9826 15.9886 33.8558 15.9886 34.9317C15.9886 36.0077 16.884 36.8809 17.9872 36.8809H29.9787V48.5759C29.9787 49.6518 30.8741 50.5251 31.9773 50.5251C33.0805 50.5251 33.9759 49.6518 33.9759 48.5759V36.8809H45.9673C47.0705 36.8809 47.9659 36.0077 47.9659 34.9317C47.9659 33.8558 47.0705 32.9826 45.9673 32.9826Z" fill="#522E93"/>
                                </svg>
                            </div>
                        {{-- </a> --}}
                    </div>
                </div>
            </a>
        </div>

        @if(count($waitings) != 0)
            <h1 class="section-title-finished">Waiting Approval Events</h1>
            <div class="card-container">
                @foreach ($waitings as $waiting)
                    @include('partials.myEventCard', ['myEvent' => $waiting])
                @endforeach
            </div>
        @endif

        @if(count($finisheds) != 0)
            <h1 class="section-title-finished">Your Finished Events</h1>
            <div class="card-container">
                @foreach ($finisheds as $finished)
                    @include('partials.myEventCard', ['myEvent' => $finished])
                @endforeach
            </div>
        @endif

        @if(count($rejecteds) != 0)
            <h1 class="section-title-finished">Your Rejected Events</h1>
            <div class="card-container">
                @foreach ($rejecteds as $rejected)
                    @include('partials.myEventCard', ['myEvent' => $rejected])
                @endforeach
            </div>
        @endif

        <div class="gap">

        </div>
    </div>
@endsection

