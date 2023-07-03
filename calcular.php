<?php 
    include "assets/db/db.php";
    $id_us = $_GET['id'];
    $query = "SELECT SUM(despesas.valor) FROM despesas WHERE usuario_id = $id_us";
    $processamento = mysqli_query($connection, $query);
    $dados = mysqli_fetch_array($processamento, MYSQLI_ASSOC);
    $dados = implode(', ', $dados);
    if($dados == null) {
        $dados = 0;
    }
    // print_r($dados);
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    $dados = numfmt_format_currency($padrao, $dados, "BRL");
    // echo $dados;
?>