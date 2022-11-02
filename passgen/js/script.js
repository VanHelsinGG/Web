const slider = document.getElementById("tamanho");
const valor = document.getElementById("charlenght");
const senha = document.getElementById("senha");

slider.onchange = function(){
    valor.value = slider.value;
}

function teste(){
    var result = "";
    var chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for ( let i = 0; i < valor.value; i++ ) {
        result += chars.charAt(Math.floor(Math.random() * valor.value));
    }
    senha.value = result;
}

