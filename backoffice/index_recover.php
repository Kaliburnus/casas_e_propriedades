<?php 
require_once "requirements.php";

$form = !empty($_POST["email"]);
if($form){
  $email = $_POST["email"];
  


 

}



// para ver a informação continda no usuario de login.


?>



<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Backoffice</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="public/css/style.css">

  
</head>
<body>
  <header class="container-fluid">

    <div class="row py-5">
      <div class=
        "
        col-12 
        text-center 
        text-danger 
        w-75 
        m-auto 
        d-flex 
        justify-content-center 
        align-items-center 
        rounded-4 
        box
        "
      >
        <h1>Backoffice</h1>
      </div>
    </div>

  </header>


  <main class="container">
    <div class="row py-5">
      <div class=
        "
        col-12 
        text-center  
        w-75 
        m-auto 
        d-flex 
        justify-content-center 
        align-items-center 
        rounded-4 
        box
        "
      >
        <form action="" method="post" autocomplete="off">
          <input type="email" name="email" placeholder="Email">
          <br><br>
          <input type="submit" value="ENVIAR" class="btn btn-danger">
          <br>

          <a href="index.php">Voltar</a>
        </form>


      </div>
    </div>
  </main>
  

  <footer class="container">
  </footer>
  
</body>
</html>



