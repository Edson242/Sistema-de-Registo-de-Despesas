<?php 
$post = json_decode(file_get_contents('php://input'), true);

$idCategoria = $post['idCategoria'];

function excluirCategoria($categoria) {
    include "assets/db/db.php";
    $deleteCat = "DELETE FROM categorias WHERE id = $categoria;";

    $process = mysqli_query($connection, $deleteCat);
    if($process) {
        exit(json_encode(array("status" => true)));
    } else {
        exit(json_encode(array("status" => false)));
    }

    mysqli_close($connection);
}
excluirCategoria($idCategoria);
?>