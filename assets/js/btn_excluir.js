
// //Função para remover  despesas

// function removerDespesas(id) {
//     var despesas = { id }
//     fetch("models/apagar_despesas.php", {
//         method: "POST",
//         Headers: {
//             'Content-type': 'application/json'
//         },
//         body: JSON.stringify(despesas)
//     }).then(Response => {
//         if (Response.status) {
//             mostrarLista();
//             alert("dados removidos")
//         }else {
            
//             alert("Erro ao remover os dados.")
//         }
//     }
//     ).cartch(error => {
//         alert("Ocorreu um erro!" + error)
//     })
// }