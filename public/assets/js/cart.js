// kotak plus min
let minBtn = document.getElementsByClassName('minus');
let plusBtn = document.getElementsByClassName('plus');
let qty = document.getElementsByClassName('prodQty');
// alert(minBtn.length)

for(let i=0; i<minBtn.length; i++){
    plusBtn[i].addEventListener('click', ()=>{
        qty[i].value++;
    })

    minBtn[i].addEventListener('click',  ()=>{
        if (qty[i].value>1){
            qty[i].value--;
        }
        else{
            qty[i].value = 1;
        }
    })
}
// kotak plus min
