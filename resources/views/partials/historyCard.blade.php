<div class="container-flex-left">
    <div class="card-ph">
        <div class="history-header">
            <div class="history-image">
                <div class="product-image" style="background-image: url({{ asset('/storage').'/'.$history->product->image}})"></div>
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
                <p>{{ $history->paymentHeader->user->name }}</p>
                <?php
                $dt = new DateTime($history->paymentHeader->date);
                ?>
                <p>{{ $dt->format("d M Y") }}</p>
                <p class="price">
                    Rp. {{ number_format( $history->product->price * $history->qty , 0 , ' ' , ' ' ) }}
                </p>
                <p class="price">
                    Rp. {{ number_format( ($history->product->price - $history->product->modal) * $history->qty , 0 , ' ' , ' ' ) }}
                </p>
            </div>
        </div>
    </div>
</div>
