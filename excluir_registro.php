<?php 
    include "assets/db/db.php";

    $conexao = mysqli_connect($host, $usuario, $senha, $banco);


if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $consulta = "DELETE FROM despesas WHERE id = $id";

    
    if (mysqli_query($conexao, $consulta)) {

        echo "Registro excluído com sucesso.";
    } else {
        echo "Erro ao excluir o registro: " . mysqli_error($conexao);
    }
}

mysqli_close($conexao);
?>