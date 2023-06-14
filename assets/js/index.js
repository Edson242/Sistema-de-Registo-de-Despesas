 // Para a seleção da Categoria ser única
 function cliqueUnico(checkbox) {
    var checkboxes = document.getElementsByName(checkbox.name);

    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] !== checkbox) {
            checkboxes[i].checked = false;
        }
    }
}

// Funções para o Popup
function abrirPopup() {
    var popup = document.getElementById("popup");
    var overlay = document.getElementById("overlay");

    // Exibir o popup e o overlay
    popup.style.display = "block";
    overlay.style.display = "block";
}

function fecharPopup() {
    var popup = document.getElementById("popup");
    var overlay = document.getElementById("overlay");

    // Ocultar o popup e o overlay
    popup.style.display = "none";
    overlay.style.display = "none";
}