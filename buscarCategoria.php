<?php include "buscarCategorias.php"?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Categorias</h1>
    <?php //foreach($c as $categoriA){
        // echo "<form id='formCategoria' method='POST' action='buscarCat.php'><input type='checkbox' id='categoria' name='opcoes[]'>" . "<label onclick='cliqueUnico(this)'>" . $categoriA . "</label>" . "<br>";
    //}?>
    <form action="buscarCat.php" method="POST">
        <?php foreach($c as $categoriA){
            echo "<input type='checkbox' id='categoria' name='opcoes[]' onclick='cliqueUnico(this)'>" . "<label>" . $categoriA . "</label>";
            echo "<br>";
        }
        ?>
    <button type='submit'>Enviar</button>
    </form>
    <script src="assets/js/index.js"></script>
</body>
</html> 