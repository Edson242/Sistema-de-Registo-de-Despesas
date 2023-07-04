<?php 
    include "buscarId.js";
    $ID = json_decode(file_get_contents('php://input'), true);

    function buscarId($name){
        include  "assets/db/db.php";
        $sql = "SELECT usuarios.id FROM usuarios WHERE usuarios.nome = '$name'";
        $sql = $connection->query($sql)->fetch_assoc();
    }
    buscarId($ID['email']);

?>