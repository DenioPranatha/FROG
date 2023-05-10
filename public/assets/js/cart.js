// const { forEach } = require("lodash");

let totalItem = document.getElementsByClassName("totalItem")[0];
let totalPayment = document.getElementsByClassName("totalPayment")[0];
let eachProductTotal2 = document.getElementsByClassName('eachProductTotal2');
let eachProductPrice2 = document.getElementsByClassName('eachProductPrice2');

// kotak plus min
let minBtn = document.getElementsByClassName('minus');
let plusBtn = document.getElementsByClassName('plus');
let qty = document.getElementsByClassName('prodQty');
let qtyForm = document.getElementsByClassName('qtyForm');

// alert(qty[0].value)
// alert(totalItem.value)
// alert(totalPayment.value)

for(let i=0; i<minBtn.length; i++){
    total = 0

    plusBtn[i].addEventListener('click', ()=>{
        priceTemp = eachProductPrice2[i].innerHTML.substring(2)
        priceTemp = parseInt(priceTemp)

        qty[i].value++;

        // buat hitung total price
        total = qty[i].value*priceTemp
        total = 'Rp' + total.toString()

        eachProductTotal2[i].innerHTML = total
        totalPayment.innerHTML = calculatePrice()
        totalItem.innerHTML = calculateItem()
    })

    minBtn[i].addEventListener('click',  ()=>{
        if (qty[i].value>1){
            priceTemp = eachProductPrice2[i].innerHTML.substring(2)
            priceTemp = parseInt(priceTemp)

            qty[i].value--;

            // buat hitung total price
            total = qty[i].value*priceTemp
            total = 'Rp' + total.toString()
            eachProductTotal2[i].innerHTML = total
            totalPayment.innerHTML = calculatePrice()
            totalItem.innerHTML = calculateItem()
        }
        else{
            priceTemp = eachProductPrice2[i].innerHTML.substring(2)
            priceTemp = parseInt(priceTemp)

            qty[i].value = 1;

            // buat hitung total price
            total = qty[i].value*priceTemp
            total = 'Rp' + total.toString()
            eachProductTotal2[i].innerHTML = total
            totalPayment.innerHTML = calculatePrice()
            totalItem.innerHTML = calculateItem()
        }
    })
    qtyForm[i].addEventListener("change", ()=>{
        // console.log('tes')
        // alert('hai')
        priceTemp = eachProductPrice2[i].innerHTML.substring(2)
        priceTemp = parseInt(priceTemp)

        // buat hitung total price
        total = qty[i].value*priceTemp
        total = 'Rp' + total.toString()
        eachProductTotal2[i].innerHTML = total
        totalPayment.innerHTML = calculatePrice()
        totalItem.innerHTML = calculateItem()
    })
}
// kotak plus min


// checkbox
let checkAll = document.getElementById("selectAll");
// let checkAll = document.getElementsByClassName("selectAll2")[0];
let eventCheck = document.getElementsByName("eventCheck");
let itemCheck = document.getElementsByName("itemCheck");
// let totalItem = document.getElementsByClassName("totalItem")[0];
let eventCheckLen = eventCheck.length;
let itemCheckLen = itemCheck.length;

eventCheck = Array.prototype.slice.call(eventCheck);
itemCheck = Array.prototype.slice.call(itemCheck);


function allItemChecked(){
    temp = true
    for(let i = 0; i < itemCheck.length; i++){
        if(itemCheck[i].checked == false){
            temp = false;
            return temp
        }
    }
    return true
}

function itemEventChecked(eventId){
    temp = true
    for(let i=0; i<itemCheckLen; i++){
        if(itemCheck[i].classList.contains(eventId) == true){
            if(itemCheck[i].checked == false){
                temp = false
                return temp
            }
        }
    }
    return true
}

function allEventChecked(){
    temp = true
    for(let i = 0; i < eventCheck.length; i++){
        if(eventCheck[i].checked == false){
            temp = false;
            return temp
        }
    }
    return true
}


// buat centang smua ato ga centang smua
checkAll.addEventListener('click', ()=>{
    // alert('yes')
    if(checkAll.checked == true){
        for(let i=0; i<eventCheckLen; i++){
            eventCheck[i].checked = true;
        }
        for(let i=0; i<itemCheckLen; i++){
            itemCheck[i].checked = true;
        }
    }
    else if(checkAll.checked == false){
        for(let i=0; i<eventCheckLen; i++){
            eventCheck[i].checked = false;
        }
        for(let i=0; i<itemCheckLen; i++){
            itemCheck[i].checked = false;
        }
    }
    totalPayment.innerHTML = calculatePrice()
    totalItem.innerHTML = calculateItem()
})

// buat event
eventCheck.forEach((element)=>{
    element.addEventListener('click', ()=>{
        // check si event
        if(element.checked == true){
            // kalo smua event kechecked
            if(allEventChecked() == true){
                checkAll.checked = true;
                element.checked = true;
                for(let i=0; i<itemCheck.length; i++){
                    itemCheck[i].checked = true;
                }
            // kalo ga smua event kechecked
            }else{
                checkAll.checked = false;
                element.checked = true;
                for(let i=0; i<itemCheck.length; i++){
                    if(itemCheck[i].classList.contains(element.id)){
                        itemCheck[i].checked = true;
                    }
                }
            }
        // uncheck si event
        }else{
            checkAll.checked = false;
            element.checked = false;
            for(let i=0; i<itemCheck.length; i++){
                if(itemCheck[i].classList.contains(element.id)){
                    itemCheck[i].checked = false;
                }
            }
        }
        totalPayment.innerHTML = calculatePrice()
        totalItem.innerHTML = calculateItem()
    })
})

