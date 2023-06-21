<?php
include "assets/db/db.php";
// Executa a consulta para recuperar o dado desejado
$sql = "SELECT seu_campo FROM sua_tabela";
$result = $connection->query($sql);

// Verifica se há resultados e recupera o valor
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $valorAtualizado = $row["seu_campo"];
} else {
    $valorAtualizado = "Nenhum dado encontrado";
}

$conn->close();

// Retorna o valor como uma resposta
echo $valorAtualizado;
?>
