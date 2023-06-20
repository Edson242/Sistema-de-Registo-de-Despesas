<?php
print_r($_POST);
exit;
function insertCategoria($nome) {
    include "assets/db/db.php";
    $query = "INSERT INTO categoria (nome) VALUES ('$nome');";
    $process = mysqli_query($connection, $query);
}
function deleteCategoria($nome) {
    include "assets/db/db.php";
    $query = "DELETE FROM categoria WHERE categoria.nome = $nome";
    $process = mysqli_query($connection, $query);
}
?>