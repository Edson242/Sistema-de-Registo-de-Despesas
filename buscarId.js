function buscarId(){
    var email = document.getElementById("email").value;
    var form = document.getElementById("formLogin");

    
    var data = {
        email: email
    }

    fetch("buscarCategorias.php", {
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