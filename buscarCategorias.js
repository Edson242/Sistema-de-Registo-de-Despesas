function buscarCategorias(){
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