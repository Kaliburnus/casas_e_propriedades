<?php 
$editar_por = (!empty($_GET["editar_por"])) ? ($_GET["editar_por"]) : 0;

$verf = !empty($_GET["imagens_por"]) && !empty($_GET["nome_por"]);
if($verf){
    $imagens_por = $_GET["imagens_por"];
    $nome_por = $_GET["nome_por"];

    
    
    iduSql("UPDATE portfolio SET imagens='$imagens_por', nome='$nome_por' WHERE id=$editar_por");
}
// else{
//     echo "proj_pai: " . $_GET["proj_pai"] . "<br>";
//     echo "Tipo_pre: " . $_GET["tipo_pre"] . "<br>";
//     echo "Imagens_pre: " . $_GET["imagens_pre"] . "<br>";
//     echo "Mostrar_pre: " . $_GET["mostrar_pre"] . "<br>";
    
// }
if ($editar_por > 0) {
  $port = getPortEspecifico($editar_por);
}
?>

<main class="container">

        <div class="col-12 text-center w-100 m-auto rounded-4 box mt-5">
            <form action="" onsubmit="operacaoConcluida()">

                <input type="hidden" name="editar_por" value="<?= $editar_por ?>">

                <a href="#" onclick="fecharPopup()">FECHAR</a>
        

                <img src="<?= $port["imagens"] ?>" alt="" width="180">
            
                <br>
                <input type="text" name="imagens_por" placeholder="Imagem" required readonly id="imagens" value="<?= $port["imagens"] ?>">
                <button type="button" class="btn btn-danger" onclick="abrirPopupGestor('imagens')">Ficheiros</button>
                <br><br>
                <input type="text" name="nome_por" step="any" placeholder="Nome" value="<?= $port["nome"] ?>">   
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