<?php
    include "assets/db/db.php";

    // Recebe os valores do Popup
    $descricao = $_GET["Descrição"];
    $valor = $_GET["Valor"];
    $data = $_GET["Data"];
    $categoria = "";
    if(isset($_GET['opcoes'])) {
        $opcoesSelecionadas = $_GET['opcoes'];
      
        // Exibe as opções selecionadas
        foreach($opcoesSelecionadas as $opcao) {
          $categoria = $opcao;
        }
      } else {
        echo "Nenhuma opção foi selecionada";
      }
    $queryCategorias = "SELECT categorias.id FROM categorias WHERE categorias.nome = '$categoria';";
    $processamento = mysqli_query($connection, $queryCategorias);
    // $categoriaDado = mysqli_fetch_array($processamento);
    // print_r($processamento->fetch_assoc());
    $categoria = $processamento->fetch_assoc();
    $categoria = $categoria["id"];
    // print_r($categoria);


    $query = "INSERT INTO despesas (id_usuario, id_categoria, valor, data, descricao) VALUES (0, $categoria, $valor, '$data', '$descricao');";

    if (mysqli_query($connection, $query)) {
        // header("location: index.html");
        echo '<script>alert("✅ Dado inserido com sucesso !")</script>';
        echo '<script>window.location.href = document.referrer;</script>';
        // echo "✅ Dado inserido com sucesso !";
    } else {
        // echo "❌ Dado não inserido !: " . mysqli_error($connection);
        // header("location: index.html");
        echo '<script>alert("❌ Dado não inserido !")</script>';
        echo '<script>window.location.href = document.referrer;</script>';
    }
    mysqli_close($connection);
?>