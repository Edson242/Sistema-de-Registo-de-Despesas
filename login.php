<?php 
include "assets/db/db.php";
include "logout.php";


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
    $id = implode(', ', $id);

    // $url = "index.php?id=" . urlencode($id); 
    // header("Location: $url"); 
    // exit;
    // $calcular = "calcular.php?id=" . urlencode($id); 
    // header("Location: $calcular"); 
    // exit;
    // $despesas = "inserirDespesas.php?id=" . urlencode($id); 
    // header("Location: $despesas"); 
    // exit;


    if ($username == $nomeDB && $email == $emailDB && $password == $senhaDB) {
            session_start();
            $_SESSION['logged'] = true;
            $_SESSION['usuario'] = $username;
            $_SESSION['id_us'] = $id;
            header("location: index.php");
            exit();
        } else {
            echo '<script>alert("❌ Usuário ou Senha inválido! Tente novamente!")</script>';
            echo '<script>window.location.href = document.referrer;</script>';
        }
?>