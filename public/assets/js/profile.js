var button = document.getElementById("button-edit");

button.addEventListener("click", function() {
    // alert('jnck')
    var mainPage = document.getElementById("main");
    var subPage = document.getElementById("edit");

    if (mainPage.style.display !== "none") {
        mainPage.style.display = "none";
        subPage.style.display = "block";
    }
    else{
        mainPage.style.display = "block";
        subPage.style.display = "none";
        alert('jnck2')
    }
});

var buttonedit = document.querySelector("#save");

buttonedit.addEventListener("click", function() {
    var mainPage2 = document.querySelector("#main");
    var subPage2 = document.querySelector("#edit");

    if (subPage2.style.display !== "none") {
        subPage2.style.display = "none";
        mainPage2.style.display = "block";
    }
    else{
        subPage2.style.display = "block";
        mainPage2.style.display = "none";
    }
});

const frame = document.getElementById('frame');
const file = document.getElementById('file');
const reader = new FileReader();
reader.addEventListener("load", function () {
  frame.style.backgroundImage = `url(${ reader.result })`;
}, false);
file.addEventListener('change',function() {
  const image = this.files[0];
  if(image) reader.readAsDataURL(image);
}, false)
