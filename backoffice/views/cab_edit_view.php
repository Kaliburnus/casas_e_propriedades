<?php 
require_once "requirements.php";

$c = getCarouselEspecifico($editar_cab);



?>


  <main class="container">
    <div class="row py-5">

      <div class="col-12">
        <h1>Cabeçalho</h1>
      </div>

      <div class=
        "
        col-12 
        text-center  
        w-100
        m-auto 
        rounded-4 
        box
        "
      >
        <form action="" onsubmit="operacaoConcluida()">

          <input type="hidden" name="editar_cab" value="<?= $editar_cab ?>">

            <a href="#" onclick="fecharPopup()">FECHAR</a>
       

            <img src="<?= $c["imagem"] ?>" alt="" width="180">
            
            <br>
            <input type="text" value="<?= $c["imagem"] ?>" name="imagem" placeholder="Imagem" required readonly id="imagem">
            <button type="button" class="btn btn-danger" onclick="abrirPopupGestor('imagem')">Ficheiros</button>
            <br>
      
            <input type="text" name="titulo" placeholder="Título" value="<?= $c["titulo"] ?>">
            <br><br>
            <input type="text" name="texto" step="any" placeholder="Texto" value="<?= $c["texto"] ?>">
            
          </div>
          
          
          
         
       
          <br><br>
          <input type="submit" value="Guardar" class="w-25 m-auto mt-5">
          <br>
          <button onclick="fecharPopup()" class="m-auto">Cancelar</button>
        </form>

      </div>

      <div class=
        "
        col-12 
        text-center 
        text-success 
        w-75 
        m-auto 
        rounded-4 

        "
      >
      

      </div>
    </div>
  </main>
