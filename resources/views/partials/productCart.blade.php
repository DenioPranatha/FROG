<div class="productCartPage">
    <a href="/productDetail/{{ $product->id }}" class="custom-card">
        <div class="card">
            {{-- <div class="card-img" style="background-image: url({{ asset('/assets/img/gelang.png') }})"></div> --}}
            <div class="card-img" style="background-image: url({{ asset('/assets/images/product').'/'.$product->image}} )"></div>
            <div class="caption">
                <p class="namaProduk">{{ $product->name }}</p>
                {{-- <p class="namaEvent">{{ $event->name }}</p> --}}
                <p class="namaEvent">{{ $product->event->name }}</p>
                <p class="hargaProduk">Rp. {{ number_format( $product->price , 0 , ' ' , ' ' ) }}</p>
                <p class="stokProduk">Stock:&nbsp;<b> {{ $product->stock }}</b></p>
            </div>
        </div>
    </a>
</div>
