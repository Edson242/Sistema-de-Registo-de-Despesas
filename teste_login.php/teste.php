<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($username == "usuario" && $email == "exemplo@example.com" && $password == "senha123") {
      header("Location: dashboard.php");
      exit();
    } else {
      $error_message = "Credenciais inválidas. Por favor, tente novamente.";
    }
  }
  ?>
  
  <div class="container">
    <h2>Sistema de Controle de Despesas</h2>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
      <input type="text" name="username" placeholder="Nome de usuário">
      <input type="email" name="email" placeholder="E-mail">
      <input type="password" name="password" placeholder="Senha">
      <button type="submit">Login</button>
    </form>
    <?php
    if (isset($error_message)) {
      echo '<p class="error-message">' . $error_message . '</p>';
    }
    ?>
  </div>
</body>
</html>
