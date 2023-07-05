<?php 
    include "assets/db/db.php";

    $email = $_POST["email"];
    $senha = $_POST["password"];
    $senhaConf = $_POST["senhaConf"];

    if($senha === $senhaConf) {
        $senha = $senhaConf;
    } else {
        echo "<script>alert('Nova senha e confimar senha não coincidem!')</script>";
        echo '<script>window.location.href = document.referrer;</script>';
    }

    // echo $email . $senha . $senhaConf

    $query = "UPDATE usuarios SET senha = '$senha' WHERE usuarios.email = '$email'";
    $query = $connection->query($query);
    if($query) {
        echo "<script>alert('Senha alterada com sucesso!')</script>";
        echo '<script>window.location.href = document.referrer;</script>';
    } else {
        echo "<script>alert('Erro ao alterar a senha!')</script>";
    }

?>