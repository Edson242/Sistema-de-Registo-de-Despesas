<?php 
session_start();


require_once 'db_connect.php';

// Função para listar os produtos
function listarProdutos()
{
    global $conn;

    $sql = "SELECT * FROM produtos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row['id'] . "<br>";
            echo "Nome: " . $row['nome'] . "<br>";
            echo "Quantidade: " . $row['quantidade'] . "<br>";
            echo "Validade: " . $row['validade'] . "<br>";
            echo "<br>";
        }
    } else {
        echo "Nenhum produto encontrado.";
    }
}

// Verificar se o formulário de adicionar produto foi enviado
if (isset($_POST['nome']) && isset($_POST['quantidade']) && isset($_POST['validade'])) {
    $nome = $_POST['nome'];
    $quantidade = $_POST['quantidade'];
    $validade = $_POST['validade'];


    // Inserir o produto no banco de dados
    $sql = "INSERT INTO produtos (nome, quantidade, validade) VALUES ('$nome', $quantidade, $validade)";
    if ($conn->query($sql) === true) {
        echo "Produto adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar produto: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Painel de Controle</title>
</head>
<body>
    <h2>Bem-vindo(a), <?php echo $_SESSION['user_nome']; ?>!</h2>
    <h3>Lista de Produtos</h3>
    <?php listarProdutos(); ?>
    <h3>Adicionar Produto</h3>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="nome" placeholder="Nome do Produto" required><br><br>
        <input type="number" name="quantidade" placeholder="Quantidade" required><br><br>
        <input type="date" step="0.01" name="validade" placeholder="validade" required><br><br>
        <input type="submit" value="Adicionar Produto">
    </form>
    <br>
    <a href="logout.php">Sair</a>
</body>
</html> 

?>