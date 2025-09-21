<?php 

$editar_cab= (!empty($_GET["editar_cab"])) ? ($_GET["editar_cab"]) : 0;

$verf = !empty($_GET["imagem_cab"]) && !empty($_GET["titulo_cab"]) && !empty($_GET["texto_cab"]);
if($verf){
  $editar_cab = $_GET["editar_cab"];
  $imagem_cab = $_GET["imagem_cab"];
  $titulo_cab = $_GET["titulo_cab"];
  $texto_cab = $_GET["texto_cab"];
  
  iduSql("UPDATE carousel SET imagem='$imagem_cab', titulo='$titulo_cab', texto='$texto_cab' WHERE id=$editar_cab");

  
}


$c = getCarouselEspecifico($editar_cab);


?>


  <main class="container">
    <div class="row py-5">


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
            <input type="text" value="<?= $c["imagem"] ?>" name="imagem_cab" placeholder="Imagem" required readonly id="imagem">
            <button type="button" class="btn btn-danger" onclick="abrirPopupGestor('imagem')">Ficheiros</button>
            <br>
      
            <input type="text" name="titulo_cab" placeholder="Título" value="<?= $c["titulo"] ?>">
            <br><br>
            <input type="text" name="texto_cab" step="any" placeholder="Texto" value="<?= $c["texto"] ?>">
            
          </div>
          
          
          
         
       
          <br><br>
          <input type="submit" value="Guardar" class="w-25 m-auto mt-5">
          <br>
          <button type="button" onclick="fecharPopup()" class="m-auto">Cancelar</button>
        </form>

      </div>

    </div>
  </main>
