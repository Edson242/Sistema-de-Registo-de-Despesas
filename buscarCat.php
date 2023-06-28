<?php
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
    var_dump($categoria);
?>