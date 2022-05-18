// Modificar, deshabilitar el readonly y el disabled de los inputs
//Variables
const btnModificar = document.querySelector('#mod');
const btnSave = document.querySelector('#save');
const inputUser = document.querySelector('#document');


//AddEventListener
btnModificar.addEventListener('click',unlockInfo)

function unlockInfo() {
        btnModificar.setAttribute('disabled', false);
        inputBlock= document.getElementsByClassName("blockInput");
            for (var i=0;i<inputBlock.length;i++) {
                inputBlock[i].removeAttribute("readonly");
            }
            selectBlock=document.getElementsByClassName("seleccionar");
            btnMod = document.querySelector('#mod');
            for (var i=0;i<selectBlock.length;i++) {
                selectBlock[i].removeAttribute("disabled");
            }
            inputUser.setAttribute('disabled', true);
}