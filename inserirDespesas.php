<?php
    include "assets/db/db.php";
    session_start();
    
    $id_us = $_SESSION['id_us'];

    // Recebe os valores do Popup
    $descricao = $_POST["Descricao"];
    $valor = $_POST["Valor"];
    $data = $_POST["Data"];
    $categoria_id = $_POST["opcoes"];
    

    $query = "INSERT INTO despesas (usuario_id, categoria_id, valor, data, descricao) VALUES ($id_us, $categoria_id, $valor, '$data', '$descricao');";
    // print_r($query);
    if (mysqli_query($connection, $query)) {
        // header("location: index.html");
        echo '<script>alert("✅ Dado inserido com sucesso !")</script>';
        echo '<script>window.location.href = document.referrer;</script>';
        // echo "✅ Dado inserido com sucesso !";
    } else {
         //echo "❌ Dado não inserido !: " . mysqli_error($connection);
        // header("location: index.html");
        echo '<script>alert("❌ Dado não inserido !")</script>';
        echo '<script>window.location.href = document.referrer;</script>';
    }
    mysqli_close($connection);
?>