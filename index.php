<?php 
    include "calcular.php";
    include "caminho.php";

    $id_usuario = $_SESSION['id_us'];
    $procurar_categorias = "SELECT * FROM categorias WHERE id_usuario = $id_usuario";
    $procurar_categorias = $conn->query($procurar_categorias);
    $controle = False;
    while ($id_categoria = $procurar_categorias->fetch_assoc()) {
        $cat[$id_categoria['id']] =  $id_categoria['nome'];
        $controle = True;
    }
    if(($_SESSION['logged'] == False)) {
        header("location:login.html");
    }
?>
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
    <script src="assets/js/index.js"></script>
</head>
<body>
    <header>
        <h2 id="bemVindo">Bem vindo <?php echo $_SESSION['usuario'];?></h2>
        <a href="config/logout.php"><button id="logout">Logout</button></a>
        <h1>Sistema de Registro de Despesas</h1>
        <div class="container">
            <div class="gastos">
                <p>Gastos Totais</p>
                <p id="gastosTotais"><?php echo $gastos?></p>
            </div>
            
            <div class="addCategoria">
                <label for="" style="font-size: 35px;">Categorias</label><br>
                <input class="popUp" type="text" name="Descrição" id="nome_categoria" placeholder="Ex. Alimentação">
                <button type="button" onclick="criarCategorias()" style="border: 2px solid  black; width: 40px; height: 25px;">Add</button>
                <?php
                if($controle == False) {
                    print_r("<br>" . "<label>" . "Sem Categorias!" . "</label>");
                } else {
                    foreach ($cat as $key => $value) {
                        print_r("<br>" . "<label>" . $value . "</label>");
                        print_r("<button style='border: 2px solid  black; width: 40px; height: 25px;' type='button' id='cancelar1' onclick='excluirCategoria($key)'>Del</button>");
                    }
                }
                ?>
            </div>
        </div>
    </header>
    <main>
       <table id="tabela">
    <tr>
        <th class="descricao">Descrição</th>
        <th>Valor</th>
        <th>Data</th>
        <th>Categoria</th>
        <th>Ações</th>
    </tr>
    <?php
    $sql = "SELECT * FROM despesas";
    $result = mysqli_query($conn, $sql);
    while ($dados = $result->fetch_assoc()) {
        $dadosUsuario[] =  $dados;
    }
    // echo "<pre>";
    // print_r($dados);
    foreach ($dadosUsuario as $key => $valor) {
        if($valor["usuario_id"] == $_SESSION['id_us']) {
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            $id = $valor['categoria_id'];
            $query = "SELECT categorias.nome FROM categorias WHERE categorias.id = $id";
            $ID = $conn->query($query)->fetch_assoc()   ;
            // print_r($valor);
            print_r("<tr>");
            print_r("<td>" . $valor["descricao"] . "</td>");
            print_r("<td>" . numfmt_format_currency($padrao, $valor["valor"], "BRL") . "</td>");
            print_r("<td>" . date('d/m/Y', strtotime($valor["data"])) . "</td>");
            print_r("<td>" . $ID['nome'] . "</td>");
            echo "<td><button onclick='excluirRegistro(" . $valor["id"] . ")'>Excluir</button>";
            echo "</tr>";
        }
    }
            ?>
        </table>
        <div class="addDespesa">
            <button onclick="abrirPopup()" id="Despesas" class="material-symbols-outlined">add_circle</button>
        </div>
        <div>   
            <a href="relatorio.php" target="_blank"><button id="gerarRelatorio">Gerar<br>Relatório</button></a>
        </div>
        <div id="popup" class="popup">
            <form action="config/inserirDespesas.php" method="POST">
                <h1>Item</h1>
                <label for="Descrição">Descrição</label><br>
                <input class="popUp" type="text" name="Descricao" id="Descricao" placeholder="Ex. Sanduíche"><br>
                <label for="Valor">Valor</label><br>
                <input class="popUp" type="number" name="Valor" id="Valor" placeholder="20.00"><br>
                <label for="Data">Data</label><br>
                <input class="popUp" type="date" name="Data" id="Data"><br>
                <label for="Categoria">Categoria</label><br>
                <div id="opcCat">
                <?php
                if($controle == False) {
                    echo "Sem categorias criadas";
                } else {
                    foreach ($cat as $key => $value) {
                        echo "<input class='popUp' type='radio' name='opcoes' value='$key'><label>" . $value . "</label><br>";
                }   
                }
                ?>
                </div>
                <button type="submit" class="buttonPopup">Salvar</button>
                <button type="button" class="buttonPopup" id="cancelar" onclick="fecharPopup()">Cancelar</button>
        </div>
        <div id="overlay" class="overlay"></div>
    </main>
    <footer>
        <div class="content">
            <p class="footer">Site desenvolvido por <a href="https://github.com/Edson242" target="_blank">Edson Silveira</a> & <a href="https://github.com/HeitorSeibert" target="_blank">Heitor Seibert</a> - <a href="https://www.instagram.com/senacsaomigueldooeste/" target="_blank">Senac SMO</a></p>
        </div>
    </footer>
</body>
</html>
