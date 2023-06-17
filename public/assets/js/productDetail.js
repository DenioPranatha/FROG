// kotak plus min
let minBtn = document.getElementById('minus');
let plusBtn = document.getElementById('plus');
let qty = document.getElementById('productQty');

qty.value = 1;

plusBtn.addEventListener('click', ()=>{
    qty.value++;
})

minBtn.addEventListener('click',  ()=>{
    if (qty.value>1){
        qty.value--;
    }
    else{
        qty.value = 1;
    }
})

let qtyCart = document.getElementById('qtyCart');
let qtyBuy = document.getElementById('qtyBuy');
let cartBtn = document.getElementById("cartBtn");
let buyBtn = document.getElementById("buyBtn");

function addToCart(){
    qtyCart.value = qty.value;
    cartBtn.submit();
}

function buyNow(){
    qtyBuy.value = qty.value;
    buyBtn.submit();
}
