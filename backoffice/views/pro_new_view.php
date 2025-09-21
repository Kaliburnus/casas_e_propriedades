<?php 

  $verf = !empty($_GET["novo_nome_pro"]) && !empty($_GET["novo_acab_pro"]);
  if($verf){
    $novo_nome_pro = $_GET["novo_nome_pro"];
    $novo_acab_pro = $_GET["novo_acab_pro"];
    iduSql("INSERT INTO projectos (nome, acabamentos) VALUES ('$novo_nome_pro', '$novo_acab_pro')");

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
       
      

            <input type="text" name="novo_nome_pro" placeholder="Título">
            <br><br>
            <textarea name="novo_acab_pro" id=""></textarea>
            
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
