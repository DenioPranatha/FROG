
// #Cara 1

function chooseitem_1(){
    document.getElementsByClassName('box-1').style.cssText = 'border: 2px solid #673AB7';
    'box-shadow: 4px 4px 0px #673AB7';
    'transform: scale(1.13)';
}

function chooseitem_2(){
    document.getElementsByClassName('box-1').style.cssText = 'border: 2px solid #673AB7';
    'box-shadow: 4px 4px 0px #673AB7';
    'transform: scale(1.13)';
}

// # Cara2
// const klikbutton = document.querySelectorAll('.box-1');

// klikbutton.forEach( klikbtn => {
//     klikbtn.addEventListener('click', () => {
//         document.querySelector('.boxbtn')?.classList.remove('boxbtn');
//         klikbtn.classList.add('boxbtn');
//     })

//  });

//  const klikbutton = document.querySelectorAll('.box-2');

// klikbutton.forEach( klikbtn => {
//     klikbtn.addEventListener('click', () => {
//         document.querySelector('.boxbtn')?.classList.remove('boxbtn');
//         klikbtn.classList.add('boxbtn');
//     })

//  });

//  # Cara 3
// $('.box-1').click(function(){
//     $('.box-1').css({
//         'width': '180px',
//         'height': '100px',
//         'align-items': 'center',
//         'justify-content': 'center',
//         'position': 'relative',
//         'margin-top': '0px',

//         'border': '1.5px solid #CDCDCD',
//         'box-shadow': '4px 4px 0px #CDCDCD',

//         'text-decoration': 'none',
//         'background-color': '#FFFFFF'    ,


//         'border': '2px solid #673AB7',
//         'box-shadow': '4px 4px 0px #673AB7',

//         'transform': 'scale(1.13)'
//     });
// });

// $('.box-2').click(function(){
//     $('.box-2').css({
//         'border': '2px solid #673AB7',
//         'box-shadow': '4px 4px 0px #673AB7',

//         'transform': 'scale(1.13)'
//     });
// });

// $('#exampleModal').on('show.bs.modal', function (event) {
//     var button = $(event.relatedTarget) // Button that triggered the modal
//     var recipient = button.data('whatever') // Extract info from data-* attributes
//     // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
//     // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
//     var modal = $(this)
//     modal.find('.modal-title').text('New message to ' + recipient)
//     modal.find('.modal-body input').val(recipient)
//   })


// var myModal = document.getElementById('box-change-address')
// var myInput = document.getElementById('myInput')

// myModal.addEventListener('shown.bs.modal', function () {
//   myInput.focus()
// })




// Buat stop scroll
// buat stop scroll yg bagian kanan
let summarycheckout = document.getElementById('summary-checkout');
var body = document.body;
var html = document.documentElement;
var bodyH = Math.max(body.scrollHeight,  body.getBoundingClientRect().height, html.clientHeight, html.scrollHeight, html.offsetHeight);
var position = bodyH-708;

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
