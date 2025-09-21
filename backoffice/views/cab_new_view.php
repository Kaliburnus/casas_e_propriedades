<?php 


  $verf = !empty($_GET["nova_imagem_cab"]) && !empty($_GET["novo_titulo_cab"]) && !empty($_GET["novo_texto_cab"]);
  if($verf){
    $nova_imagem_cab = $_GET["nova_imagem_cab"];
    $novo_titulo_cab = $_GET["novo_titulo_cab"];
    $novo_texto_cab = $_GET["novo_texto_cab"];
    iduSql("INSERT INTO carousel (imagem, titulo, texto) VALUES ('$nova_imagem_cab', '$novo_titulo_cab', '$novo_texto_cab')");


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
       
            <br>
            <input type="text"  name="nova_imagem_cab" placeholder="Imagem" required readonly id="imagem">
            <button type="button" class="btn btn-danger" onclick="abrirPopupGestor('imagem')">Ficheiros</button>
            <br>
      
            <input type="text" name="novo_titulo_cab" placeholder="Título">
            <br><br>
            <input type="text" name="novo_texto_cab" step="any" placeholder="Texto">
            
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
