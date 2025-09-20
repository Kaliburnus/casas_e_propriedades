<?php

$form = !empty($_POST["nome"]) && !empty($_POST["telemovel"]) && !empty($_POST["email"]) && !empty($_POST["mensagem"]);
if($form){


  $g_recaptcha_response = $_POST["g-recaptcha-response"];
  $secret_key = "6LeuwM4rAAAAAMoIbH5bfwECVKiJzHDY5_m57TLz";
  $resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$g_recaptcha_response");
  $google = json_decode($resposta);

  if($google->success){

    $nome = $_POST["nome"];
    $telemovel = $_POST["telemovel"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $mensagem_final = "
      - Nome: $nome
      - Telemovel: $telemovel
      - E-mail: $email
      - Mensagem: $mensagem
    ";

    if(!empty($_POST["copia"])){
      mail($contactos["email_form"].",".$email, "Contactos do site casas e propriedades", $mensagem_final);
    }
    else{
      mail($contactos["email_form"], "Contactos do site casas e propriedades", $mensagem_final);
    }


  }

  // header("contactos.php");
}

?>

  <!-- MAIN ====== -->

  <main class="container-fluid pt-5 px-0">

    <!-- first title -->

    <div class="row title mb-4 ps-1">
      <div class="col-3">
        <h1><span>Con</span>tactos</h1>
      </div>
      <div class="col-4">
        <div>
          <h2>Morada</h2>
          <p>
            <?= $contactos["morada"] ?>
          </p>
        </div>

        <div>
          <h2>E-mail</h2>
          <?= $contactos["email"] ?>
        </div>
       
      </div>
      <div class="col-2 mt-5">
        <div>
          <h2>Telefone</h2>
          <?= $contactos["telefone"] ?>
        </div>
      </div>
    </div>

    <div class="row title2 ms-3 mb-5" >
      <div class="col-3">
        <h1><span>Mar</span>que a sua visita</h1>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-12 contactos">
        <form action="" method="post">
          <input type="text" name="nome" placeholder="*Nome" autofocus>
          <br>
          <input type="number" name="telemovel" placeholder="*Telemóvel" autofocus>
          <br>
          <input type="mail" name="nome" placeholder="*E-mail" autofocus>
          <br>
          <textarea name="mensagem" id="" placeholder="*Mensagem"></textarea>
          <h6>*Campos de Preenchimento Obrigatório</h6>
          <input type="checkbox" name="copia">
          <label for="" id="checkbox" >Desejo receber uma cópia desta mensagem no meu e-mail</label>
          <div class="g-recaptcha d-flex justify-content-end pe-5 me-5" data-sitekey="6LeuwM4rAAAAAAEpxNHULdCfXww99ZqskrR_SwmH"></div>
          

          <br><br>
          <div class="d-flex justify-content-center">
            <input type="submit" title="ENVIAR">
          </div>
        </form>
        
      </div>
      
      
    </div>


  </main>
