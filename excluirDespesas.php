<?php
$post = json_decode(file_get_contents('php://input'), true);


$idDespesa = $post['idDespesa'];

function excluirDespesas($param) {
    include "assets/db/db.php";
    $query = "DELETE FROM despesas WHERE id = $param;";

    $process = mysqli_query($connection, $query);
    if($process) {
        exit(json_encode(array("status" => true)));
    } else {
        exit(json_encode(array("status" => false)));
    }

    mysqli_close($connection);
}

excluirDespesas($idDespesa); 

?>