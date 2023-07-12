<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
    <?php
    include "caminho.php";
    include "calcular.php";
    $despesas = "SELECT * FROM despesas";
    $result = mysqli_query($conn, $despesas);
    while ($results = $result->fetch_assoc()) {
        $c[] =  $results;
    }
    // echo "<pre>";
    // print_r($c);
    ?>
    <style>
        body {
            text-align: center;
        }
        div {
            display: flex;
            justify-content: center;
        }
        td, th {
            border: 1px solid black;
            border-collapse: collapse;
            margin: 0px;
            text-align: center;
            font-size: 25px;
            padding-left: 80px;
            padding-right: 80px;
        }
    </style>
</head>
<body>
    <h1>Relatório - <?php echo date("d/m/Y");?></h1>
    <div>
        <table>
        <tr>
            <th class="descricao">Descrição</th>
            <th>Data</th>
            <th>Valor</th>
        </tr>
        <?php
        foreach ($c as $key => $value) {
            if($value["usuario_id"] == $_SESSION['id_us']) {
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                $id = $value['categoria_id'];
                $query = "SELECT categorias.nome FROM categorias WHERE categorias.id = $id";
                $ID = $conn->query($query)->fetch_assoc()   ;
                // print_r($value);
                print_r("<tr>");
                print_r("<td>" . $value["descricao"] . "</td>");
                print_r("<td>" . date('d/m/Y', strtotime($value["data"])) . "</td>");
                print_r("<td>" . numfmt_format_currency($padrao, $value["valor"], "BRL") . "</td>");
                echo "</tr>";
            }
        }?>
        <tr>
            <th colspan="2" >Total Gasto</th>
            <td><?php echo $gastos?></td>
        </tr>
        </table>
    </div>
</body>
</html>