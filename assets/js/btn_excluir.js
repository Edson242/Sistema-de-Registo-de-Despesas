<<<<<<< HEAD
// Função para remover  despesas
function removerDespesas(id) {
    var despesas = { id }
    fetch("models/apagar_despesas.php", {
        method: "POST",
        Headers: {
            'Content-type': 'application/json'
        },
        body: JSON.stringify(despesas)
    }).then(Response => {
        if (Response.status) {
            mostrarLista();
            alert("dados removidos")
        }else {
            
            alert("Erro ao remover os dados.")
        }
    }
    ).cartch(error => {
        alert("Ocorreu um erro!" + error)
    })
}
=======


// Função para excluir um produto
// function excluirProduto(event) {
//     var botao = event.target; 
//     var linha = botao.closest('tr'); 
//     linha.remove(); 
//   }
//   var botoesExcluir = document.querySelectorAll('.excluir');
//   botoesExcluir.forEach(function(botao) {
//     botao.addEventListener('click', excluirProduto);
//   });
//   function abrirPopup() {  
//   }
//   function fecharPopup() {
//   }
>>>>>>> aeb06722b6f53fd42f5ef3d4f00974b1223cb3d2
