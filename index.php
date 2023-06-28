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
                <button id="buttonCategoria" class="material-symbols-outlined" onclick="abrirPopup1()">filter_list</button>
                <div class="addDespesa">
                </div>
                <div id="popup" class="popup">
                    <form action="" method="" class="popUp" id="formCategoria">
                        <h1 style="font-size: 50px;">Categoria</h1>
                        <label for="">Nome da Categoria</label><br>
                        <input class="popUp" type="text" name="Descrição" id="nome_categoria" placeholder="Ex. Alimentação" >
                        <button type="button" onclick="criarCategorias()" style="border: 2px solid  black; width: 40px; height: 25px;">Add</button><br>
                        <button style="border: 2px solid  black; width: 40px; height: 25px;" type="button">Del</button><br>
                        <button type="submit" class="buttonPopup">Salvar</button>
                        <button type="button" class="buttonPopup" id="cancelar" onclick="fecharPopup()">Cancelar</button>
                </div>
                <div id="overlay" class="overlay"></div>
                <!-- <form class="filter" id="filtro-form">
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
                </form> -->
            </div>
        </div>
    </header>
    <main>
        <table id="tabela">
            <tr>
<<<<<<< HEAD
    <th class="descricao">Descrição</th>
    <th>Valor</th>
    <th>Data</th>
    <th>Categoria</th>
    <th>Ações</th> 
</tr>

=======
                <th class="descricao">Descrição</th>
                <th>Valor</th>
                <th>Data</th>
                <th>Categoria</th>
                <th>Ações</th> <!-- Nova coluna -->
            </tr>
>>>>>>> 285f80d1c91e879898554a54e57a0cc551346e02
<!-- <tr>
    <td>Lanche</td>
    <td class="valor">R$ 15,00</td>
    <td>12/06/2023</td>
    <td>Alimentação</td>
    <td><button onclick="excluirRegistro(this)" class="material-symbols-outlined">delete</button></td> 
<<<<<<< HEAD
</tr> -->
            
=======
</tr>   -->
>>>>>>> 285f80d1c91e879898554a54e57a0cc551346e02
        </table>
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
                <label for="Alimentação">Alimentação</label><br>

                <input class="popUp" type="checkbox" name="opcoes[]" value="Transporte" id="opcao2" onclick="cliqueUnico(this)">
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
        </div>
        <div id="overlay" class="overlay"></div>
    </main>
    <footer>
        <div class="content">
            <p class="footer">Site desenvolvido por <a href="https://github.com/Edson242" target="_blank">Edson Silveira</a> & <a href="https://github.com/HeitorSeibert" target="_blank">Heitor Sibert</a> - <a href="https://www.instagram.com/senacsaomigueldooeste/" target="_blank">Senac SMO</a></p>
        </div>
    </footer>
<script>
function excluirRegistro(button) {
    const row = button.parentNode.parentNode; // Obtém a linha do registro
    row.remove(); // Remove a linha da tabela
}
</script>

    <script src="assets/js/index.js"></script>
</body>
</html>