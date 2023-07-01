@section('css')
    <link rel="stylesheet" href="assets/css/profile.css">
@endsection

@extends('layouts.main')

@section('title', 'Profile')

@section('content')
    <div id="main" class="outer-container-main">
        <div  class="container d-flex flex-row justify-content-center align-items-center">
            <div class="left-side d-flex flex-column justify-content-center align-items-center" data-aos="fade-right">
                @if (Auth::user()->image)
                    <div class="img-container  rounded-circle" style="background-image: url({{ asset('/storage') . '/' . Auth::user()->image }})"></div>
                @else
                    <div class="img-container  rounded-circle" style="background-image: url({{ asset('/assets/img/Vector.png') }})"></div>
                @endif
                {{-- <h3>Alfredo Kusuma Wijaya</h3> --}}
                <h3>{{ Auth::user()->name }}</h3>
                <button id="button-edit">
                    <i class="bi bi-pencil-square" style="font-size: 1.5vw; margin-right:0.5vw"></i>
                    Edit Profile
                </button>
            </div>
            <div class="right-side d-flex flex-column justify-content-center align-items-center" data-aos="fade-left">
                <div class="box d-flex flex-column">
                    <div class="content">
                        <h3>Username</h3>
                        {{-- <p>Alfredo Kusuma Wijaya</p> --}}
                        <p>{{ Auth::user()->username }}</p>
                    </div>

                    <div class="content">
                        <h3>Email</h3>
                        {{-- <p>Alfredowk@gmail.com</p> --}}
                        <p>{{ Auth::user()->email }}</p>
                    </div>

                    <div class="content">
                        <h3>Phone Number</h3>
                        {{-- <p>+620303030303</p> --}}
                        <p>+62{{ Auth::user()->phone }}</p>
                    </div>

                    <div class="content">
                        <h3>Address</h3>
                        {{-- <p>Jl. Pegangsaan Timur No 56 RT.1/RW.1, Pegangsaan, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310</p> --}}
                        <p>{{ Auth::user()->address }}</p>
                    </div>
                </div>


            </div>
        </div>
    </div>

    {{-- Edit Profile --}}
    <div id="edit" class="outer-container-edit">
        {{-- <form action=""> --}}
        <form id="edit-profile" action="/profile/{{ Auth::user()->id }}/edit" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container d-flex flex-row justify-content-center align-items-center" style="display: none">
                <div class="left-side d-flex flex-column justify-content-center align-items-center">
                    <div class="change-container d-flex flex-row">
                        @if (Auth::user()->image)
                            <div id="frame" class="img-container  rounded-circle" style="background-image: url({{ asset('/storage') . '/' . Auth::user()->image }})"></div>
                        @else
                            <div id="frame" class="img-container  rounded-circle" style="background-image: url({{ asset('/assets/img/Vector.png') }})"></div>
                        @endif
                        <div class="edit-photo d-flex justify-content-center align-items-center">
                           <label for="file" style="cursor: pointer"><i class="bi bi-camera"></i></label>
                           <input type="file" accept=".jpg,.jpeg,.png" id="file" style="display:none; visibility:none;" name="new-image">
                        </div>
                    </div>
                    <h3>{{ Auth::user()->name }}</h3>
                    <button id="save" type="submit">
                        <svg style="margin-bottom:0.2vw;margin-right:0.2vw" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="white" d="M21 7v12q0 .825-.588 1.413T19 21H5q-.825 0-1.413-.588T3 19V5q0-.825.588-1.413T5 3h12l4 4Zm-2 .85L16.15 5H5v14h14V7.85ZM12 18q1.25 0 2.125-.875T15 15q0-1.25-.875-2.125T12 12q-1.25 0-2.125.875T9 15q0 1.25.875 2.125T12 18Zm-6-8h9V6H6v4ZM5 7.85V19V5v2.85Z"/></svg>
                        Save Changes
                    </button>
                </div>
                <div class="right-side d-flex flex-column justify-content-center align-items-center">
                    <div class="box d-flex flex-column">
                        <div class="change-content">
                            <h3>Username</h3>
                            <input type="text" class="change-input rounded" placeholder="Username" name="new-username" value='{{Auth::user()->username}}'>
                        </div>

                        <div class="change-content">
                            <h3>Email</h3>
                            <input type="email" class="change-input rounded" placeholder="Email" name="new-email" value='{{Auth::user()->email}}'>
                        </div>

                        <div class="change-content">
                            <h3>Phone Number</h3>
                            <input type="text" class="change-input rounded" placeholder="Phone Number" name="new-phone" value='{{Auth::user()->phone}}'>
                        </div>

                        <div class="change-content">
                            <h3>Address</h3>
                            <textarea class="rounded" name="change-address" id="change-address" placeholder="Address">{{Auth::user()->address}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/profile.js')}}"></script>
@endsection

