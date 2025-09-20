<?php

$predios = getTodosPrediosHome();
$total_predios = count($predios);

?>

  <!-- MAIN ====== -->

  <main class="container-fluid pt-5 px-0">




    <?php foreach($predios as $i => $p): ?>

      <?php
        $pai = getProjetoEspecifico($p["id_projecto"]);
        $imagens = json_decode($p["imagens"]);
      ?>

      <div class="row title">
        <div class="col-6">
          <h1><?= $pai["nome"] ?></h1>
          <div class="red-separator"></div>
        </div>
      </div>


      <div class="row carousel-margin">
        <div class="col-12 m-auto px-0">
          <div id="carousel<?= $p["id"] ?>" class="carousel slide">

            <?php 

              $total_paginas = ceil(count($imagens) / 4);

            ?>

            <div class="carousel-inner">


              <?php for($j=0; $j<$total_paginas; $j++): ?>

                <div class="carousel-item <?= ($j == 0) ? "active" : "" ?>">
                  <div class="carousel-imgs">

                    <?php $ip = getImagensPagina($p["id"], $j+1) ?>

                    <?php foreach($ip as $foto): ?>

                      <div><img src="<?= $foto ?>" alt="<?= $foto ?>" class="d-block"></div>

                    <?php endforeach ?>
                  </div>
                </div>

              <?php endfor ?>
            </div>
            

            <!-- caroussel1 indicators and buttons -->
              
            <div class="carousel-indicators-buttons m-auto">
              <h4><?= $pai["nome"] ?></h4>
              <h4><?= $p["tipo"] ?></h4>
              <div class="my-4 d-flex justify-content-center align-items-center  w-fit-content m-auto">

                <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?= $p["id"] ?>" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>

                <div class="carousel-indicators m-auto mx-3">
                  <?php for($j=0; $j<$total_paginas; $j++): ?>

                    <button 
                    type="button" 
                    data-bs-target="#carousel<?= $p["id"] ?>" 
                    data-bs-slide-to="<?= $j ?>" 
                    class="<?= ($j == 0) ? "active" : "" ?>" 
                    aria-label="Slide <?= $j+1 ?>">
                    </button>

                  <?php endfor ?>
                  

                </div>
              
                <button class="carousel-control-next" type="button" data-bs-target="#carousel<?= $p["id"] ?>" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

              </div>
              <br>
              <div class="see-more">
                <a href="#">
                  <button class="see-more">Ver Mais</button>
                </a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>

      <?php if($i < count($predios)-1): ?>

      <div class="row pb-5">
        <div class="col-12 px-0">
          <div class="separator"></div>
        </div>
      </div>

      <?php endif ?>


    <?php endforeach ?>

    
  </main>

