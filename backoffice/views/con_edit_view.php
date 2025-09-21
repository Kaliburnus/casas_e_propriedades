<?php 

$editar_con= (!empty($_GET["editar_con"])) ? ($_GET["editar_con"]) : 0;

$verf = !empty($_GET["morada_con"]) && !empty($_GET["tel_con"]) && !empty($_GET["email_con"]) && !empty($_GET["face_con"]);
if($verf){
  $morada_con = $_GET["morada_con"];
  $tel_con = $_GET["tel_con"];
  $email_con = $_GET["email_con"];
  $face_con = $_GET["face_con"];
  
  iduSql("UPDATE contactos SET morada='$morada_con', telefone='$tel_con', email='$email_con', facebook='$face_con' WHERE id=$editar_con");

  
}
if($editar_con > 0){$c = getContactos($editar_con);}



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

          <input type="hidden" name="editar_con" value="<?= $editar_con ?>">

            <a href="#" onclick="fecharPopup()">FECHAR</a>
       
      
            <input type="text" name="morada_con" placeholder="Morada" value="<?= $c["morada"] ?>">
            <br><br>
            <input type="tel" name="tel_con" step="any" placeholder="Telefone" value="<?= $c["telefone"] ?>">
            <br><br>
            <input type="email" name="email_con" placeholder="Morada" value="<?= $c["email"] ?>">
            <br><br>
            <input type="url" name="face_con" step="any" placeholder="Telefone" value="<?= $c["facebook"] ?>">
            
          </div>
          
          
          
         
       
          <br><br>
          <input type="submit" value="Guardar" class="w-25 m-auto mt-5">
          <br>
          <button type="button" onclick="fecharPopup()" class="m-auto">Cancelar</button>
        </form>

      </div>

    </div>
  </main>
