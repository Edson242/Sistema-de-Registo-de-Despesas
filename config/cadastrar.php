<?php 
include "../assets/db/db.php";

$nome = $_POST["username"];
$email = $_POST["email"];
$senha = $_POST["password"];
// echo $nome . "<br>" . $email . "<br>" . $senha;

$query = "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email','$senha')";

if (mysqli_query($connection, $query)) {
    // header("location: index.html");
    echo '<script>alert("✅ Usuário inserido com sucesso !")</script>';
    echo '<script>window.location.href = document.referrer;</script>';
    // echo "✅ Dado inserido com sucesso !";
} else {
    // echo "❌ Dado não inserido !: " . mysqli_error($connection);
    // header("location: index.html");
    echo '<script>alert("❌ Erro ao inserir o usuário Tente novamente !")</script>';
    echo '<script>window.location.href = document.referrer;</script>';
}
mysqli_close($connection);
?>