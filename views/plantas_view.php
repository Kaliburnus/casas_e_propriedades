<?php

  $form = !empty($_GET["id"]);
  if($form){
    $id = intval($_GET["id"]);
    $pe = getProjetoEspecifico($id);
    $predios = getTodosPrediosPorPai($id);
  }


?>

  <!-- MAIN ====== -->

  <main class="container-fluid pt-5 px-0">

    <!-- first title -->

    <div class="row title mb-4 ps-1">
      <div class="col-12">
        <h1><span>Pla</span>tas e Preçários - (<?= $pe["nome"] ?>) </h1>
        <div class="red-separator"></div>
      </div>
    </div>

    <div class="row mb-4 px-5 px-5">
      <div class="col-1"></div>
      <div class="col-12 px-5 text-justify">
        <?= $pe["planta"] ?>
      </div>
    </div>
    <div class="row m-auto">
      <div class="col-12 text-center m-auto my-5">
        <table>
          <tr>
            <th>Tipologia</th>
            <th>Área</th>
            <th>Estado</th>
            <th>Valor</th>
          </tr>

          <?php foreach($predios as $p): ?>

            <tr>
              <td><?= $p["tipo"] ?></td>
              <td><?= $p["area"] ?>	m³</td>
              <td><?= $p["estado"]?></td>
              <td><?= $p["valor"]?> €</td>
            </tr>
            
          <?php endforeach ?>

        </table>
      </div>
    </div>


  </main>

