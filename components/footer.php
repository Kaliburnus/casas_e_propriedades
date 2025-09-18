  <!-- FOOTER ====== -->
  
  <footer class="container-fluid">
  
    <!-- footer navbar -->

    <div class="row footer-nav">
      <div class="col-12">
        <nav>
          <a href="#" class="<?= ($current_menu == "home") ? "activated" : "" ?>">
            HOME
          </a>
          <a href="#" class="<?= ($current_menu == "empresa") ? "activated" : "" ?>">
            EMPRESA
          </a>
          <a href="#" class="<?= ($current_menu == "projectos") ? "activated" : "" ?>">
            PREJECTOS EM COMERCIALIZAÇÃO
          </a>
          <a href="#" class="<?= ($current_menu == "portfolio") ? "activated" : "" ?>">
            PORTFÓLIO
          </a>
          <a href="#" class="<?= ($current_menu == "contactos") ? "activated" : "" ?>">
            CONTACTOS
          </a>
        </nav>
      </div>
    </div>

    <div class="row">

      <div class="col-12 contacts">
        <div class="contacts-title">
          <h1>Contactos</h1>
        </div>

        <div class="morada">
          <h2>Morada</h2>
          <p>
            <?= $contactos["morada"] ?>
          </p>
        </div>

        <div>
          <h2>Telefone</h2>
          <?= $contactos["telefone"] ?>
        </div>

        <div>
          <h2>E-mail</h2>
          <?= $contactos["email"] ?>
        </div>
    
      </div>

    <div class="row">
      <div class="col-12 separator-footer">
      </div>
    </div>

    <div class="row">
      <div class="col-12 footer-img">
        <div>
          <a href="">
            <img src="public/img/svg/facebook-branco.svg" alt="facebook">
          </a>
        </div>
        <div>
          <a href="ralc.php">
            <img src="public/img/svg/ralc.svg" alt="ralc">
          </a>
        </div>
      </div>
      
      
    </div>
    <div class="cookies-copyright">
      Política de Cookies <br>
      Copyright ©  Grupo MediaMaster. Todos os direitos reservados.
    </div>

  </footer>
  
</body>
</html>