const iconsuccess = document.getElementById('type-success');
const text = document.getElementById('type-success').value;
iconsuccess.onclick = function() {
    if(true){
        swal(text, " ", "success", {
            buttons: false,
            timer: 1500,
        });
    } else{
        swal(text, " ", "error", {
            buttons: false,
            timer: 1500,
        });
    }
}
 b
