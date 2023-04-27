// const { forEach } = require("lodash");

// kotak plus min
let minBtn = document.getElementsByClassName('minus');
let plusBtn = document.getElementsByClassName('plus');
let qty = document.getElementsByClassName('prodQty');

for(let i=0; i<minBtn.length; i++){
    plusBtn[i].addEventListener('click', ()=>{
        qty[i].value++;
    })

    minBtn[i].addEventListener('click',  ()=>{
        if (qty[i].value>1){
            qty[i].value--;
        }
        else{
            qty[i].value = 1;
        }
    })
}
// kotak plus min

// checkbox
let checkAll = document.getElementById("selectAll");
let eventCheck = document.getElementsByName("eventCheck");
let itemCheck = document.getElementsByName("itemCheck");
let eventCheckLen = eventCheck.length;
let itemCheckLen = itemCheck.length;

eventCheck = Array.prototype.slice.call(eventCheck);
itemCheck = Array.prototype.slice.call(itemCheck);

// console.log("hai");

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
                    itemCheck[i].checked = true;
                }
            }
        // uncheck si event
        }else{
            checkAll.checked = false;
            element.checked = false;
            for(let i=0; i<itemCheck.length; i++){
                itemCheck[i].checked = false;
            }
        }
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
                    eventCheck[i].checked = false;
                }
            }
        // uncheck si item
        }else{
            checkAll.checked = false;
            for(let i=0; i<eventCheckLen; i++){
                eventCheck[i].checked = false;
            }
        }
    })
})


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
