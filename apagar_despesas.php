<?php
include './assets/db/db.php';

$despesas = json_decode(file_get_contents('php://input'), true);

$id = $despesas['id'];

if ($id != '') {
    $SQL = "DELETE FROM contatos WHERE id = :id";

    $sql_preparado = $conn->prepare($SQL);
    $sql_preparado->bindParam(':id', $id);

    $sql_preparado->execute();
    echo json_encode(array('status' => true));
} else {
    echo json_encode(array('status' => false));
}
?>
