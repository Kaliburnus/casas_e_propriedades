<?php 

$verf = !empty($_GET["novo_imagens_por"]) && !empty($_GET["novo_nome_por"]);
if($verf){
    $novo_imagens_por = $_GET["novo_imagens_por"];
    $novo_nome_por = $_GET["novo_nome_por"];

    
    iduSql("INSERT INTO portfolio (imagens, nome) VALUES ('$novo_imagens_por', '$novo_nome_por')");
}

?>

<main class="container">

        <div class="col-12 text-center w-100 m-auto rounded-4 box mt-5">



            <form action="" onsubmit="operacaoConcluida()">

                <a href="#" onclick="fecharPopup()">FECHAR</a>
        
                <br>
                <input type="text" name="novo_imagens_por" placeholder="Imagem" required readonly id="imagens">
                <button type="button" class="btn btn-danger" onclick="abrirPopupGestor('imagens')">Ficheiros</button>
                <br><br>
                <input type="text" name="novo_nome_por" step="any" placeholder="Nome" required>

                <br><br>
                <input type="submit" value="Guardar" class="w-25 m-auto mt-5">
                <br>
                <button type="button" onclick="fecharPopup()" class="m-auto">Cancelar</button>
                
            </form>
            
            
            
            
        
    
        </div>

        <div class="col-12 text-center text-success w-75 m-auto rounded-4">
        </div>
    </div>
</main>