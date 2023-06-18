<?php 
// Variavél constante
define("HOST",  'localhost');
define("USER",  'root');
define("PASSWORD",  '');
define("NAME_DATABASE",  'sistema_despesa');

// Configurações de conexão com o Banco de Dados MySQL
$connection = mysqli_connect(HOST, USER, PASSWORD, NAME_DATABASE);

// if($connection){
//     echo "✅ Conectado ao servidor !";
// } else { 
//     echo "❌ Não foi possivel conectar no banco de dados !";
// }
?>