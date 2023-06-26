@if(count($products) != 0)
    {{-- <div class="catalog-container">
        @foreach($products as $product)
            @include('partials.productCart', ['product' => $product])
        @endforeach
    </div> --}}

    <div class="products d-flex flex-wrap">
        @foreach ($products as $product)
            @include('partials.productCart', ['product' => $product])
        @endforeach
    </div>

    {{-- buat variabel i (next batch) --}}
    @php
        $i = $pg + 1;
    @endphp

    @if ($pg != -1)
        {{-- <div class="more-products">
            <div class="line1"></div>
            masukkin next batch berapa ketika klik button
            <button class="more" id="myBtn1" value={{ $i }}>More Products</button>
            <div class="line1"></div>
        </div> --}}

        <div class="fullBtn h-100 w-75 d-flex justify-content-around align-items-center">
            <div class="lineBtn"></div>
            <div class="btnDiv m-0 p-0 d-flex justify-content-center align-items-center" id="myBtn">
                <button class="btn btn-1" id="myBtn1" value="{{ $i }}">
                    <div class="seeMore">
                        <p>More Products</p>
                    </div>
                </button>
            </div>
            <div class="lineBtn"></div>
        </div>
    @else
        <div class="gap"></div>
    @endif
@elseif(request('cat-id') && request('search-box'))
    <div class="not-found justify-content-center">Event with keyword "{{ request('search-box') }}" and category "{{ $namacat }}" is not found</div>
@elseif(request('search-box'))
    <div class="not-found justify-content-center">Event with keyword "{{ request('search-box') }}" is not found</div>
@else
    <div class="not-found justify-content-center">Event with category "{{ $namacat }}" is not found</div>
@endif

