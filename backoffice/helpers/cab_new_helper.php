<?php


$verf = !empty($_GET["nova_imagem"]) && !empty($_GET["novo_titulo"]) && !empty($_GET["novo_texto"]);
if($verf){
  $nova_imagem = $_GET["nova_imagem"];
  $novo_titulo = $_GET["novo_titulo"];
  $novo_texto = $_GET["novo_texto"];
  iduSql("INSERT INTO carousel (imagem, titulo, texto) VALUES ('$nova_imagem', '$novo_titulo', '$novo_texto')");


}






?>
