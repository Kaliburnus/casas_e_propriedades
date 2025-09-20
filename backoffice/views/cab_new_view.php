<?php 
require_once "requirements.php";
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


            <a href="#" onclick="fecharPopup()">FECHAR</a>
       
            <br>
            <input type="text"  name="nova_imagem" placeholder="Imagem" required readonly id="imagem">
            <button type="button" class="btn btn-danger" onclick="abrirPopupGestor('imagem')">Ficheiros</button>
            <br>
      
            <input type="text" name="novo_titulo" placeholder="Título">
            <br><br>
            <input type="text" name="novo_texto" step="any" placeholder="Texto">
            
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
