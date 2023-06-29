const iconsuccess = document.getElementById('type-success');
const text = document.getElementById('type-success').value;
iconsuccess.onclick = function() {
    if(true){
        swal(text, " ", "success", {
            buttons: false,
            timer: 5000,
        });
    } else{
        swal(text, " ", "error", {
            buttons: false,
            timer: 1500,
        });
    }
}

function swal(){
    const iconsuccess = document.getElementById('type-success');
    const text = document.getElementById('type-success').value;
    swal(text, " ", "success", {
        buttons: false,
        timer: 5000,
    });
}
