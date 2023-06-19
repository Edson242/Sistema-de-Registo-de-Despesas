<?php 
    include "assets/db/db.php";
    include "index.html";
    include "calcular.php";
    $query = "SELECT SUM(despesas.valor) FROM despesas";
    $processamento = mysqli_query($connection, $query);
    $dados = mysqli_fetch_array($processamento, MYSQLI_ASSOC);
    $dados = implode(', ', $dados);
    echo $dados;
?>