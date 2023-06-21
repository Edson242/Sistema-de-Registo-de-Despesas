<?php 
include "../assets/db/db.php";

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($username == "usuario" && $email == "exemplo@example.com" && $password == "senha123") {
            header("location: .../index.php");
            exit();
        } else {
            $error_message = "Credenciais inválidas. Por favor, tente novamente.";
        }

        if (isset($error_message)) {
            $retono =  '<p class="error-message">' . $error_message . '</p>';
        }
?>