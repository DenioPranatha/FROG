<div class="container-flex-left">
    <div class="card-ph">
        <div class="history-header">
            <div class="history-image">
                <div class="product-image" style="background-image: url({{ asset('assets/img/basreng.png') }})"></div>
            </div>
            <div class="history-title">
                <p class="product-name">{{ $history->product->name }}</p>
                <p class="quantity">Quantity : {{ $history->qty }}</p>
            </div>
        </div>
        <div class="line-ph"></div>
        <div class="history-body">
            <div class="history-information-left">
                <p>Buyer</p>
                <p>Purchase Date</p>
                <p>Purchase Totals</p>
                <p>Total Donation</p>
            </div>
            <div class="history-information-right">
                <p>Alfredo Wijaya Kusuma</p>
                <p>12 maret 2023</p>
                <p class="price">Rp. 20.000</p>
                <p class="price">Rp. 10.000</p>
            </div>
        </div>
    </div>
</div>
