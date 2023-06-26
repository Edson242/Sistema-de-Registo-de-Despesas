<?php 
include "../assets/db/db.php";

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM usuarios WHERE usuarios.nome = '$username';";
    $process = mysqli_query($connection, $query);
    $db = $process->fetch_assoc();
    // print_r($db);
    $nomeDB = $db["nome"];
    $emailDB = $db["email"];
    $senhaDB = $db["senha"];
    $ID = "SELECT usuarios.id FROM usuarios WHERE usuarios.nome = '$username';";
    $id = mysqli_query($connection, $ID) -> fetch_assoc();
    // print_r($id);

    if ($username == $nomeDB && $email == $emailDB && $password == $senhaDB) {
            header("location: index.php");
            exit();
        } else {
            header("location: login.html");
            $error_message = "Credenciais inválidas. Por favor, tente novamente.";
        }
        if (isset($error_message)) {
            $retorno =  $error_message;
        }
?>