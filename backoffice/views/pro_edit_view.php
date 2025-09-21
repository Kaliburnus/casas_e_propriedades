<?php 
$editar_pro = (!empty($_GET["editar_pro"])) ? ($_GET["editar_pro"]) : 0;


if ($editar_pro > 0) {
  $proj = getProjetoEspecifico($editar_pro);
  $pred = getTodosPrediosPorPai($editar_pro);
}


$verf = !empty($_GET["nome_pro"]) && !empty($_GET["acabamentos_pro"]);

if($verf){
    $nome_pro = $_GET["nome_pro"];
    $acabamentos_pro = $_GET["acabamentos_pro"];

    
    iduSql("UPDATE projectos SET nome='$nome_pro', acabamentos='$acabamentos_pro' WHERE id=$editar_pro");
}

foreach($pred as $i => $p){

    $verf2 =  !empty($_GET["tipo_pro".$i]) && !empty($_GET["area_pro".$i]) && !empty($_GET["estado_pro".$i]) && !empty($_GET["valor_pro".$i]);
    if($verf2){
    
        $tipo_pro = $_GET["tipo_pro".$i];
        $area_pro = intval($_GET["area_pro".$i]);
        $estado_pro = $_GET["estado_pro".$i];
        $valor_pro= floatval($_GET["valor_pro$i"]);
        
        iduSql("UPDATE predios SET tipo='$tipo_pro', area=$area_pro, estado='$estado_pro', valor=$valor_pro WHERE id={$p['id']}");

    }

}

if(!empty($_GET["planta_pro"])){
    $planta_pro = $_GET["planta_pro"];

    iduSql("UPDATE projectos SET planta='$planta_pro' WHERE id=$editar_pro");

}


?>

<main class="container">
    <div class="row py-5">
        <div class="col text-center">
            <a href="#" onclick="fecharPopup()">FECHAR</a>
        </div>

        <div class="col-12 text-center w-100 m-auto rounded-4 box">
            <form action="" onsubmit="operacaoConcluida()">
                <input type="hidden" name="editar_pro" value="<?= $editar_pro ?>">

                <input type="text" name="nome_pro" placeholder="Título" value="<?= $proj["nome"] ?>">
                <br><br>
                <textarea name="acabamentos_pro" id=""><?= $proj["acabamentos"] ?></textarea>
                <br><br>
                <input type="submit" value="Guardar" class="w-25 m-auto mt-5">
                <br>
                <button type="button" onclick="fecharPopup()" class="m-auto">Cancelar</button>
            </form>
        </div>

        <div class="col-12 text-center text-success w-75 m-auto rounded-4">
        </div>
    </div>
    <div class="row py-5">


        <div class="col-12 text-center w-100 m-auto rounded-4 box">
            <form action="" onsubmit="operacaoConcluida()">
                <input type="hidden" name="editar_pro" value="<?= $editar_pro ?>">
                <textarea name="planta_pro" id=""><?= $proj["planta"] ?></textarea>
                <br><br>
                <table>
                    <tr>
                        <th>Tipologia</th>
                        <th>Área</th>
                        <th>Estado</th>
                        <th>Valor</th>
                    </tr>

                    <?php foreach($pred as $i => $p): ?>

                    <tr>
                        <td><input type="text" name="tipo_pro<?= $i ?>" placeholder="Tipologia" value="<?= $p["tipo"] ?>"></td>
                        <td><input type="number" step="any" name="area_pro<?= $i ?>" placeholder="Área(m³)" value="<?= $p["area"] ?>"></td>
                        <td><input type="text" name="estado_pro<?= $i ?>" placeholder="Estado" value="<?= $p["estado"] ?>"></td>
                        <td><input type="number" name="valor_pro<?= $i ?>" step="0.01" placeholder="Valor(€)" value="<?= $p["valor"] ?>"></td>
                    </tr>
                    
                    <?php endforeach ?>

                </table>

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