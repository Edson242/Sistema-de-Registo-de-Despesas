<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se o ID do registro foi fornecido
    if (isset($_POST["id"])) {
        $id = $_POST["id"];

        // Aqui você deve adicionar a lógica para excluir o registro do banco de dados
        // Substitua esta linha pelo código de exclusão apropriado

        echo "Registro excluído com sucesso.";
    } else {
        echo "ID do registro não fornecido.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>

<?php include "calcular.php"?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/imgs/favicon.ico" type="image/x-icon">
    <title>Sistema de Registo de Despesas</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Sistema de Registro de Despesas</h1>
        <div class="container">
            <div class="gastos">
                <p>Gastos Totais</p>
                <p id="gastosTotais"><?php echo $dados?></p>
            </div>
            <div class="categoria">
                <p>Categorias</p>
                <!--<button id="buttonCategoria" class="material-symbols-outlined">filter_list</button>-->
                <form class="filter" id="filtro-form">
                    <input type="checkbox" name="filtro-nome" value="Alimentação">
                    <label for="">Alimentação</label><br>
                    <input type="checkbox" name="filtro-nome" value="Transporte">
                    <label for="">Transporte</label><br>
                    <input type="checkbox" name="filtro-nome" value="Compras">
                    <label for="">Compras</label><br>
                    <input type="checkbox" name="filtro-nome" value="Internet">
                    <label for="">Internet</label><br>
                    <input type="checkbox" name="filtro-nome" value="Carro">
                    <label for="">Carro</label><br>
                    <input type="checkbox" name="filtro-nome" value="Tecnologia">
                    <label for="">Tecnologia</label><br>
                </form>
            </div>
        </div>
    </header>
    <main>
        <table id="tabela">
        
            <tr data-id="1">
                <th class="descricao">Descrição</th>
                <th>Valor</th>
                <th>Data</th>
                <th>Categoria</th>
                <th>Ações</th</tr>
<tr data-id="1">
    <td>Lanche</td>
    <td class="valor">R$ 15,00</td>
    <td>12/06/2023</td>
    <td>Alimentação</td>
    <td><button onclick="excluirRegistro(this)" class="material-symbols-outlined">delete</button></td> 
</tr></table>
<div class="addDespesa">
    <button onclick="abrirPopup()" id="Despesas" class="material-symbols-outlined">add_circle</button>
</div>
<div id="popup" class="popup">
    <form action="inserirDespesas.php" method="POST" class="popUp">
        <h1>Item</h1>
        <label for="">Descrição</label><br>
        <input class="popUp" type="text" name="Descrição" id="Descrição" placeholder="Ex. Sanduíche" ><br>
        <label for="">Valor</label><br>
        <input class="popUp" type="number" name="Valor" id="Valor" placeholder="20.00"><br>
        <label for="">Data</label><br>
        <input class="popUp" type="date" name="Data" id="Data"><br>
        <label for="">Categoria</label><br>
        <input class="popUp" type="checkbox" name="opcoes[]" value="Alimentação" id="opcao1" onclick="cliqueUnico(this)">
        <label for="Alimentação">Alimentação</label><br><input class="popUp" type="checkbox" name="opcoes[]" value="Transporte" id="opcao2" onclick="cliqueUnico(this)">
    <label for="Transporte">Transporte</label><br>

    <input class="popUp" type="checkbox" name="opcoes[]" value="Compras Online" id="opcao3" onclick="cliqueUnico(this)">
    <label for="Compras">Compras Online</label><br>

    <input class="popUp" type="checkbox" name="opcoes[]" value="Internet" id="opcao4" onclick="cliqueUnico(this)">
    <label for="Internet">Internet</label><br>

    <input class="popUp" type="checkbox" name="opcoes[]" value="Carro" id="opcao5" onclick="cliqueUnico(this)">
    <label for="Carro">Carro</label><br>
    
    <input class="popUp" type="checkbox" name="opcoes[]" value="Tecnologia" id="opcao6" onclick="cliqueUnico(this)">
    <label for="Tecnologia">Tecnologia</label><br>
    <button type="submit" class="buttonPopup">Salvar</button>
    <button type="button" class="buttonPopup" id="cancelar" onclick="fecharPopup()">Cancelar</button>
</form></div>
<div id="overlay" class="overlay"></div>
</main>
<footer>
    <div class="content">
        <p class="footer">Site desenvolvido por <a href="https://github.com/Edson242" target="_blank">Edson Silveira</a> & <a href="https://github.com/HeitorSeibert" target="_blank">Heitor Sibert</a> - <a href="https://www.instagram.com/senacsaomigueldooeste/" target
    
    </footer>
<script>
function excluirRegistro(button) {
    const row = button.parentNode.parentNode; // Obtém a linha do registro
    const id = row.getAttribute("data-id"); // Obtém o ID do registro
    row.remove(); // Remove a linha da tabela// Envia a solicitação de exclusão do registro para o servidor
const formData = new FormData();
formData.append("id", id);

fetch("excluirRegistro.php", {
    method: "POST",
    body: formData
})
.then(response => response.text())
.then(data => {
    console.log(data); // Exibe a resposta do servidor no console (opcional)
})
.catch(error => {
    console.error("Ocorreu um erro:", error);
});
<script src="assets/js/index.js"></script>
</body>
</html>