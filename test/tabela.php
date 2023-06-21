<?php 
    include "assets/db/db.php";

    global $connection;

    $sql = "SELECT * FROM despesas";
    $result = $connection->query($sql);

    // $array = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // print_r($array);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Descrição: " . $row['descricao'] . "<br>";
            echo "Valor: " . $row['valor'] . "<br>";
            echo "Data: " . date('d/m/Y', strtotime($row['data'])) . "<br>";
            echo "<br>";
        }
    } else {
        echo "Nenhum produto encontrado.";
    }
?>