@section('midtrans')
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
    src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="/assets/css/events.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/invoice.css') }}">
@endsection

@extends('layouts.main')

@section('title', 'Invoice')

@section('content')
{{-- <form action="/coba" method="post" id="coba"> --}}
    <div class="container d-flex justify-content-center align-items-center">
        <div class="box">
            <div class="header d-flex flex-row align-items-center">
                {{-- <img src="./assets/img/frog.ico" alt=""> --}}
                <img src="{{ asset('assets/img/frog.ico') }}" alt="">
                <h1>Frog</h1>
                <div class="line-inheader"></div>
                <p>Invoice</p>
            </div>
            <div class="content d-flex flex-column">
                <div class="notes d-flex flex-column">
                    <h3>Order Notes</h3>
                    <div class="box-notes d-flex flex-column">
                        <div class="name">
                            <p>Name : {{ $paymentHeader->name }}</p>
                        </div>
                        <div class="phone-number">
                            <p>Phone Number : (+62) {{ $paymentHeader->phone }}</p>
                        </div>
                        <div class="address">
                            <p>Address : {{ $paymentHeader->address }}</p>
                        </div>
                    </div>
                </div>
                <div class="number-time d-flex flex-row">
                    <div class="order d-flex flex-column">
                        <h3>Order Number</h3>
                        <p>Fr-{{ $paymentHeader->id }}</p>
                    </div>
                    <div class="time d-flex flex-column">
                        <h3>Payment Time</h3>
                        <p>{{ $paymentHeader->date }}</p>
                    </div>
                </div>
                <div class="order-detail d-flex flex-column">
                    <h3>Order Detail's ({{ count($paymentDetails) }} Products)</h3>
                    <div class="detail-content d-flex flex-row">
                        <div class="no">No.</div>
                        <div class="product">Product</div>
                        <div class="quantity-order">Quantity</div>
                        <div class="total">Total Price</div>
                        <div class="event">Event Name</div>
                    </div>
                    <div class="line-indetail">
                    </div>

                    @foreach ($paymentDetails as $paymentDetail)
                        <div class="detail-content d-flex flex-row">
                            <div class="no">{{ $loop->iteration }}</div>
                            <div class="product">{{ $paymentDetail->product->name }}</div>
                            <div class="quantity-order">{{ $paymentDetail->qty }}</div>
                            <div class="total"> @money(($paymentDetail->product->price)*($paymentDetail->qty)) </div>
                            <div class="event">{{ $paymentDetail->product->event->name }}</div>
                        </div>
                    @endforeach

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
                            @money(($paymentHeader->total_price)-10000)
                        </div>
                        {{-- shipping --}}
                        <div class="main-content">
                            @money(10000)
                        </div>
                        {{-- total --}}
                        <div class="main-content bold">
                            @money(($paymentHeader->total_price))
                        </div>
                    </div>
                </div>
                <h3 class="status">Payment Status  :  {{ $paymentHeader->status }}</h3>

                <button class="pay-button" id="pay-button">
                    <h1 class="pay-now-title">Pay Now !</h1>
                </button>
            </div>
        </div>
    </div>
{{-- </form> --}}
@endsection

@section('js')
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result){
                /* You may add your own implementation here */
                    // alert("payment success!"); console.log(result);

                    window.location.href = '/invoicePaid/{{ $paymentHeader->id }}'

                    // coba = document.getElementById('coba');
                    // coba.submit();
                },
                onPending: function(result){
                /* You may add your own implementation here */
                    alert("wating your payment!"); console.log(result);
                },
                onError: function(result){
                /* You may add your own implementation here */
                    alert("payment failed!"); console.log(result);
                },
                onClose: function(){
                /* You may add your own implementation here */
                    // alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>
@endsection
