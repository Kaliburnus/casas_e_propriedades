<?php

$form = !empty($_GET["id"]);
if($form){
    $id = intval($_GET["id"]);
    $pe = getProjetoEspecifico($id);
    $predios = getTodosPrediosPorPai($id);

  }

  print_r($pe);

?>

  <!-- MAIN ====== -->

  <main class="container-fluid pt-5 px-0">

    <!-- first title -->

    <div class="row title mb-5 ps-1">
      <div class="col-12 mb-5">
        <h1>
          Projectos em Comercialização
          <br>
          <?= $pe["nome"] ?>
        </h1>
      </div>
    </div>

    <div class="row my-4">
      <div class="col-12 px-5 text-justify d-flex justify-content-center gap-5 flex-wrap projects m-auto">

        <?php foreach($predios as $p): ?>

          <?php 
          
          $imagens = json_decode($p["imagens"]); 

          ?>

        
          <div class="project" style="background-image: url('<?= $imagens[0] ?>');">
            <div><h3><?= $p["nome"] ?></h3></div>
              <div class="see-more">
                <a href="predio.php?id=<?= $p["id"] ?>">
                  <button>Ver Mais</button>
                </a>
              </div>
          </div>
        
        <?php endforeach ?>

      </div>
    </div>

    <div class="row g-0 finish-touch ">
      <div class="col-12 m-auto text-center ">
      <h1>Acabamentos, <span>Plan</span>tas e Preçários</h1>
      </div>
      <div class="col-12 d-flex justify-content-center gap-5">
        
        <a href="acabamentos.php?id=<?= $pe["id"] ?>">
          <div id="acabamentos"></div>
        </a>
        <a href="plantas.php">
          <div id="plantas"></div>
        </a>
      </div>
    </div>


  </main>

