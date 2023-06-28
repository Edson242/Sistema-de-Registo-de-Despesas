<?php 
    include "assets/db/db.php";

    $query = "SELECT categorias.nome FROM categorias;";
    $categorias = $connection->query($query);
    
    while ($categoria = $categorias->fetch_assoc()) {
        $c[] =  $categoria['nome'];
    }
    // echo "<pre>";
    // print_r($c);
?>