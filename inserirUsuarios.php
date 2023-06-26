<?php
    include "../assets/db/db.php";

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM usuarios WHERE usuarios.nome = '$username';";
    $process = mysqli_query($connection, $query);
    $db = $process->fetch_assoc();
    // print_r($db);

    if ($db) {
        // header("location: index.html");
        echo '<script>alert("✅ Usuário inserido com sucesso !")</script>';
        echo '<script>window.location.href = document.referrer;</script>';
        // echo "✅ Dado inserido com sucesso !";
    } else {
        // echo "❌ Dado não inserido !: " . mysqli_error($connection);
        // header("location: index.html");
        echo '<script>alert("❌ Usuário não inserido !")</script>';
        echo '<script>window.location.href = document.referrer;</script>';
    }
    mysqli_close($connection);
?>
?>