<?php 

  $verf = !empty($_GET["novo_titulo_emp"]) && !empty($_GET["novo_texto_emp"]);
  if($verf){
    $novo_titulo_emp = $_GET["novo_titulo_emp"];
    $novo_texto_emp = $_GET["novo_texto_emp"];
    iduSql("INSERT INTO empresa (titulo, texto) VALUES ('$novo_titulo_emp', '$novo_texto_emp')");

  }


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


            <a href="#" onclick="fecharPopup()">FECHAR</a>
       
      
            <input type="text" name="novo_titulo_emp" placeholder="Título">
            <br><br>
            <textarea name="novo_texto_emp" id=""></textarea>
            
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
