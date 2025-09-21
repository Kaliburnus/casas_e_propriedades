<?php 
$editar_pre = (!empty($_GET["editar_pre"])) ? ($_GET["editar_pre"]) : "";

$verf = !empty($_GET["proj_pai"]) && !empty($_GET["tipo_pre"]) && !empty($_GET["imagens_pre"]) && isset($_GET["mostrar_pre"]);
if($verf){
    $proj_pai = $_GET["proj_pai"];
    $tipo_pre = $_GET["tipo_pre"];
    $imagens_pre = $_GET["imagens_pre"];
    $mostrar_pre = $_GET["mostrar_pre"];
    
    
    iduSql("UPDATE predios SET tipo='$tipo_pre', id_projecto='$proj_pai', imagens='$imagens_pre', mostrar='$mostrar_pre' WHERE id=$editar_pre");
}
else{
    echo "proj_pai: " . $_GET["proj_pai"] . "<br>";
    echo "Tipo_pre: " . $_GET["tipo_pre"] . "<br>";
    echo "Imagens_pre: " . $_GET["imagens_pre"] . "<br>";
    echo "Mostrar_pre: " . $_GET["mostrar_pre"] . "<br>";
    
}
if ($editar_pre > 0) {
  $pred = getPredioEspecifico($editar_pre);
  $projectos = getProjectosDropdown();
}
?>

<main class="container">

        <div class="col-12 text-center w-100 m-auto rounded-4 box mt-5">
            <form action="" onsubmit="operacaoConcluida()">

            <input type="hidden" name="editar_pre" value="<?= $editar_pre ?>">

                <a href="#" onclick="fecharPopup()">FECHAR</a>
        

                <img src="<?= $pred["imagens"] ?>" alt="" width="180">
                
                <br>
                <input type="text" name="imagens_pre" placeholder="Imagem" required readonly id="imagens" value="<?= $pred["imagens"] ?>">
                <button type="button" class="btn btn-danger" onclick="abrirPopupGestor('imagens')">Ficheiros</button>
                <br>
        
                <select name="proj_pai" required>

                    <option value="" style="color: white;" disabled>--- Projecto ---</option>

                    <?php foreach($projectos as $pai): ?> 

                        <option value="<?= $pai["id"] ?>" ><?= $pai["nome"] ?></option>

                    <?php endforeach ?>

                </select>

                <br><br>
                <input type="text" name="tipo_pre" step="any" placeholder="Texto" value="<?= $pred["tipo"] ?>">
                <br><br>
                <select name="mostrar_pre" required>

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