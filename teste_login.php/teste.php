<?php include "login.php"?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <h2>Sistema de Controle de Despesas</h2>
    <form method="POST" action="login.php">
      <input type="text" name="username" placeholder="Nome de usuário">
      <input type="email" name="email" placeholder="E-mail">
      <input type="password" name="password" placeholder="Senha">
      <button type="submit">Login</button>
      <p><?php echo $retono?></p>
    </form>
  </div>
</body>
</html>
