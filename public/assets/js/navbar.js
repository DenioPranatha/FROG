const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav .nav2');
menuToggle.addEventListener('click', function(){
    alert("masuk kok");
    nav.classList.toggle('slide');
})

// // Mendapatkan semua kunci yang ada dalam Local Storage
// var keys = Object.keys(localStorage);

// // Menampilkan kunci-kunci dan nilainya
// keys.forEach(function(key) {
//   var value = localStorage.getItem(key);
//   console.log(key + ': ' + value);
// });

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
