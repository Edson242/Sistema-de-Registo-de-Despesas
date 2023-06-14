<?php 
if(isset($_POST['opcoes'])) {
    $opcoesSelecionadas = $_POST['opcoes'];
  
    // Exibe as opções selecionadas
    foreach($opcoesSelecionadas as $opcao) {
      echo "Opção selecionada: " . $opcao . "<br>";
    }
  } else {
    echo "Nenhuma opção foi selecionada";
  }
  

?>