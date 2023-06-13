// const imgInputHelper = document.getElementById("add-single-img");
// const imgInputHelperLabel = document.getElementById("add-img-label");
// const imgContainer = document.querySelector(".custom__image-container");
// const imgFiles = [];

// const addImgHandler = () => {
//   const file = imgInputHelper.files[0];
//   if (!file) return;
//   // Generate img preview
//   const reader = new FileReader();
//   reader.readAsDataURL(file);
//   reader.onload = () => {
//     const newImg = document.createElement("img");
//     newImg.src = reader.result;
//     imgContainer.insertBefore(newImg, imgInputHelperLabel);
//   };
//   // Store img file
//   imgFiles.push(file);
// };
// imgInputHelper.addEventListener("change", addImgHandler);

// const getImgFileList = (imgFiles) => {
//   const imgFilesHelper = new DataTransfer();
//   imgFiles.forEach((imgFile) => imgFilesHelper.items.add(imgFile));
//   return imgFilesHelper.files;
// };

// const customFormSubmitHandler = (ev) => {
//   ev.preventDefault();
//   const firstImgInput = document.getElementById("image-input");
//   firstImgInput.files = getImgFileList(imgFiles);
// };
// document
//   .querySelector(".custom__form")
//   .addEventListener("submit", customFormSubmitHandler);


// const imgInputHelper = document.getElementById("img-input");
// const imgInputHelperLabel = document.getElementById("input-label");
// const imgContainer = document.querySelector("img-container");
// const imgFiles = [];

// const addImgHandler = () => {
//     const file = imgInputHelper.files[0];
//     if (!file) return;
//     // Generate img preview
//     const reader = new FileReader();
//     reader.readAsDataURL(file);
//     reader.onload = () => {
//       const newImg = document.createElement("img");
//       newImg.src = reader.result;
//       imgContainer.insertBefore(newImg, imgInputHelperLabel);
//     };
//     // Store img file
//   imgFiles.push(file);
// };
// imgInputHelper.addEventListener("change", addImgHandler);

// trying to make image preview hehe
const product_img = document.getElementById("img");
const input_label = document.getElementById("input-label");
const img_input = document.getElementById("img-input");

function showPreview(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("img");
      preview.src = src;
      preview.style.display = "block";
    //   product_img.style.backgroundImage = preview.src;
    }
}

img_input.addEventListener("input", (event) => {
      input_label.style.display = "none";
      img_input.style.display = "none";
      product_img.style.display = "block";
  });

// declare variable

const form = document.getElementById("form");
const product_name = document.getElementById("product-name");
const product_category = document.getElementById("product-category");
const product_stock = document.getElementById("product-stock");
const product_price = document.getElementById("product-price");
const product_modal = document.getElementById("product-modal");
const product_desc = document.getElementById("product-desc");

const invalid_prod1 = document.getElementById("invalid-feedback1");
const invalid_prod2 = document.getElementById("invalid-feedback2");
const invalid_prod3 = document.getElementById("invalid-feedback3");
const invalid_prod4 = document.getElementById("invalid-feedback4");
const trying = document.getElementById("validationServer01");

// validation for product_name
product_name.addEventListener("input", (event) => {
  if (product_name.value.length > 0  && product_name.value.length < 3) {
    invalid_prod1.innerHTML = "Product Name Must be More than 3 Character";
    invalid_prod1.style.display = "block";
    // invalid_txt.style.display = "none";
  }
  else if (product_name.value.length > 2){
    invalid_prod1.style.display = "none";
  } else if (product_name.value.length < 1) {
    invalid_prod1.innerHTML = "Please Input your Product Name";
    invalid_prod1.style.display = "block";
  }
});

// avoid minus value in input number
product_stock.onkeydown = function(e) {
    if(!((e.keyCode > 95 && e.keyCode < 106)
      || (e.keyCode > 47 && e.keyCode < 58)
      || e.keyCode == 8)) {
        return false;
    }
}
product_stock.onkeydown = function(e) {
    if(!((e.keyCode > 95 && e.keyCode < 106)
      || (e.keyCode > 47 && e.keyCode < 58)
      || e.keyCode == 8)) {
        return false;
    }
}

product_price.onkeydown = function(e) {
    if(!((e.keyCode > 95 && e.keyCode < 106)
      || (e.keyCode > 47 && e.keyCode < 58)
      || e.keyCode == 8)) {
        return false;
    }
}
product_price.onkeydown = function(e) {
    if(!((e.keyCode > 95 && e.keyCode < 106)
      || (e.keyCode > 47 && e.keyCode < 58)
      || e.keyCode == 8)) {
        return false;
    }
}

product_modal.onkeydown = function(e) {
    if(!((e.keyCode > 95 && e.keyCode < 106)
      || (e.keyCode > 47 && e.keyCode < 58)
      || e.keyCode == 8)) {
        return false;
    }
}
product_modal.onkeydown = function(e) {
    if(!((e.keyCode > 95 && e.keyCode < 106)
      || (e.keyCode > 47 && e.keyCode < 58)
      || e.keyCode == 8)) {
        return false;
    }
}

// for desc
// form.addEventListener("submit", submitForm);
// function submitForm(e) {
//     e.preventDefault();
//     if (product_desc.value === "") {
//         product_desc.style.border = "1px solid red";
//     } else if (product_desc.value.length > 0) {
//         product_desc.style.border = "1px solid blue";
//     } else{
//         product_desc.style.border = "1px solid blue";
//     }
// }





// (function () {
//     const forms = document.querySelectorAll('.needs-validation');

//     for (let form of forms) {
//       form.addEventListener(
//         'submit',
//         function (event) {
//           if (
//             !form.checkValidity() ||
//             !validateEmail() ||
//             !validateUsername() ||
//             !validatePassword()
//           ) {
//             event.preventDefault();
//             event.stopPropagation();
//           } else {
//             form.classList.add('was-validated');
//           }
//         },
//         false
//       );
//     }
//   })();



