<?php 

session_start();

function fazerLogin($login,$password){
  global $pdo;
  $consulta = $pdo->prepare("SELECT * FROM logins_crypto WHERE login=?");
  $consulta->execute([$login]);
  $usuario = $consulta->fetch(PDO::FETCH_ASSOC);

  if(!empty($usuario) && password_verify($password, $usuario["password"])){
    $_SESSION["usuario"] = $usuario;
    return true;
  }
  else{
    return false;
  }
}

function verificarLogado(){
  if(!empty($_SESSION["usuario"])){return $_SESSION["usuario"];}
  else{
    header("Location: index.php");
  }
}

// função para destruir a sessão de login.

function logout(){
  session_destroy();
  header("Location: logout.php");
}


?>