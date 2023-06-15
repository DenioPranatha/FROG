@section('css')
    <link rel="stylesheet" href="assets/css/profile.css">
@endsection

@extends('layouts.main')

@section('title', 'Profile')

@section('content')
    <div class="container d-flex flex-row justify-content-center align-items-center">
        <div class="left-side d-flex flex-column justify-content-center align-items-center">
            <div class="img-container  rounded-circle" style="background-image: url({{ asset('/assets/img/Vector.png') }})"></div>
            <h3>Alfredo Kusuma Wijaya</h3>
            <button>Edit Profile</button>
        </div>
        <div class="right-side d-flex flex-column justify-content-center align-items-center">
            <div class="box d-flex flex-column">
                <div class="content">
                    <h3>Username</h3>
                    <p>Alfredo Kusuma Wijaya</p>
                </div>

                <div class="content">
                    <h3>Email</h3>
                    <p>Alfredowk@gmail.com</p>
                </div>

                <div class="content">
                    <h3>Phone Number</h3>
                    <p>+620303030303</p>
                </div>

                <div class="content">
                    <h3>Address</h3>
                    <p>Jl. Pegangsaan Timur No 56 RT.1/RW.1, Pegangsaan, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310</p>
                </div>
            </div>


        </div>
    </div>
@endsection

