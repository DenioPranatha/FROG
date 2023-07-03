@section('css')
    {{-- <link rel="stylesheet" href="/assets/css/events.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/invoice.css') }}">
@endsection

@extends('layouts.main')

@section('title', 'Invoice')

@section('content')
<div class="container d-flex justify-content-center align-items-center">
    <div class="box">
        <div class="header d-flex flex-row align-items-center">
            <img src="./assets/img/frog.ico" alt="">
            <h1>Frog</h1>
            <div class="line-inheader"></div>
            <p>Invoice</p>
        </div>
        <div class="content d-flex flex-column">
            <div class="notes d-flex flex-column">
                <h3>Order Notes</h3>
                <div class="box-notes d-flex flex-column">
                    <div class="name">
                        <p>Name : Alfredo Wijaya Kusuma</p>
                    </div>
                    <div class="phone-number">
                        <p>Phone Number : (+62) 812367780842</p>
                    </div>
                    <div class="address">
                        <p>Address : Jl. Pakuan No. 3, Sumur Batu, Kec. Babakan Madang, Kabupaten Bogor, Jawa Barat 16810</p>
                    </div>
                </div>
            </div>
            <div class="number-time d-flex flex-row">
                <div class="order d-flex flex-column">
                    <h3>Order Number</h3>
                    <p>Fr-1</p>
                </div>
                <div class="time d-flex flex-column">
                    <h3>Payment Time</h3>
                    <p>03/07/2023</p>
                </div>
            </div>
            <div class="order-detail d-flex flex-column">
                <h3>Order Detail's (2 Products)</h3>
                <div class="detail-content d-flex flex-row">
                    <div class="no">No.</div>
                    <div class="product">Product</div>
                    <div class="quantity-order">Quantity</div>
                    <div class="total">Total Price</div>
                    <div class="event">Event Name</div>
                </div>
                <div class="line-indetail">
                </div>
                @for ($i=1; $i<3; $i++)
                <div class="detail-content d-flex flex-row">
                    <div class="no">1</div>
                    <div class="product">Basreng Pedas</div>
                    <div class="quantity-order">10</div>
                    <div class="total">Rp. 500.000</div>
                    <div class="event">Charity RTB</div>
                </div>
                @endfor
            </div>
            <div class="last-content d-flex flex-row">
                <div class="last-head d-flex flex-column">
                    <div class="head-content">
                        <p>Subtotal :</p>
                    </div>
                    <div class="head-content">
                        <p>Shipping Subtotal :</p>
                    </div>
                    <div class="head-content bold">
                        <p>Total Payment :</p>
                    </div>
                </div>
                <div class="last-main d-flex flex-column">
                    {{-- subtotal --}}
                    <div class="main-content">
                        Rp. 600.000
                    </div>
                    {{-- shipping --}}
                    <div class="main-content">
                        Rp. 10.000
                    </div>
                    {{-- total --}}
                    <div class="main-content bold">
                       Rp. 610.000
                    </div>
                </div>
            </div>
            <h3 class="status">Payment Status  :  Paid</h3>
        </div>
    </div>
</div>
@endsection
