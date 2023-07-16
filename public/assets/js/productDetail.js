// kotak plus min
let minBtn = document.getElementById('minus');
let plusBtn = document.getElementById('plus');
let stock = document.getElementById('prodStock').innerHTML;
let qty = document.getElementById('productQty');

stock = parseInt(stock);
qty.value = 1;

plusBtn.addEventListener('click', ()=>{
    if(qty.value>=stock){
        qty.value = qty.value
    }
    else{
        qty.value++;
    }
})

minBtn.addEventListener('click',  ()=>{
    if (qty.value>1){
        qty.value--;
    }
    else{
        qty.value = 1;
    }
})

function checkStock(object){
    if(object.value>stock){
        object.value = stock;
    }
}

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

//swal
// const iconsuccess = document.getElementById('type-success');
// const text = document.getElementById('type-success').value;
// const testing = document.getElementById('testing');


// iconsuccess.onclick = function() {
//     if(true){
//         swal("Product Has Been Added", " ", "success", {
//             buttons: false,
//             timer: 5000,
//         });
//         addToCart();
//     } else{
//         swal("Product Failed to Added", " ", "error", {
//             buttons: false,
//             timer: 5000,
//         });
//     }
// }
