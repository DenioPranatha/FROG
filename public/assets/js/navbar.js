const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav .nav2');
menuToggle.addEventListener('click', function(){
    console.log("masuk");
    nav.classList.toggle('slide');
});

console.log("Masuk");

// $(document).ready(function(){
//     // ketika see more diclick
//     $(document).on('click', '#menu-toggle', function(){

//     });
// });

// Mendapatkan semua kunci yang ada dalam Local Storage
var keys = Object.keys(localStorage);

// Menampilkan kunci-kunci dan nilainya
keys.forEach(function(key) {
  var value = localStorage.getItem(key);
  console.log(key + ': ' + value);
});

let logOutUser = document.getElementById('logOutUser');
let logOutAuth = document.getElementById('logOutAuth');
let logOutAdmin = document.getElementById('logOutAdmin');

function souser(){
    localStorage.removeItem('userInputName');
    localStorage.removeItem('userInputPhone');
    localStorage.removeItem('userInputAddress');
}

function soauth(){
    localStorage.removeItem('userInputName');
    localStorage.removeItem('userInputPhone');
    localStorage.removeItem('userInputAddress');
}

function soadmin(){
    localStorage.removeItem('userInputName');
    localStorage.removeItem('userInputPhone');
    localStorage.removeItem('userInputAddress');
}
