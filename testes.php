<meta charset="UTF-08">
<link rel="stylesheet" href="assets/css/style.css">

<div class="addDespesa">
    <button onclick="abrirPopup()" id="Despesas" class="material-symbols-outlined">add_circle</button>
</div>
<div>
    <a href="relatorio.php"><button>Gerar Relatório</button></a>
</div>
<div id="popup" class="popup">
    <form action="inserirDespesas.php" method="POST">
        <h1>Item</h1>
        <label for="Descrição">Descrição</label><br>
        <input class="popUp" type="text" name="Descrição" id="Descrição" placeholder="Ex. Sanduíche"><br>
        <label for="Valor">Valor</label><br>
        <input class="popUp" type="number" name="Valor" id="Valor" placeholder="20.00"><br>
        <label for="Data">Data</label><br>
        <input class="popUp" type="date" name="Data" id="Data"><br>
        <label for="Categoria">Categoria</label><br>
        <!-- <input class="popUp" type="checkbox" name="opcoes[]" value="Alimentação" id="opcao1" onclick="cliqueUnico(this)">
        <label for="Alimentação">Alimentação</label><br>

        <input class="popUp" type="checkbox" name="opcoes[]" value="Transporte" id="opcao2" onclick="cliqueUnico(this)">
        <label for="Transporte">Transporte</label><br>

        <input class="popUp" type="checkbox" name="opcoes[]" value="Compras Online" id="opcao3" onclick="cliqueUnico(this)">
        <label for="Compras">Compras Online</label><br>

        <input class="popUp" type="checkbox" name="opcoes[]" value="Internet" id="opcao4" onclick="cliqueUnico(this)">
        <label for="Internet">Internet</label><br>

        <input class="popUp" type="checkbox" name="opcoes[]" value="Carro" id="opcao5" onclick="cliqueUnico(this)">
        <label for="Carro">Carro</label><br>
        
        <input class="popUp" type="checkbox" name="opcoes[]" value="Tecnologia" id="opcao6" onclick="cliqueUnico(this)">
        <label for="Tecnologia">Tecnologia</label><br> -->
        <?php
        foreach ($cat as $key => $value) {
            print_r("<input class='popUp' type='checkbox' name='opcoes[]' onclick='cliqueUnico(this)'>");
            print_r("<label>" . $value . "</label><br>");
        }
        ?>
        <button type="submit" class="buttonPopup">Salvar</button>
        <button type="button" class="buttonPopup" id="cancelar" onclick="fecharPopup()">Cancelar</button>
</div>
<div id="overlay" class="overlay"></div>
<script>
    function abrirPopup() {
        var popup = document.getElementById("popup");
        var overlay = document.getElementById("overlay");

        // Exibir o popup e o overlay
        popup.style.display = "block";
        overlay.style.display = "block";
    }

    function fecharPopup() {
        var popup = document.getElementById("popup");
        var overlay = document.getElementById("overlay");

        // Ocultar o popup e o overlay
        popup.style.display = "none";
        overlay.style.display = "none";
    }
    function abrirPopupCategorias() {
        var popupCategoria = document.getElementById("popup1");
        var overlayCategoria = document.getElementById("overlay");

        // Exibir o popup e o overlay
        popupCategoria.style.display = "block";
        overlayCategoria.style.display = "block";
    }

    function fecharPopupCategorias() {
        var popupCategoria = document.getElementById("popup1");
        var overlayCategoria = document.getElementById("overlay");

        // Ocultar o popup e o overlay
        popupCategoria.style.display = "none";
        overlayCategoria.style.display = "none";
    }
</script>