<?php 

$verf = !empty($_GET["novo_proj_pai"]) && !empty($_GET["novo_tipo_pre"]) && !empty($_GET["novo_imagens_pre"]) && isset($_GET["novo_mostrar_pre"]);
if($verf){
    $novo_proj_pai = $_GET["novo_proj_pai"];
    $novo_tipo_pre = $_GET["novo_tipo_pre"];
    $novo_imagens_pre = $_GET["novo_imagens_pre"];
    $novo_mostrar_pre = $_GET["novo_mostrar_pre"];
    
    
    iduSql("INSERT INTO predios (tipo, id_projecto, imagens, mostrar) VALUES ('$novo_tipo_pre', '$novo_proj_pai', '$novo_imagens_pre', '$novo_mostrar_pre')");
}

  $projectos = getProjectosDropdown();
?>

<main class="container">

        <div class="col-12 text-center w-100 m-auto rounded-4 box mt-5">
            <form action="" onsubmit="operacaoConcluida()">

                <a href="#" onclick="fecharPopup()">FECHAR</a>
        

                
                <br>
                <input type="text" name="novo_imagens_pre" placeholder="Imagem" required readonly id="imagens">
                <button type="button" class="btn btn-danger" onclick="abrirPopupGestor('imagens')">Ficheiros</button>
                <br>
        
                <select name="novo_proj_pai" required>

                    <option value="" style="color: white;" disabled>--- Projecto ---</option>

                    <?php foreach($projectos as $pai): ?> 

                        <option value="<?= $pai["id"] ?>"><?= $pai["nome"] ?></option>

                    <?php endforeach ?>

                </select>

                <br><br>
                <input type="text" name="novo_tipo_pre" step="any" placeholder="Tipo">
                <br><br>
                <select name="novo_mostrar_pre" required>

                    <option value="" style="color: white;" disabled>--- Mostrar na Home ---</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>

                </select>
                
                
            </div>
            
            
            
            
        
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