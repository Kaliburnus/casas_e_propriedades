<?php

$form = !empty($_GET["id"]);
if($form){
  $id = intval($_GET["id"]);
  $pe = getPredioEspecifico($id);
  $pai = getProjetoEspecifico($pe["id_projecto"]);
  $imagens = json_decode($pe["imagens"]);
}


?>

  <main class="container-fluid pt-5 px-0">

    

    <div class="row title ms-5">
      <div class="col-2 ms-5 "><h1 class="big-text"><span><?= $pe["tipo"] ?></span></h1></div>
      <div class="col-6">
        <h1 class="mt-4 mx-0">Projectos em Comercialização</h1>
        <h1 class="mt-4 mx-0"><?= $pai["nome"] ?></h1>
      </div>
    </div>

    <div class="row">
      <div class="col-12 ">
        <div id="predio" class="carousel slide">
          <div class="carousel-inner predios">

            <?php foreach($imagens as $i => $img): ?>


              <div class="carousel-item <?= ($i == 0) ? "active" : "" ?>">
                <img src="<?= $img ?>" class="d-block m-auto" alt="<?= $i ?>">
              </div>

            <?php endforeach ?>
           
          </div>
          <br><br>
          <div class="mb-5 d-flex justify-content-center align-items-center w-fit-content m-auto">

            <button class="carousel-control-prev predio-prev" type="button" data-bs-target="#predio" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>

            <div class="carousel-indicators m-auto mx-4">

              <?php foreach($imagens as $i => $img): ?>

                <button type="button" 
                data-bs-target="#predio" 
                data-bs-slide-to="<?= $i ?>" 
                class="<?= ($i == 0) ? "active" : "" ?>" 
                aria-current="true" 
                aria-label="Slide <?= $i ?>"></button>
                

              <?php endforeach ?>

            </div>
           
            <button class="carousel-control-next predio-next" type="button" data-bs-target="#predio" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div> 
        </div>
      </div>
    </div>

    <div class="row g-0">
      <div class="col-12 mb-5">

       <div class="container-fluid d-flex justify-content-center finish-predio">
          <div class="row m-0">
            <div id="galeria" class="col-6"></div>
            <div class="col-6">VOLTAR À GALERIA</div>
          </div>
          
          <div class="row m-0">
            <div id="visita" class="col-6"></div>
            <div class="col-6">MARQUE A SUA VISITA</div>
          </div>
  
          <div class="row m-0">
            <div id="facebook" class="col-6"></div>
            <div class="col-6">PARTILHAR NO FACEBOOK</div>
          </div>
       </div>

      </div>
    </div>


    <div class="row g-0 finish-touch ">
      <div class="col-12 m-auto text-center ">
      <h1>Acabamentos, <span>Plan</span>tas e Preçários</h1>
      </div>
      <div class="col-12 d-flex justify-content-center gap-5">
        
        <a href="acabamentos.php?id=<?= $pai["id"] ?>">
          <div id="acabamentos"></div>
        </a>
        <a href="plantas.php">
          <div id="plantas"></div>
        </a>
      </div>
    </div>
    



  </main>

