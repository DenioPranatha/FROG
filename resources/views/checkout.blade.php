@section('css')
    {{-- <link rel="stylesheet" href="assets/css/checkout.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/checkout.css') }}">

    <link rel="stylesheet" href="sweetalert2.min.css">

    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>` --}}
@endsection

@extends('layouts.main')

@section('title', 'Check Out')

@section('content')
{{-- @dd() --}}
    <div class="all-content">

        <div class="gabung-box">

            <div class="checkout-box">
                <h1 class="checkout-title">Checkout</h1>
                <div class="checkout-linebar"></div>
                <div class="title-shipping-address">
                    <img src="assets/img/location.svg" class="location-icon">
                    <h2 class="shipping-address">Shipping Address</h2>
                </div>

                <div class="box-address">
                    <div class="rincian-data">
                        <h1 class="nama" id="nama">{{ $name }}</h1>
                        <h2 class="nomor-telepon" id="telpon">(+62) {{ $phone }}</h2>
                        <h3 class="alamat" id="alamat">{{ $address }}
                        </h3>
                    </div>

                    <div class="change-address" id="change-address">
                        <button type="button" class="box-change-address" class="box-change-address" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        {{-- <button type="button" value="{{ auth()->user()->id }}" class="box-change-address changeAdd" class="box-change-address" data-bs-toggle="modal"> --}}
                            <img src="assets/img/pen.svg" class="pen-icon">
                            <h2 class="title-shipping-address">Change Address</h2>
                        </button>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-css">
                            <div class="modal-header"></div>
                            <div class="modal-body modal-css">
                                {{-- @dump($cartHeaders) --}}

                                {{-- <form class="form-css needs-validation" novalidate> --}}

                                <form action="" class="form-css needs-validation">
                                    {{-- {{csrf_field()}} --}}
                                    <div class="view-box-change-address">

                                        <h1 class="current-address-title">New Address</h1>

                                        {{-- <div action="#" class="form-change needs-validation" novalidate name="newaddress-form" method="post" autocomplete="off"> --}}
                                            <div class="name-container">

                                                <div class="first-name">

                                                    <label for="fname"  class="first-name-title">Name</label><br>
                                                    {{-- <input type="text" class="form-control first-name-box" id="first-name-box" required minlength = "3" maxlength = "25" name="firstname" autocomplete="off" name="fname" placeholder="Name"> --}}
                                                    <input type="text" class="form-control first-name-box" id="first-name-box" required name="name" placeholder="Name" value="{{ $name }}">
                                                    {{-- <div class="invalid-feedback fnameval" id ="fnameval">
                                                        Please input your name
                                                    </div> --}}
                                                </div>
                                            </div>

                                            <div class="phone-number">
                                                <label for="pname" class="phone-number-title">Phone Number</label><br>

                                                <div class="flex-num-plus">
                                                    <div class="plus">+62 |</div>
                                                    <div class="input-container">
                                                        {{-- <input type="number" class="form-control phone-number-box" id="phone-number-box" required  min="999999999" max="99999999999999"  name="phonenumber" name="answer-1" autocomplete="off" placeholder="Phone Number"> --}}
                                                        <input type="number" class="form-control phone-number-box" id="phone-number-box" required name="phone" placeholder="Phone Number" value="{{ $phone }}">
                                                        {{-- <div class="invalid-feedback numval" id="numval">
                                                            Please input your phone number
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="new-address">
                                                <label for="naddress" class="new-address-title">Address</label><br>
                                                {{-- <textarea type="text" class="form-control new-address-box" id="new-address-box" required  minlength="15" maxlength="100" name="newaddress" autocomplete="nope"  required name="naddress"  placeholder="Address..."></textarea> --}}
                                                <textarea type="text" class="form-control new-address-box" id="new-address-box" required name="address" placeholder="Address...">{{ $address }}</textarea>
                                                {{-- <div class="invalid-feedback addressval" id="addressval">
                                                    Please input your address
                                                </div> --}}

                                            </div>

                                            <div class="button-grid">
                                                <div class="save-button">
                                                    <button type="button" class="save-button-box" id="changeAdd">Save Changes</button>
                                                    <button type="button" class=" btn-secondary cancel-btn" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        {{-- </div> --}}
                                    </div>
                                {{-- </form> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                </div> --}}
                {{-- <form action="/saveAddress" method="post">
                    @csrf
                    <button type="submit">button</button>
                </form> --}}

                <div class="title-ordered-product">
                    <img src="assets/img/cart.svg" class="ordered-icon">
                    <h2 class="ordered-product">Ordered Product</h2>
                </div>



                {{-- @dump($cartHeaders) --}}
                @foreach ($cartHeaders as $cartHeader)
                    <div class="product-box">
                        <h1 class="title-event">{{ $cartHeader->event->name }}</h1>
                        <div class="event-linebar"></div>

                        {{-- @dd($cartHeader->cartDetail) --}}
                        @foreach ($cartHeader->cartDetail as $cartDetail)
                            @for ($i = 0; $i < count($product_id); $i++)
                                @if ($cartDetail->product_id == $product_id[$i])
                                    <div class="product-detail-box">
                                        {{-- <div class="gambar-produk" style="background-image: url({{ asset("assets/img/basreng.png") }})"></div> --}}
                                        <div class="gambar-produk" style="background-image: url({{ asset('/storage').'/'.$cartDetail->product->image}} )"></div>
                                        <div class="detail">
                                            <h1 class="title-product">{{ $cartDetail->product->name }}</h1>
                                            <h1 class="quantity"> Quantity: <span class="span-quantity">{{ $cartDetail->qty }} Items</span></h1>
                                        </div>
                                        <div class="harga">
                                            <h1 class="title-harga">@money(($cartDetail->product->price)*($cartDetail->qty))</h1>
                                        </div>
                                    </div>
                                @endif
                            @endfor

                        @endforeach

                        {{-- @for ($i = 0; $i < 3 ; $i++)
                            <div class="product-detail-box">
                                <div class="gambar-produk" style="background-image: url({{ asset("assets/img/basreng.png") }})">
                                </div>
                                <div class="detail">
                                    <h1 class="title-product">Basreng Ekstra Pedas Daun Jeruk</h1>
                                    <h1 class="quantity"> Quantity : <span class="span-quantity"> 2 Items</span></h1>
                                </div>
                                <div class="harga">
                                    <h1 class="title-harga">Rp 200.000</h1>
                                </div>
                            </div>

                        @endfor --}}
                    </div>
                @endforeach

                {{-- @for ($j = 0 ; $j < 2 ; $j++)
                    <div class="product-box">
                        <h1 class="title-event">Charity Action Of RTB</h1>
                        <div class="event-linebar"></div>

                        @for ($i = 0; $i < 2 ; $i++)
                            <div class="product-detail-box">
                                <div class="gambar-produk" style="background-image: url({{ asset("assets/img/basreng.png") }})">
                                </div>
                                <div class="detail">
                                    <h1 class="title-product">Basreng Ekstra Pedas Daun Jeruk</h1>
                                    <h1 class="quantity"> Quantity : <span class="span-quantity"> 2 Items</span></h1>
                                </div>
                                <div class="harga">
                                    <h1 class="title-harga">Rp 200.000</h1>
                                </div>
                            </div>

                        @endfor
                    </div>
                @endfor --}}

                <div class="option-shipping-box">
                    <div class="title-option-shipping">
                        <img src="assets/img/boxcar.svg" class="shipping-icon">
                        <h2 class="shipping-option-title">Shipping Options</h2>
                    </div>
                </div>

                <div class="grid-box">
                    <button class="box-1">
                        <div class="gambar-jne" style="background-image: url({{ asset("assets/img/jne.png") }})"></div>
                    </button>
                    <button class="box-1">
                        <div class="gambar-pos" style="background-image: url({{ asset("assets/img/pos.png") }})"></div>
                    </button>
                    <button class="box-1">
                        <div class="gambar-jnt" style="background-image: url({{ asset("assets/img/jnt.png") }})"></div>
                    </button>
                    <button class="box-1"  >
                        <div class="gambar-tiki" style="background-image: url({{ asset("assets/img/tiki.png") }})"></div>
                    </button>

                </div>


                <div class="option-payment-box">
                    <div class="title-option-payment">
                        <img src="assets/img/payment.svg" class="payment-icon">
                        <h2 class="payment-option-title">Payment Method Options</h2>
                    </div>
                </div>

                <div class="grid-box">
                    <button class="box-2">
                        <div class="gambar-bca" style="background-image: url({{ asset("assets/img/bca.png") }})" ></div>
                    </button>
                    <button class="box-2">
                        <div class="gambar-gopay" style="background-image: url({{ asset("assets/img/gopay.png") }})" ></div>
                    </button>
                    <button class="box-2">
                        <div class="gambar-dana" style="background-image: url({{ asset("assets/img/dana.png") }})" ></div>
                    </button>
                    <button class="box-2" >
                        <div class="gambar-spay" style="background-image: url({{ asset("assets/img/spay.png") }})" ></div>
                    </button>

                </div>

            </div>

            <div class="summary-checkout" id="summary-checkout">
                <div class="box-summary">
                    <h1 class="title-checkout-summary">Checkout Summary</h1>
                    <div class="checkout-summary-linebar"></div>

                    {{-- <h1 class="subtotal">Subtotal ({{ $totalItem }} Barang) <span class="rp-1">Rp</span><span class="nominal">{{ $totalPayment }}</span></h1> --}}
                    <h1 class="subtotal">Subtotal ({{ $totalItem }} Barang) <span class="rp-1">@money($totalPayment)</span></h1>
                    {{-- <h1 class="subtotal">Subtotal ({{ $totalItem }} Barang) <span class="rp-1">{{ $totalPayment }}</span></h1> --}}
                    {{-- <h1>{{ $totalPayment }}</h1> --}}

                    {{-- <h1 class="shipping-subtotal">Shipping Subtotal <span class="rp-2">Rp</span><span class="shipping-nominal">10.000</span></h1> --}}
                    <h1 class="shipping-subtotal">Shipping Subtotal <span class="rp-2">@money(10000)</span></h1>

                    {{-- <h1 class="total-payment">Total Payment <span class="rp-3">Rp</span><span class="total-nominal">{{ $totalPayment+10000 }}</span></h1> --}}
                    <h1 class="total-payment">Total Payment <span class="rp-3">@money($totalPayment+10000)</span></h1>
                    {{-- <h1 class="total-payment">Total Payment <span class="rp-3">{{ $totalPayment }}</span></h1> --}}

                    {{-- @dd($product_id) --}}
                    {{-- @dd(date('Y-m-d')) --}}
                    {{-- @dd($totalPayment+10000) --}}
                    <form action="/payNow" method="post" id="payForm">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        {{-- <input type="hidden" name="product_id" value="{{ $product_id }}"> --}}
                        @foreach ($product_id as $prod_id)
                            <input type="hidden" name="arrayProductId[]" value="{{ $prod_id }}">
                        @endforeach
                        @foreach ($cartHeaders as $cartHeader)
                            @foreach ($cartHeader->cartDetail as $cartDetail)
                                @for ($i = 0; $i < count($product_id); $i++)
                                    @if ($cartDetail->product_id == $product_id[$i])
                                        <input type="hidden" name="arrayCartDetail[]" value="{{ $cartDetail }}">
                                    @endif
                                @endfor
                            @endforeach
                        @endforeach
                        {{-- @foreach ($cartDetails as $cs)
                            <input type="hidden" name="arrayQty[]" value="{{ $cs->quantity }}">
                        @endforeach --}}
                        {{-- @php
                            $qtyArray = [];
                        @endphp --}}

                        {{-- @foreach ($cartHeaders as $cartHeader)
                            @foreach ($cartHeader->cartDetail as $cartDetail)
                                @for ($i = 0; $i < count($product_id); $i++)
                                    @if ($cartDetail->product_id == $product_id[$i])
                                        @php
                                            $qtyArray[] = $cartDetail->qty;
                                            // $qtyArray[] = [$cartDetail->qty];

                                        @endphp

                                    @endif
                                @endfor
                            @endforeach
                        @endforeach --}}

                        {{-- @foreach ($qtyArray as $qty)
                            @foreach ($qty as $value)
                                <input type="hidden" name="qty[]" value="{{ $value }}">
                            @endforeach
                        @endforeach --}}
                        {{-- <input type="hidden" name="qty[]" value="{{ implode(',', $qtyArray) }}"> --}}
                        {{-- <input type="hidden" name="qty[]" value="{{ implode(',', $qty) }}"> --}}

                        <input type="hidden" name="name" id="nameHidden">
                        <input type="hidden" name="phone" id="phoneHidden">
                        <input type="hidden" name="address" id="addressHidden">
                        <input type="hidden" name="date" value="{{ date('Y-m-d') }}">
                        <input type="hidden" name="total_price" id="total_price" value="{{ ($totalPayment+10000) }}">
                        {{-- <input type="hidden" name="total_modal" id="total_modal"> --}}
                        <input type="hidden" name="status" value="Unpaid">

                        <button onclick="pay(event)" class="pay-button" id="type-success" >
                            <h1 class="pay-now-title">Pay Now !</h1>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@section('js')
    <script type="text/javascript" defer src="{{URL::asset('assets/js/checkout.js')}}"></script>


    {{-- <script>
        (function () {
            'use strict'

            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event){
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()
    </script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="sweetalert2.all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- <script>
        $(document).on('click', '.changeAdd', function(e){
            e.preventDefault();
            var user_id = $(this).val();
            console.log(user_id);
            $('#exampleModal').modal('show');
            $.ajax({
                type: "POST",
                url: "/edit-address",
                success: function (response) {
                    console.log(response);
                }
            });
        })
    </script> --}}

    {{-- <script>
        $(document).on('click', '.changeAdd' function(e){
            e.preventDefault();
            // var data = {
            //     'name' : $('#first-name-box').val(),
            //     'phone' : $('#phone-number-box').val(),
            //     'address' : $('#new-address-box').val()
            // }

            $.ajax({
                type: "POST",
                url: "/changeAddress",
                data: "data",
                dataType: "json",
                success: function (response) {
                    // console.log(response);
                    $('#nama').html($('#first-name-box').val())
                    $('#telpon').html($('#phone-number-box').val())
                    $('#alamat').html($('#new-address-box').val())
                }
            });
        })
        $(document).ready(function () {
            $(#changeAdd).click(function(e){
                e.preventDefault();
                let inputNama = document.getElementById('first-name-box').value;
                console.log(inputNama)
            });
        });
    </script> --}}


@endsection

{{-- hi --}}
