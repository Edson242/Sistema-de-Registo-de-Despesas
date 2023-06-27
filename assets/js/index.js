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

function abrirPopup1() {
    var popup = document.getElementById("popup");
    var overlay = document.getElementById("overlay");

    // Exibir o popup e o overlay
    popup.style.display = "block";
    overlay.style.display = "block";
}

function fecharPopup1() {
    var popup = document.getElementById("popup");
    var overlay = document.getElementById("overlay");

    // Ocultar o popup e o overlay
    popup.style.display = "none";
    overlay.style.display = "none";
}

// Filtro para tabela
var checkboxes = document.querySelectorAll('input[type="checkbox"]');

checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener("change", function() {
        filtrarTabela();
    }); 
});

function filtrarTabela() {
    var tabela = document.getElementById("tabela");
    var linhas = tabela.getElementsByTagName("tr");
    
    var filtroSelecionado = false;

    for (var i = 1; i < linhas.length; i++) {
        var colunas = linhas[i].getElementsByTagName("td");
        var nome = colunas[colunas.length - 1].textContent || colunas[colunas.length - 1].innerText;

        

        var filtroCheckbox = document.querySelector('input[name="filtro-nome"][value="' + nome + '"]');

        if (filtroCheckbox && filtroCheckbox.checked) {
            linhas[i].style.display = "";
            filtroSelecionado = true;
        } else {
            linhas[i].style.display = "none";
        }
    }

    if (!filtroSelecionado) {
        for (var i = 1; i < linhas.length; i++) {
            linhas[i].style.display = "";
        }
    }
}

// Função para criar e manipular categorias

function criarCategorias(){
    var name = document.getElementById("nome_categoria").value;
    var form = document.getElementById("formCategoria");

    
    var data = {
        nome: name
    }

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
    ).catch(error => {
            console.log("Ocorreu um erro!" + error)
        }
    )
}

