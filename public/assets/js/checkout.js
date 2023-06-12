// import Swal from 'sweetalert2'

// import Swal from 'sweetalert2/dist/sweetalert2.js'

// import 'sweetalert2/src/sweetalert2.scss'

// const Swal = require('sweetalert2')

// const swal = window.swal = require('sweetalert2');


// # Cara2
const klikbutton = document.querySelectorAll('.box-1');

klikbutton.forEach( klikbtn => {
    klikbtn.addEventListener('click', () => {
        document.querySelector('.boxbtn')?.classList.remove('boxbtn');
        klikbtn.classList.add('boxbtn');
    })

 });

const klikbutton2 = document.querySelectorAll('.box-2');

klikbutton2.forEach( klikbtn => {
    klikbtn.addEventListener('click', () => {
        document.querySelector('.boxbtn2')?.classList.remove('boxbtn2');
        klikbtn.classList.add('boxbtn2');
    })

 });


// Buat stop scroll
// buat stop scroll yg bagian kanan
let summarycheckout = document.getElementById('summary-checkout');
var body = document.body;
var html = document.documentElement;
var bodyH = Math.max(body.scrollHeight,  body.getBoundingClientRect().height, html.clientHeight, html.scrollHeight, html.offsetHeight);
var position = bodyH-708;
var count = 0
var count2 = 0

window.onscroll = function(){
    if(window.scrollY >= (bodyH-708)) { // change target to number
        summarycheckout.style.position = 'absolute';
        summarycheckout.style.top = position+'px';
    }
    else{
        summarycheckout.style.position = 'fixed';
        summarycheckout.style.top = '10%';
    }
};


// Make PopUp Success
const iconSuccess = document.querySelector('#type-success');
const valbox1click = document.getElementsByClassName('box-1');
const valbox2click = document.getElementsByClassName('box-2');


for(i = 0; i < valbox1click.length; i++){
    valbox1click[i].onclick = () => {
        count = 10;
    }
    valbox2click[i].onclick = () => {
        count2 = 12;
    }
}

iconSuccess.onclick = function() {

    if(count > 0 && count2 > 0) {
        Swal.fire(
            'Thankyou!',
            'Your transaction has been successfully processed',
            'success',
        ).then(okay => {
            if(okay) {
                window.location.href = "index";
            }
        })

    }
    else if(count >= 10 && count2 == 0){
        // alert("you must choose your payment method");
        Swal.fire(
            'Warning!!',
            'You must choose your payment method!',
            'warning'
          )
    }
    else if(count == 0 && count2 >= 12){
        // alert("you must choose your shipping options");
        Swal.fire(
            'Warning!',
            'You must choose your shipping options',
            'warning'
          )
    }
    else {
        // alert("you must choose shipping options and payment");
        Swal.fire(
            'Warning!',
            'You must choose shipping options and payment method',
            'warning'
          )
    }

}


const fname = document.getElementById('first-name-box');
const lname = document.getElementById('last-name-box');
const pnumber = document.getElementById('phone-number-box');
const naddress = document.getElementById('new-address-box');

const fvalname = document.getElementById('fnameval');
const lvalname = document.getElementById('lnameval');
const valnum = document.getElementById('numval');
const valaddress = document.getElementById('addressval');

fname.addEventListener("input", (event) => {
    if (fname.value.length < 3 ) {
        fvalname.innerHTML = "You must fill range 3-25 characters";
        fvalname.style.display = "block";
      // invalid_txt.style.display = "none";
    }
    else if (fname.value.length >= 3){
        fvalname.style.display = "none";
    } else if (fname.value.length < 1) {
        fvalname.innerHTML = "Please input your first name";
        fvalname.style.display = "block";
    }
});

lname.addEventListener("input", (event) => {
    if (lname.value.length < 3 ) {
        lvalname.innerHTML = "You must fill range 3-25 characters";
        lvalname.style.display = "block";
      // invalid_txt.style.display = "none";
    }
    else if (lname.value.length >= 3){
        lvalname.style.display = "none";
    } else if (lname.value.length < 1) {
        lvalname.innerHTML = "Please input your last name";
        lvalname.style.display = "block";
    }
});

pnumber.addEventListener("input", (event) => {
    if (pnumber.value.length < 9 ) {
        valnum.innerHTML = "You must fill range 9-14 characters";
        valnum.style.display = "block";
      // invalid_txt.style.display = "none";
    }
    else if (pnumber.value.length >= 9){
        valnum.style.display = "none";
    } else if (pnumber.value.length < 1) {
        valnum.innerHTML = "Please input your phone number";
        valnum.style.display = "block";
    }
});

naddress.addEventListener("input", (event) => {
    if (naddress.value.length > 0 && naddress.value.length < 15 ) {
        valaddress.innerHTML = "You must fill range 15-100 characters";
        valaddress.style.display = "block";
      // invalid_txt.style.display = "none";
    }
    else if (naddress.value.length >= 15){
        valaddress.style.display = "none";
    } else if (naddress.value.length < 1) {
        valaddress.innerHTML = "Please input your addresssss";
        valaddress.style.display = "block";
    }
});


