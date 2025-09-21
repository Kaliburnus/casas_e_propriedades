<?php 


  $editar_emp= (!empty($_GET["editar_emp"])) ? ($_GET["editar_emp"]) : 0;

  $verf = !empty($_GET["titulo_emp"]) && !empty($_GET["texto_emp"]);
  if($verf){
    $editar_emp = $_GET["editar_emp"];
    $titulo_emp = $_GET["titulo_emp"];
    $texto_emp = $_GET["texto_emp"];
    
    iduSql("UPDATE empresa SET titulo='$titulo_emp', texto='$texto_emp' WHERE id=$editar_emp");

  }
  
  
  
  $e = getEmpresaEspecifica($editar_emp); 
  
  
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


          <input type="hidden" name="editar_emp" value="<?= $editar_emp ?>">



          <a href="#" onclick="fecharPopup()">FECHAR</a>
    
          <input type="text" name="titulo_emp" placeholder="Título" value="<?= $e["titulo"] ?>">
          <br><br>

          <textarea name="texto_emp" placeholder="texto"><?= $e["texto"] ?></textarea>
          
          </div>
          
          
          
         
       
          <br><br>
          <input type="submit" value="Guardar" class="w-25 m-auto mt-5">
          <br>
          <button type="button" onclick="fecharPopup()" class="m-auto">Cancelar</button>
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
