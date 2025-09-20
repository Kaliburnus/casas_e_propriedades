<?php 

require_once "requirements.php";

// para ver a informação continda no usuario de login.

$usuario = $_SESSION["usuario"];
// print_r($usuario);

$usuario = verificarLogado();


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


  <!-- JAVASCRIPT -->
  <script src="../public/js/functions.js" defer></script>
  <script src="../public/js/main.js" defer></script>

  <!-- GOOGLE RECAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
  <header class="container-fluid">

  </header>