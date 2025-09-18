<?php 

require_once "required.php";

$contactos = getContactos();
$projectos_dropdown = getProjectosDropdown();

?>


<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Casas & Propriedades</title>

  <!-- BOOTSTRAP -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
  <!-- FONTES -->
  
  <link rel="stylesheet" href="public/fonts/din_pro/stylesheet.css">
  <link rel="stylesheet" href="public/fonts/montserrat/stylesheet.css">
  <link rel="stylesheet" href="public/fonts/open_sans/stylesheet.css">

  <!-- CSS -->

  <link rel="stylesheet" href="public/css/style.css">


  <!-- JAVASCRIPT -->
  <script src="public/js/functions.js" defer></script>
  <script src="public/js/main.js" defer></script>

  <!-- GOOGLE RECAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>

  <!-- HEADER ====== -->

  <header class="container-fluid">

    <div class="row">
      <div class="col-12 text-center logo_nav">
        <img src="public/img/extras/logo.svg" alt="logo" id="logotipo">

        <!-- header navbar mobile -->

        <div class="nav_mobile_menu">
          <nav class="navbar navbar-dark bg-dark nav-mobile">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
            
            <div class="collapse mobile-menu" id="navbarToggleExternalContent" data-bs-theme="dark">
              <div class="bg-dark p-4">
                <ul class="navbar-nav text-body-emphasis">
                  <li class="nav-item">
                    <a class="nav-link <?= ($current_menu == "home") ? "active" : "" ?>" aria-current="page" href="index.php">HOME</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link <?= ($current_menu == "empresa") ? "active" : "" ?> dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      EMPRESA
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="historial.php">HISTORIAL</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="filo_valor.php">FILOSOFIA E VALORES</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link <?= ($current_menu == "projecto") ? "active" : "" ?> dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      PROJECTOS EM COMERCIALIZAÇÃO
                    </a>
                  <ul class="dropdown-menu">

                    <?php foreach($projectos_dropdown as $p): ?>

                      <li><a class="dropdown-item" href="projecto.php?id=<?= $p["id"] ?>"><?= $p["nome"] ?></a></li>


                    <?php endforeach ?>

                  </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link <?= ($current_menu == "portfolio") ? "active" : "" ?> dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      PORTFÓLIO
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">VARANDAS LOREM - ALMADA</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">VILA IPSUM - SESSIMBRA</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">CAMPO DOLOR - BRAGA</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">ESTRADA SIT - LISBOA</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">RUA AMET - PORTO</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?= ($current_menu == "contactos") ? "active" : "" ?>" href="#">CONTACTOS</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          
        </div>
      </div>
    </div>



    <!-- header navbar desktop ---- -->

    <div class="row">
      <div class="col-12 text-center px-0 ">
        <nav class="navbar navbar-expand-md border border-dark m-auto nav-desktop">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav m-auto">
                <li class="nav-item">
                  <a class="nav-link <?= ($current_menu == "home") ? "active" : "" ?>" aria-current="page" href="index.php">HOME</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link <?= ($current_menu == "empresa") ? "active" : "" ?> dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    EMPRESA
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="historial.php">HISTORIAL</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="filo_valor.php">FILOSOFIA E VALORES</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link <?= ($current_menu == "projectos") ? "active" : "" ?> dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    PROJECTOS EM COMERCIALIZAÇÃO
                  </a>
                  <ul class="dropdown-menu">

                    <?php foreach($projectos_dropdown as $p): ?>

                      <li><a class="dropdown-item" href="projecto.php?id=<?= $p["id"] ?>"><?= $p["nome"] ?></a></li>


                    <?php endforeach ?>

                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link <?= ($current_menu == "portfolio") ? "active" : "" ?> dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    PORTFÓLIO
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="portfolio.php">VARANDAS LOREM - ALMADA</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="portfolio.php">VILA IPSUM - SESSIMBRA</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="portfolio.php">CAMPO DOLOR - BRAGA</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="portfolio.php">ESTRADA SIT - LISBOA</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="portfolio.php">RUA AMET - PORTO</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?= ($current_menu == "contactos") ? "active" : "" ?>" href="contactos.php">CONTACTOS</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <!-- header carousel ---- -->

    <div class="row">
      <div class="col-12 text-center px-0 header-image">
        
                                                                
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="public/uploads/caroussel/cabecalho1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-flex justify-content-end header-image-caption">
                <div>
                  <h1><span>Casas &</span> Propriedades</h1>
                  <h4>Experiência - Profissionalismo</h4>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="public/uploads/caroussel/cabecalho2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-flex justify-content-end header-image-caption">
                <div>
                  <h1><span>Casas &</span> Propriedades</h1>
                  <h4>Sustentabilidade - Qualidade de Vida</h4>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="public/uploads/caroussel/cabecalho3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-flex justify-content-end header-image-caption">
                <div>
                  <h1><span>Casas &</span> Propriedades</h1>
                  <h4>Experiência - Qualidade de construção</h4>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="public/uploads/caroussel/cabecalho4.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-flex justify-content-end header-image-caption">
                <div>
                  <h1><span>Casas &</span> Propriedades</h1>
                  <h4>Engenharia - Arquitetura</h4>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="public/uploads/caroussel/cabecalho5.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-flex justify-content-end header-image-caption">
                <div>
                  <h1><span>Casas &</span> Propriedades</h1>
                  <h4>Design - Qualidade</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>