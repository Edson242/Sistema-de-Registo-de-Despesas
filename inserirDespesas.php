<?php
    include "assets/db/db.php";
    include "teste_login.php/login.php";

    // Recebe os valores do Popup
    $descricao = $_POST["Descrição"];
    $valor = $_POST["Valor"];
    $data = $_POST["Data"];
    $categoria = "";
    if(isset($_POST['opcoes'])) {
        $opcoesSelecionadas = $_POST['opcoes'];
      
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


    $query = "INSERT INTO despesas (usuario_id, categoria_id, valor, data, descricao) VALUES ($id, $categoria, $valor, '$data', '$descricao');";
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