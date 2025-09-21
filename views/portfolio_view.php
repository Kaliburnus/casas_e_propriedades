<?php 


$form = !empty($_GET["id"]);
if($form){
  $id = intval($_GET["id"]);
  $p = getPortEspecifico($id);
  $imagens = json_decode($p["imagens"]);
}
?>

  <main class="container-fluid pt-5 px-0">

    

    <div class="row title ms-5">
      <div class="col-12">
        <h1 class="mt-4 mx-0">Portfólio</h1>
        <h1 class="mx-0"><?= $p["nome"] ?></h1>
      </div>
    </div>

    <div class="row my-5">
      <div class="col-1"></div>
      <div class="ms-5 col-6 p-0">
        <div id="portfolio<?= $p["id"] ?>" class="carousel slide">
          <div class="carousel-inner">


            <?php foreach($imagens as $i => $img): ?>


              <div class="carousel-item <?= ($i == 0) ? "active" : "" ?>">
                <img src="<?= $img ?>" class="d-block m-auto" alt="<?= $i ?>">
              </div>

            <?php endforeach ?>

          </div>
          
        </div>
      </div>
      <div class="col-4 carousel-indicators-port">
        <div class="d-flex justify-content-center align-items-center">

            <button class="carousel-control-prev portfolio-prev" type="button" data-bs-target="#portfolio<?= $p["id"] ?>" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>

            <div class="carousel-buttons-port">


              <?php foreach($imagens as $i => $img): ?>

                <button type="button" 
                data-bs-target="#portfolio<?= $p["id"] ?>" 
                data-bs-slide-to="<?= $i ?>" 
                class="<?= ($i == 0) ? "active" : "" ?>" 
                aria-current="true" 
                aria-label="Slide <?= $i ?>">

                <img src="<?= $img ?>" alt="<?= $img ?>">
              
                </button>
                

              <?php endforeach ?>
             
            </div>
            <button class="carousel-control-next portfolio-next" type="button" data-bs-target="#portfolio<?= $p["id"] ?>" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div> 
      </div>
    </div>

  </main>

