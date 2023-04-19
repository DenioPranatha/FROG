// kotak plus min
let minBtn = document.getElementById('minus');
let plusBtn = document.getElementById('plus');
let qty = document.getElementById('productQty');

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
// kotak plus min
