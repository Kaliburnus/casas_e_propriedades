<?php 

require_once "requirements.php";

// para ver a informação continda no usuario de login.

$usuario = $_SESSION["usuario"];
// print_r($usuario);

$usuario = verificarLogado();


$projectos_dropdown = getProjectosDropdown(); 
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Backoffice</title>

  <!-- BOOTSTRAP -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  

  <!-- CSS -->

  <link rel="stylesheet" href="public/css/style.css">

  
  <!-- TINYMCE -->
  <script src="../public/js/tinymce/tinymce.min.js" defer></script>
  <script src="../public/js/difere.js" defer></script>

  <!-- JAVASCRIPT -->
  <script src="../public/js/functions.js" defer></script>
  <script src="../public/js/main.js" defer></script>

  <!-- GOOGLE RECAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
  <header class="container my-5 text-danger">

    <div class="row box">
      <div class="
        col-12 
        text-center 
        w-75 
        m-auto 
        d-flex 
        justify-content-center 
        align-items-center 
        "
      >
        <h1>Home</h1>
      </div>
      <div class="
        col-12 
        d-flex 
        justify-content-center 
        align-items-center
        "
      >

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <div class="collapse navbar-collapse">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="home.php">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cabecalho.php">CABEÇALHO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="empresa.php">EMPRESA</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    PROJECTOS
                  </a>
                  <ul class="dropdown-menu">

                    <?php foreach($projectos_dropdown as $p): ?>

                      <li><a class="dropdown-item" href="projecto.php?id=<?= $p["id"] ?>"><?= $p["nome"] ?></a></li>


                    <?php endforeach ?>

                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="portfolio.php">PORTFÓLIO</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    CONFIGURAÇÕES
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="contactos.php">Contactos</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Alterar palavra-passe</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/casas_e_propriedades/public/filemanager/dialog.php" target="_blank">GESTOR DE FICHEIROS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">LOGOUT</a>
                </li>
              </ul>

            </div>
          </div>
        </nav>
      </div>
    </div>

  </header>