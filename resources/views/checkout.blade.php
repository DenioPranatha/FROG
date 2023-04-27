@section('css')
    <link rel="stylesheet" href="assets/css/checkout.css">
@endsection

@extends('layouts.main')

@section('title', 'Check Out')

@section('content')

    <div class="all-content">

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

                    <div class="change-address" id="change-address">
                        <button class="box-change-address" data-toggle="modal" data-target="#exampleModal" onclick="togglepopup()">
                            <img src="assets/img/pen.svg" class="pen-icon">
                            <h2 class="title-shipping-address">Change Address</h2>
                        </button>
                    </div>
                </div>

                {{-- //////////////////////// --}}

                <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <div class="modal-content modal-css">
                    {{-- <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div> --}}
                    <div class="modal-body modal-css">
                        <form class="form-css">
                            {{-- <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea> --}}

                                <div class="view-box-change-address">
                                    <h1 class="current-address-title">Current Address</h1>

                                    <div class="box-address-change">
                                        <div class="rincian-data-change">
                                            <h1 class="nama-change">Alfredo Wijaya Kesuma</h1>
                                            <h2 class="nomor-telepon-change">(+62) 812367780842</h2>
                                            <h3 class="alamat-change">Jl. Pakuan No.3, Sumur Batu, Kec. Babakan Madang, Kabupaten Bogor, Jawa Barat 16810
                                            </h3>
                                        </div>
                                    </div>

                                    <h1 class="current-address-title">New Address</h1>

                                    <form action="#">

                                        <div class="name-container">
                                            <div class="first-name">

                                                <label for="fname" class="first-name-title">First name</label><br>
                                                <input type="text" id="fname" name="fname" placeholder="First Name" class="first-name-box">

                                            </div>
                                            <div class="last-name">

                                                <label for="lname" class="last-name-title">Last name</label><br>
                                                <input type="text" id="lname" name="lname" placeholder="Last Name" class="last-name-box">

                                            </div>
                                        </div>

                                        <div class="phone-number">

                                            <label for="pname" class="phone-number-title">Phone Number</label><br>
                                            <input type="text" id="pname" name="pname" placeholder="Phone Number" class="phone-number-box">

                                        </div>

                                        <div class="new-address">

                                            <label for="naddress" class="new-address-title">Address</label><br>
                                            <input type="text" id="naddress" name="naddress" class="new-address-box">

                                        </div>

                                        <div class="button-grid">
                                            <div class="save-button">

                                                {{-- <button onclick="closepopup()" class="save-button-box">Back</button> --}}
                                                <button class="save-button-box">Save Changes</button>

                                                {{-- <input type="submit" value="Save Changes" id="sbutton" name="sbutton"   onclick="closepopup()" class="save-button-box"> --}}

                                            </div>

                                            {{-- <div class="back-button">

                                                <button onclick="closepopup()" class="back-button">Back</button>

                                            </div> --}}


                                        </div>

                                    </form>

                            </div>
                        </form>
                    </div>
                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div> --}}
                    </div>
                </div>
                </div>


                {{-- //////////////////////// --}}

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
                    <button class="box-1" onclick="chooseitem_1">
                        <img src="assets/img/jne.png" class="gambar-jne">
                    </button>
                    <button class="box-1" onclick="chooseitem_1">
                        <img src="assets/img/pos.png" class="gambar-pos">
                    </button>
                    <button class="box-1" onclick="chooseitem_1">
                        <img src="assets/img/jnt.png" class="gambar-jnt">
                    </button>
                    <button class="box-1" onclick="chooseitem_1">
                        <img src="assets/img/tiki.png" class="gambar-tiki">
                    </button>

                </div>


                <div class="option-payment-box">
                    <div class="title-option-payment">
                        <img src="assets/img/payment.svg" class="payment-icon">
                        <h2 class="payment-option-title">Payment Method Options</h2>
                    </div>
                </div>

                <div class="grid-box">
                    <button class="box-2" onclick="chooseitem_2">
                        <img src="assets/img/bca.png" class="gambar-bca">
                    </button>
                    <button class="box-2" onclick="chooseitem_2">
                        <img src="assets/img/gopay.png" class="gambar-gopay">
                    </button>
                    <button class="box-2" onclick="chooseitem_2">
                        <img src="assets/img/dana.png" class="gambar-dana">
                    </button>
                    <div class="box-2" onclick="chooseitem_2">
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



    {{-- <div class="view-box-change-address">
        <h1 class="current-address-title">Current Address</h1>

        <div class="box-address-change">
            <div class="rincian-data-change">
                <h1 class="nama-change">Alfredo Wijaya Kesuma</h1>
                <h2 class="nomor-telepon-change">(+62) 812367780842</h2>
                <h3 class="alamat-change">Jl. Pakuan No.3, Sumur Batu, Kec. Babakan Madang, Kabupaten Bogor, Jawa Barat 16810
                </h3>
            </div>
        </div>

        <h1 class="current-address-title">New Address</h1>

        <form action="#">

            <div class="name-container">
                <div class="first-name">

                    <label for="fname" class="first-name-title">First name</label><br>
                    <input type="text" id="fname" name="fname" placeholder="First Name" class="first-name-box">

                </div>
                <div class="last-name">

                    <label for="lname" class="last-name-title">Last name</label><br>
                    <input type="text" id="lname" name="lname" placeholder="Last Name" class="last-name-box">

                </div>
            </div>

            <div class="phone-number">

                <label for="pname" class="phone-number-title">Phone Number</label><br>
                <input type="text" id="pname" name="pname" placeholder="Phone Number" class="phone-number-box">

            </div>

            <div class="new-address">

                <label for="naddress" class="new-address-title">Address</label><br>
                <input type="text" id="naddress" name="naddress" class="new-address-box">

            </div>

            <div class="button-grid">
                <div class="save-button">

                    <input type="submit" id="sbutton" name="sbutton" value="Save Changes"  onclick="closepopup()" class="save-button-box">

                </div>

                <div class="back-button">

                    <button onclick="closepopup()" class="back-button">Back</button>

                </div>


            </div>

        </form> --}}







        {{-- <h1 class="address-title-change">Address</h1>

        <div class="address-box"> --}}

        {{-- </div> --}}


    </div>
</div>
@endsection


