<?php 



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
        <form action="">
          <input type="text" name="nome" placeholder="*Nome" autofocus>
          <br>
          <input type="number" name="telemovel" placeholder="*Telemóvel" autofocus>
          <br>
          <input type="mail" name="nome" placeholder="*E-mail" autofocus>
          <br>
          <textarea name="mensagem" id="" placeholder="*Mensagem"></textarea>
          <h6>*Campos de Preenchimento Obrigatório</h6>
          <input type="checkbox">
          <label for="" id="checkbox">Desejo receber uma cópia desta mensagem no meu e-mail</label>
          <div class="g-recaptcha d-flex justify-content-end pe-5 me-5" data-sitekey="6LenDo8rAAAAAIT1HJRUg411wvXWA3vMSLPdZ1gS"></div>
          

          <br><br>
          <div class="d-flex justify-content-center">
            <input type="submit" title="ENVIAR">
          </div>
        </form>
        
      </div>
      
      
    </div>


  </main>