// buat item
itemCheck.forEach((element)=>{
    element.addEventListener('click', ()=>{
        // check si item
        if(element.checked == true){
            // kalo smua item ke checked
            if(allItemChecked() ==  true){
                // kalo smua event kechecked
                if(allEventChecked() == true){
                    checkAll.checked = true;
                    for(let i=0; i<eventCheckLen; i++){
                        eventCheck[i].checked = true;
                    }
                }
                // kalo ga smua event kechecked
                else{
                    // alert("ngaco")
                    checkAll.checked = true;
                    for(let i=0; i<eventCheckLen; i++){
                        eventCheck[i].checked = true;
                    }
                }
            }
            // kalo ga smua item ke checked
            else{
                checkAll.checked = false;
                for(let i=0; i<eventCheckLen; i++){
                    // kalo smua item di event itu ke checked
                    if(itemEventChecked(eventCheck[i].id) == true){
                        eventCheck[i].checked = true;
                    }
                    // kalo ada item di event itu yg ms blom ke checked
                    else{
                        eventCheck[i].checked = false;
                    }
                }
            }
        // uncheck si item
        }else{
            checkAll.checked = false;
            for(let i=0; i<eventCheckLen; i++){
                if(element.classList.contains(eventCheck[i].id)){
                    eventCheck[i].checked = false;
                }
            }

        }
        totalPayment.innerHTML = calculatePrice()
        totalItem.innerHTML = calculateItem()
    })
})


// buat hitung total payment
function calculatePrice(){
    total = 0
    for(let i = 0; i<itemCheckLen; i++){
        // console.log("hai")
        if(itemCheck[i].checked == true){
            temp = eachProductTotal2[i].innerHTML.substring(2)
            // alert(temp)
            total += parseInt(temp)
        }
    }
    // alert(total)
    total = 'Rp' + total.toString()
    // alert(total)
    return total
}

// buat hitung total items
function calculateItem(){
    total = 0
    for(let i = 0; i<itemCheckLen; i++){
        // console.log("hai")
        if(itemCheck[i].checked == true){
            temp = parseInt(qty[i].value)
            // alert(temp)
            total += temp
        }
    }
    // alert(total)
    total = total.toString() + ' Items'
    // alert(total)
    return total
}


// buat stop scroll yg bagian kanan
let rightCart = document.getElementById('rightCart');
var body = document.body;
var html = document.documentElement;
var bodyH = Math.max(body.scrollHeight, body.offsetHeight, body.getBoundingClientRect().height, html.clientHeight, html.scrollHeight, html.offsetHeight);
var position = bodyH-541

window.onscroll = function(){
    if(window.scrollY >= (bodyH-630)) { // change target to number
        rightCart.style.position = 'absolute';
        rightCart.style.top = position+'px';
    }
    else{
        rightCart.style.position = 'fixed';
        rightCart.style.top = '15%';
    }
};

// // buat centang smua ato ga centang smua per event
// for(let i=0; i<eventCheckLen; i++){
//     eventCheck[i].addEventListener('click', ()=>{
//         if(eventCheck[i].checked == true){
//             for(let j=0; j<itemCheckLen; j++){
//                 itemCheck[j].checked = true;
//             }
//         }
//         else if(eventCheck[i].checked == false){
//             for(let j=0; j<itemCheckLen; j++){
//                 itemCheck[j].checked = false;
//             }
//         }
//     })
// }

// eventCheck.forEach((element, index) => {
//     eventCheck[index].addEventListener('click', ()=>{
//         if(eventCheck[index] == true){
//             if(allChecked() == false){
//                 checkAll.checked = false;
//             }else{
//                 checkAll.checked = true;
//             }
//         }else{
//             checkAll.checked = false;
//         }
//     })
// });

// checkbox


// BELAJAR
// let eventCheck = document.getElementById("eventCheck");
// let itemCheck = document.getElementsByName("itemCheck");

// itemCheck = Array.prototype.slice.call(itemCheck);

// function allChecked(){
//     temp = true
//     for(let i = 0; i < itemCheck.length; i++){
//         if(itemCheck[i].checked == false){
//             temp = false;
//             return temp
//         }
//     }
//     return true
// }

// eventCheck.addEventListener('click', ()=>{
//     if(eventCheck.checked == true){
//         for(let i=0; i<itemCheck.length; i++){
//             itemCheck[i].checked = true;
//         }
//     }else{
//         for(let i=0; i<itemCheck.length; i++){
//             itemCheck[i].checked = false;
//         }
//     }
// })

// itemCheck.forEach((element)=>{
//     element.addEventListener('click', ()=>{
//         if(element.checked == true){
//             if(allChecked() == true){
//                 eventCheck.checked = true;
//                 element.checked = true;
//             }else{
//                 eventCheck.checked = false;
//                 element.checked = true;
//             }
//         }else{
//             eventCheck.checked = false;
//             element.checked = false;
//         }
//     })
// })
// BELAJAR
