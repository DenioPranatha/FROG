@foreach ($cartDetails as $cartDetail)
    @if ($cartHeader->id == $cartDetail->cart_header_id)
        <div class="eachProduct d-flex align-items-center">
            <div class="checkHelp">
                <label class="checkDiv">
                    <input type="checkbox" name="itemCheck" class="itemCheck {{ $cartDetail->cart_header_id }}" {{ $cartDetail->is_checked == 1 ? 'checked' : ''}}>
                    <input type="hidden" name="cart_header_id" id="cart_header_id" value="{{ $cartDetail->cartHeader->id }}">
                    <input type="hidden" name="product_id" id="product_id" value="{{ $cartDetail->product->id }}">
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="eachProductImage" style="background-image: url({{ asset('/storage').'/'.$cartDetail->product->image}} )"></div>
            <div class="eachProductDesc">
                <div class="productDescName">{{ $cartDetail->product->name }}</div>
                <p class="stock d-none">{{ $cartDetail->product->stock }}</p>
                <div class="productDescQtyText">Quantity:</div>
                <div class="productDescQty d-flex justify-content-start align-items-center">
                    <div class="qtyDiv d-flex justify-content-center align-items-center" id="parent">
                        <input type="hidden" name="num" class="numMinus" id="num">
                        <input type="hidden" name="cart_header_id" id="cart_header_id" value="{{ $cartDetail->cartHeader->id }}">
                        <input type="hidden" name="product_id" id="product_id" value="{{ $cartDetail->product->id }}">
                        <button class="minus d-flex justify-content-center align-items-center m-0 pb-1" style="height: 18.5px" id="minus">
                            -
                        </button>

                        <div class="productQty d-flex justify-content-center align-items-center">
                            <form action="" method="get" class="qtyForm">
                                <input type="text" name="productQty" id="productQty" value="{{ $cartDetail->qty }}" class="prodQty" readonly>
                            </form>
                        </div>

                        <input type="hidden" name="num" id="num1" class="numPlus">
                        <input type="hidden" name="cart_header_id" id="cart_header_id1" value="{{ $cartDetail->cartHeader->id }}">
                        <input type="hidden" name="product_id" id="product_id1" value="{{ $cartDetail->product->id }}">
                        <button  class="plus d-flex justify-content-center align-items-center m-0 pb-1" style="height: 18.5px" id="plus">
                            +
                        </button>
                    </div>
                    <div class="trash d-flex align-items-center">
                        <div class="slash"></div>
                        <form action="/cartDelete" method="post">
                            @csrf
                            <input type="hidden" name="cart_header_id" value="{{ $cartDetail->cart_header_id }}">
                            <input type="hidden" name="product_id" value="{{ $cartDetail->product_id }}">
                            <button type="submit" class="trashBtn">
                                <i class="bi bi-trash3"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="eachProductPrice">
                <p class="eachProductPrice2">Rp{{ $cartDetail->product->price }}</p>
            </div>
            <div class="eachProductTotal">
                <p class="eachProductTotal2">Rp{{ ($cartDetail->product->price)*($cartDetail->qty) }}</p>
            </div>
        </div>
    @endif
@endforeach

