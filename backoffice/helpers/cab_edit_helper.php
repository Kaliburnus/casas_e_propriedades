<?php


function getCarouselEspecifico($editar_cab){
  $resultado = selectSqlUnico("SELECT * FROM carousel WHERE id=$editar_cab LIMIT 1");
  return $resultado;
}


?>
