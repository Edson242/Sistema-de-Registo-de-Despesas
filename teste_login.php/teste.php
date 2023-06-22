
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
  // if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //   $username = $_POST["username"];
  //   $email = $_POST["email"];
  //   $password = $_POST["password"];

  //   if ($username == "usuario" && $email == "exemplo@example.com" && $password == "senha123") {
  //     header("Location: dashboard.php");
  //     exit();
  //   } else {
  //     $error_message = "Credenciais inválidas. Por favor, tente novamente.";
  //   }
  // }
  ?>
  
  <div class="container">
    <h2>Sistema de Controle de Despesas</h2>
    <form action="login.php" method="POST">
      <input type="text" name="username" placeholder="Nome de usuário">
      <input type="email" name="email" placeholder="E-mail">
      <input type="password" name="password" placeholder="Senha">
      <button type="submit">Login</button>
      <button type="button"><a href="cadastro.html">Cadastro</a></button>
      <p><?php //echo $retono?></p>
    </form>
  </div>
</body>
</html>
