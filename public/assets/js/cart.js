// const { forEach } = require("lodash");

let totalItem = document.getElementsByClassName("totalItem")[0];
let totalPayment = document.getElementsByClassName("totalPayment")[0];
let eachProductTotal2 = document.getElementsByClassName('eachProductTotal2');
let eachProductPrice2 = document.getElementsByClassName('eachProductPrice2');

// kotak plus min
let minBtn = document.getElementsByClassName('minus');
let plusBtn = document.getElementsByClassName('plus');
let stock = document.getElementsByClassName('stock');
let qty = document.getElementsByClassName('prodQty');
let qtyForm = document.getElementsByClassName('qtyForm');

// buat submit form
let numMinus = document.getElementsByClassName('numMinus');
let numPlus = document.getElementsByClassName('numPlus');

// alert(qty[0].value)
// alert(totalItem.value)
// alert(totalPayment.value)

const rupiah = (number)=>{
    return new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR",
        maximumFractionDigits: 0,
        minimumFractionDigits: 0
    }).format(number);
}

// console.log(rupiah(20000))

for(let i=0; i<minBtn.length; i++){
    total = 0
    // console.log(Number(eachProductPrice2[i].innerHTML.replace(/[^0-9.-]+/g,""))*1000);

    plusBtn[i].addEventListener('click', (event)=>{
        if(qty[i].value>=parseInt(stock[i].innerHTML)){
            // priceTemp = eachProductPrice2[i].innerHTML.substring(2)
            priceTemp = Number(eachProductPrice2[i].innerHTML.replace(/[^0-9.-]+/g,""))*1000
            priceTemp = parseInt(priceTemp)

            qty[i].value = qty[i].value

            numPlus[i].value = qty[i].value;
            plusBtn[i].submit;

            // buat hitung total price
            total = qty[i].value*priceTemp
            // total = 'Rp' + total.toString()
            total = rupiah(total).toString()

            eachProductTotal2[i].innerHTML = total
            totalPayment.innerHTML = calculatePrice()
            totalItem.innerHTML = calculateItem()
        }else{
            // priceTemp = eachProductPrice2[i].innerHTML.substring(2)
            priceTemp = Number(eachProductPrice2[i].innerHTML.replace(/[^0-9.-]+/g,""))*1000
            priceTemp = parseInt(priceTemp)

            qty[i].value++;

            numPlus[i].value = qty[i].value;
            plusBtn[i].submit;

            // buat hitung total price
            total = qty[i].value*priceTemp
            // total = 'Rp' + total.toString()
            total =  rupiah(total).toString()

            eachProductTotal2[i].innerHTML = total
            totalPayment.innerHTML = calculatePrice()
            totalItem.innerHTML = calculateItem()
        }

        var chi = event.target.parentElement.querySelector('#cart_header_id1').value;
        var pi = event.target.parentElement.querySelector('#product_id1').value;
        var num = event.target.parentElement.querySelector('#num1').value;

        var url = '/cartPlus';
        var parameters = [];

        if(chi){
            parameters.push('cart_header_id=' + encodeURIComponent(chi));
        }
        if(pi){
            parameters.push('product_id=' + encodeURIComponent(pi));
        }
        if(num){
            parameters.push('num=' + encodeURIComponent(num));
        }

        if (parameters.length > 0) {
            url += '?' + parameters.join('&');
        }

        $('#result').load(url);

        // $.ajax({
        //     url: url,
        //     type: 'POST',
        //     data: postData,
        //     success: function(response) {
        //       // Handle the response here
        //       $('#productGroup').html(response);
        //     },
        //     error: function(xhr, status, error) {
        //       // Handle the error here
        //       console.log("Woe error");
        //       console.log(error);
        //     //   console.log(xhr.status);
        //       console.log(xhr.responseText);
        //     }
        // });

    })

    minBtn[i].addEventListener('click',  (event)=>{
        if (qty[i].value>1){
            // priceTemp = eachProductPrice2[i].innerHTML.substring(2)
            priceTemp = Number(eachProductPrice2[i].innerHTML.replace(/[^0-9.-]+/g,""))*1000
            priceTemp = parseInt(priceTemp)

            qty[i].value--;

            numMinus[i].value = qty[i].value;
            minBtn[i].submit;

            // buat hitung total price
            total = qty[i].value*priceTemp
            // total = 'Rp' + total.toString()
            total = rupiah(total).toString()
            eachProductTotal2[i].innerHTML = total
            totalPayment.innerHTML = calculatePrice()
            totalItem.innerHTML = calculateItem()
        }
        else{
            // priceTemp = eachProductPrice2[i].innerHTML.substring(2)
            priceTemp = Number(eachProductPrice2[i].innerHTML.replace(/[^0-9.-]+/g,""))*1000
            priceTemp = parseInt(priceTemp)

            qty[i].value = 1;

            // buat hitung total price
            total = qty[i].value*priceTemp
            // total = 'Rp' + total.toString()
            total = rupiah(total).toString()
            eachProductTotal2[i].innerHTML = total
            totalPayment.innerHTML = calculatePrice()
            totalItem.innerHTML = calculateItem()
        }

        var chi = event.target.parentElement.querySelector('#cart_header_id').value;
        var pi = event.target.parentElement.querySelector('#product_id').value;
        var num = event.target.parentElement.querySelector('#num').value;

        var url = '/cartMinus';
        var parameters = [];

        if(chi){
            parameters.push('cart_header_id=' + encodeURIComponent(chi));
        }
        if(pi){
            parameters.push('product_id=' + encodeURIComponent(pi));
        }
        if(num){
            parameters.push('num=' + encodeURIComponent(num));
        }

        if (parameters.length > 0) {
            url += '?' + parameters.join('&');
        }

        $('#result').load(url);
    })

    qtyForm[i].addEventListener("change", ()=>{
        // console.log('tes')
        // alert('hai')
        // priceTemp = eachProductPrice2[i].innerHTML.substring(2)
        priceTemp = Number(eachProductPrice2[i].innerHTML.replace(/[^0-9.-]+/g,""))*1000
        priceTemp = parseInt(priceTemp)

        // buat hitung total price
        total = qty[i].value*priceTemp
        // total = 'Rp' + total.toString()
        total = rupiah(total).toString()
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

// ngecek smua item ke cek ato ngga
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

function sendCheck(element){
    console.log(element);
    var chi = element.parentElement.querySelector('#cart_header_id').value;
    var pi = element.parentElement.querySelector('#product_id').value;

    var url = '/sendCheck';
    var parameters = [];

    if(chi){
        parameters.push('cart_header_id=' + encodeURIComponent(chi));
    }
    if(pi){
        parameters.push('product_id=' + encodeURIComponent(pi));
    }

    if (parameters.length > 0) {
        url += '?' + parameters.join('&');
    }

    console.log(url);

    $('#result').load(url);

}

function sendUncheck(element){
    console.log(element);
    var chi = element.parentElement.querySelector('#cart_header_id').value;
    var pi = element.parentElement.querySelector('#product_id').value;

    var url = '/sendUncheck';
    var parameters = [];

    if(chi){
        parameters.push('cart_header_id=' + encodeURIComponent(chi));
    }
    if(pi){
        parameters.push('product_id=' + encodeURIComponent(pi));
    }

    if (parameters.length > 0) {
        url += '?' + parameters.join('&');
    }

    console.log(url);

    $('#result').load(url);

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
            sendCheck(itemCheck[i]);
        }
    }
    else if(checkAll.checked == false){
        for(let i=0; i<eventCheckLen; i++){
            eventCheck[i].checked = false;
        }
        for(let i=0; i<itemCheckLen; i++){
            itemCheck[i].checked = false;
            sendUncheck(itemCheck[i]);
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
                    sendCheck(itemCheck[i]);
                }
            // kalo ga smua event kechecked
            }else{
                checkAll.checked = false;
                element.checked = true;
                for(let i=0; i<itemCheck.length; i++){
                    if(itemCheck[i].classList.contains(element.id)){
                        itemCheck[i].checked = true;
                        sendCheck(itemCheck[i]);
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
                    sendUncheck(itemCheck[i]);
                }
            }
        }
        totalPayment.innerHTML = calculatePrice()
        totalItem.innerHTML = calculateItem()
    })
})

