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
    <p><?php foreach($c as $categoriA){
        echo "<form id='formCategoria' method='POST' action='buscarCat.php'><input type='checkbox' id='categoria' name='opcoes[]'>" .$categoriA . "<br><br>";
    }?> <button type='submit'>Enviar</button></p>
</body>
</html> 