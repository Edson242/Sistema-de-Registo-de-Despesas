function criarCategorias(){
    var name = document.getElementById("nome_categoria").value;
    var form = document.getElementById("formCategoria");

    // Objeto principal que recebe os dados
    var data = {
        nome: name
    }
    // Função para enviar
    fetch("categorias.php", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    }).then(response => {
            if(response.status) {
                form.reset()
                console.log("Dados Enviados")
                return JSON.stringify(response)
            } else {
                console.log("Erros ao enviar os dados.")
            }
        }
    ).then(
        Dados => {
            console.log(Dados)
        }
        // Escopo de erros
    ).catch(error => {
            console.log("Ocorreu um erro!" + error)
        }
    )
}

// Funções Extras

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