// buat item
itemCheck.forEach((element)=>{
    // tambah if
    element.addEventListener('click', ()=>{
        // check si item
        if(element.checked == true){
            sendCheck(element);
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
            sendUncheck(element);
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

//pas load, untuk mengautomasi kalo ada checked
window.onload = function() {
    itemCheck.forEach((element)=>{
        if(element.checked == true){
            if(allItemChecked() ==  true){
                if(allEventChecked() == true){
                    checkAll.checked = true;
                    for(let i=0; i<eventCheckLen; i++){
                        eventCheck[i].checked = true;
                    }
                }
                else{
                    checkAll.checked = true;
                    for(let i=0; i<eventCheckLen; i++){
                        eventCheck[i].checked = true;
                    }
                }
            }else{
                checkAll.checked = false;
                for(let i=0; i<eventCheckLen; i++){
                    if(itemEventChecked(eventCheck[i].id) == true){
                        eventCheck[i].checked = true;
                    }
                    else{
                        eventCheck[i].checked = false;
                    }
                }
            }
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

};


// buat hitung total payment
function calculatePrice(){
    total = 0
    for(let i = 0; i<itemCheckLen; i++){
        // console.log("hai")
        if(itemCheck[i].checked == true){
            // temp = eachProductTotal2[i].innerHTML.substring(2)
            temp = Number(eachProductTotal2[i].innerHTML.replace(/[^0-9.-]+/g,""))*1000
            // alert(temp)
            total += parseInt(temp)
        }
    }
    // alert(total)
    // total = 'Rp' + total.toString()
    total = rupiah(total).toString()
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
var position = bodyH-541;

window.onscroll = function(){
    // console.log(window.scrollY);
    // console.log(bodyH);
    if(window.scrollY >= (bodyH-630)) { // change target to number
        // console.log("atas");
        rightCart.style.position = 'absolute';
        rightCart.style.top = position+'px';
    }
    else{
        // console.log("bawah");
        rightCart.style.position = 'fixed';
        rightCart.style.top = '15%';
    }
};

var product_id = []
var cart_header_id = []
let checkoutForm = document.getElementById("checkoutForm");
let checkoutBtn = document.getElementById("checkoutBtn");
let checkedItems = document.getElementById("checkedItems");
let checkedHeaders = document.getElementById("checkedHeaders");
let eachProduct = document.getElementsByClassName("eachProduct");
let totalItems = document.getElementById("totalItems");
let totalPayments = document.getElementById("totalPayments");



checkoutBtn.addEventListener('click', function(){
    // e.preventDefault();

    for(var i=0; i<eachProduct.length; i++){
        // console.log(eachProduct[i].childNodes[1].childNodes[1].childNodes[1].classList[1])
        if(eachProduct[i].childNodes[1].childNodes[1].childNodes[1].checked == true){
            // console.log("hi")
            product_id.push(eachProduct[i].childNodes[5].classList[1]);
            cart_header_id.push(eachProduct[i].childNodes[1].childNodes[1].childNodes[1].classList[1]);
        }
    }

    // calc price
    total = 0
    for(let i = 0; i<itemCheckLen; i++){
        if(itemCheck[i].checked == true){
            // temp = eachProductTotal2[i].innerHTML.substring(2)
            temp = Number(eachProductTotal2[i].innerHTML.replace(/[^0-9.-]+/g,""))*1000
            total += parseInt(temp)
        }
    }
    // total = total.toString()
    // total = rupiah(total).toString()
    totalPayments.value = total;

    // calc item
    total = 0
    for(let i = 0; i<itemCheckLen; i++){
        if(itemCheck[i].checked == true){
            temp = parseInt(qty[i].value)
            total += temp
        }
    }
    total = total.toString()
    totalItems.value = total;


    // console.log(product_id)
    checkedItems.value = JSON.stringify(product_id);
    checkedHeaders.value = JSON.stringify(cart_header_id);
    checkoutForm.submit();


})




// // buat stop scroll yg bagian kanan
// let rightCart = document.getElementById('rightCart');
// var body = document.body;
// var html = document.documentElement;
// var bodyH = Math.max(body.scrollHeight, body.offsetHeight, body.getBoundingClientRect().height, html.clientHeight, html.scrollHeight, html.offsetHeight);
// var position = bodyH-541

// window.onscroll = function(){
//     console.log(window.scrollY);
//     console.log(bodyH);
//     if(window.scrollY >= (bodyH-630)) { // change target to number
//         console.log("atas");
//         rightCart.style.position = 'absolute';
//         rightCart.style.top = position+'px';
//     }
//     else{
//         console.log("bawah");
//         rightCart.style.position = 'fixed';
//         rightCart.style.top = '15%';
//     }
// };


// let minus = document.getElementById('minus');
// let numMinus = document.getElementById('numMinus');
// let plus = document.getElementById("plus");
// let numPlus = document.getElementById('numPlus');

// function cartMinus(){
//     console.log(qty.value);
//     numMinus.value = qty.value;
//     minus.submit;
// }

// function cartPlus(){
//     numPlus.value = qty.value;
//     plus.submit;
// }
