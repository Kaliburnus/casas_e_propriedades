<?php




$editar_cab= (!empty($_GET["editar_cab"])) ? ($_GET["editar_cab"]) : 0;

function getCarouselEspecifico($editar_cab){
  $resultado = selectSqlUnico("SELECT * FROM carousel WHERE id=$editar_cab LIMIT 1");
  return $resultado;
}


$verf = !empty($_GET["imagem"]) && !empty($_GET["titulo"]) && !empty($_GET["texto"]);
if($verf){
  $editar_cab = $_GET["editar_cab"];
  $imagem = $_GET["imagem"];
  $titulo = $_GET["titulo"];
  $texto = $_GET["texto"];
  
  iduSql("UPDATE carousel SET imagem='$imagem', titulo='$titulo', texto='$texto' WHERE id=$editar_cab");

  
}






?>
