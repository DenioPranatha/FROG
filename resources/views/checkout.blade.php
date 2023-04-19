@section('css')
    <link rel="stylesheet" href="assets/css/checkout.css">
@endsection

@extends('layouts.main')

@section('title', 'Check Out')

@section('content')

    <div class="gabung-box">

        <div class="checkout-box">
            <h1 class="checkout-title">Checkout</h1>
            <hr class="checkout-linebar">

            <div class="title-shipping-address">
                <img src="assets/img/location.svg" class="location-icon">
                <h2 class="shipping-address">Shipping Address</h2>
            </div>

            <div class="box-address">
                <div class="rincian-data">
                    <h1 class="nama">Alfredo Wijaya Kesuma</h1>
                    <h2 class="nomor-telepon">(+62) 812367780842</h2>
                    <h3 class="alamat">Jl. Pakuan No.3, Sumur Batu, Kec. Babakan Madang, Kabupaten Bogor, Jawa Barat 16810
                    </h3>
                </div>

                <div class="change-address">
                    <div class="box-change-address">
                        <img src="assets/img/pen.svg" class="pen-icon">
                        <h2 class="title-shipping-address">Change Address</h2>
                    </div>
                </div>
            </div>

            <div class="title-ordered-product">
                <img src="assets/img/cart.svg" class="ordered-icon">
                <h2 class="ordered-product">Ordered Product</h2>
            </div>

            <div class="product-box">
                <h1 class="title-event">Charity Action Of RTB</h1>
                <hr class="event-linebar">

                <div class="product-detail-box">
                    <div class="gambar">
                        <img src="assets/img/basreng.png" class=gambar-produk>
                    </div>
                    <div class="detail">
                        <h1 class="title-product">Basreng Ekstra Pedas Daun Jeruk</h1>
                        <h1 class="quantity"> Quantity : <span class="span-quantity"> 2 Items</span></h1>
                    </div>
                    <div class="harga">
                        <h1 class="title-harga">Rp 200.000</h1>
                    </div>
                </div>

                <div class="product-detail-box">
                    <div class="gambar">
                        <img src="assets/img/kaos.png" class="gambar-produk">
                    </div>
                    <div class="detail">
                        <h1 class="title-product">T-Shirt Nak Edgy</h1>
                        <h1 class="quantity"> Quantity : <span class="span-quantity"> 1 Items</span></h1>
                    </div>
                    <div class="harga">
                        <h1 class="title-harga">Rp 150.000</h1>
                    </div>
                </div>


                <h1 class="title-event">Tanah Longsor Payung</h1>
                <hr class="event-linebar">

                <div class="product-detail-box">
                    <div class="gambar">
                        <img src="assets/img/gelang.png" class=gambar-produk>
                    </div>
                    <div class="detail">
                        <h1 class="title-product">Gelang UWU</h1>
                        <h1 class="quantity"> Quantity : <span class="span-quantity"> 1 Items</span></h1>
                    </div>
                    <div class="harga">
                        <h1 class="title-harga">Rp 200.000</h1>
                    </div>
                </div>

                <div class="product-detail-box">
                    <div class="gambar">
                        <img src="assets/img/basreng.png" class="gambar-produk">
                    </div>
                    <div class="detail">
                        <h1 class="title-product">Basreng Ekstra Pedas Daun Jeruk</h1>
                        <h1 class="quantity"> Quantity : <span class="span-quantity"> 2 Items</span></h1>
                    </div>
                    <div class="harga">
                        <h1 class="title-harga">Rp 150.000</h1>
                    </div>
                </div>
            </div>

            <div class="option-shipping-box">
                <div class="title-option-shipping">
                    <img src="assets/img/boxcar.svg" class="shipping-icon">
                    <h2 class="shipping-option-title">Shipping Options</h2>
                </div>
            </div>

            <div class="grid-box">
                <div class="box" onclick="chooseitem">
                    <img src="assets/img/jne.png" class="gambar-jne">
                </div>
                <div class="box" onclick="chooseitem">
                    <img src="assets/img/pos.png" class="gambar-pos">
                </div>
                <div class="box" onclick="chooseitem">
                    <img src="assets/img/jnt.png" class="gambar-jnt">
                </div>
                <div class="box" onclick="chooseitem">
                    <img src="assets/img/tiki.png" class="gambar-tiki">
                </div>

            </div>


            <div class="option-payment-box">
                <div class="title-option-payment">
                    <img src="assets/img/payment.svg" class="payment-icon">
                    <h2 class="payment-option-title">Payment Method Options</h2>
                </div>
            </div>

            <div class="grid-box">
                <div class="box" onclick="chooseitem">
                    <img src="assets/img/bca.png" class="gambar-bca">
                </div>
                <div class="box" onclick="chooseitem">
                    <img src="assets/img/gopay.png" class="gambar-gopay">
                </div>
                <div class="box" onclick="chooseitem">
                    <img src="assets/img/dana.png" class="gambar-dana">
                </div>
                <div class="box" onclick="chooseitem">
                    <img src="assets/img/spay.png" class="gambar-spay">
                </div>

            </div>

        </div>

        <div class="summary-checkout">
            <div class="box-summary">
                <h1 class="title-checkout-summary">Checkout Summary</h1>
                <hr class="checkout-summary-linebar">

                <h1 class="subtotal">Subtotal (6 Barang) <span class="rp-1">Rp</span><span class="nominal">590.000</span></h1>

                <h1 class="shipping-subtotal">Shipping Subtotal <span class="rp-2">Rp</span><span class="shipping-nominal">10.000</span></h1>

                <h1 class="total-payment">Total Payment <span class="rp-3">Rp</span><span class="total-nominal">590.000</span></h1>


                <div class="pay-button">
                    <h1 class="pay-now-title">Pay Now !</h1>
                </div>



            </div>


        </div>

    </div>




    </div>



    @section('js')
    <script type="text/javascript" src="{{URL::asset('assets/js/checkout.js')}}"></script>
    @endsection


@endsection
