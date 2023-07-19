<?php
include "categorias.js";
$categoria = json_decode(file_get_contents('php://input'), true);
session_start();
$id_usuario = $_SESSION['id_us'];

insertCategoria($categoria['nome'], $id_usuario);


function insertCategoria($nome, $id) {
    include "assets/db/db.php";
    $query = "INSERT INTO categorias(nome, id_usuario) VALUES ('$nome', $id);";
    $process = mysqli_query($connection, $query);
    if($process) {
        exit(json_encode(array("status" => true)));
    } else {
        exit(json_encode(array("status" => false)));
    }
}

?>