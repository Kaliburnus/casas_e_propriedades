
<?php

  $form = !empty($_GET["id"]);
  if($form){
    $id = intval($_GET["id"]);
    $pe = getProjetoEspecifico($id);
  }


?>
  <!-- MAIN ====== -->

  <main class="container-fluid pt-5 px-0">

    <!-- first title -->

    <div class="row title mb-4 ps-1">
      <div class="col-12">
        <h1><span>Aca</span>bamentos - (<?= $pe["nome"] ?>) </h1>
      </div>
    </div>

    <div class="row mb-4 px-5 px-5">
      <div class="col-1"></div>
      <div class="col-12 px-5 text-justify">
        <?= $pe["acabamentos"] ?>
      </div>
    </div>
    <div class="row mb-5 px-5">
      <div class="col-1"></div>
      <div class="col-12 px-5 mb-5 text-justify">
        <?= $pe["acabamentos"] ?>
      </div>
    </div>


  </main>

