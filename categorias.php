<?php
include "categorias.js";
$categoria = json_decode(file_get_contents('php://input'), true);
print_r($categoria);
exit;
function insertCategoria($nome) {
    include "assets/db/db.php";
    $query = "INSERT INTO categoria (nome) VALUES ('$nome');";
    $process = mysqli_query($connection, $query);
    if($process) {
        exit(json_encode(array("status" => true)));
    } else {
        exit(json_encode(array("status" => false)));
    }
}
function deleteCategoria($nome) {
    include "assets/db/db.php";
    $query = "DELETE FROM categoria WHERE categoria.nome = $nome";
    $process = mysqli_query($connection, $query);
}
?>