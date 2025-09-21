<?php 

$form = !empty($_GET["id"]);
if($form){
  $id = intval($_GET["id"]);
  $ee = getEmpresaEspecifica($id);
}


?>
  <!-- MAIN ====== -->

  <main class="container-fluid pt-5 px-0">

    <!-- first title -->

    <div class="row title mb-4 ps-1">
      <div class="col-6">
        <h1><?= $ee["titulo"] ?></h1>
        <div class="red-separator"></div>
      </div>
    </div>

    <div class="row mb-4 px-5 px-5">
      <div class="col-1"></div>
      <div class="col-12 px-5 text-justify">
        <?= $ee["texto"] ?>
      </div>
    </div>
   

  </main>

