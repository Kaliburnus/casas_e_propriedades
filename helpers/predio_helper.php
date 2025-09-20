<?php 

function getTodosPrediosPorPai($id_projecto){
  $resultado = selectSql("SELECT * FROM predios WHERE id_projecto=$id_projecto");
  return $resultado;

}
function getPredioEspecifico($id){
  $resultado = selectSqlUnico("SELECT * FROM predios WHERE id=$id LIMIT 1");
  return $resultado;

}
function getTodosPrediosHome(){
  $resultado = selectSql("SELECT * FROM predios WHERE mostrar=1");
  return $resultado;

}

function getImagensPagina($id, $pagina){
  $elementos_por_pagina = 4;
  $total = getTotalImagens($id);

  $resultado = selectSqlUnico("SELECT imagens FROM predios WHERE id=$id");
  $imagens = json_decode($resultado["imagens"]);

  return array_slice($imagens, (($pagina-1) * $elementos_por_pagina), $elementos_por_pagina);
}
function getTotalImagens($id){
  $resultado = selectSqlUnico("SELECT imagens FROM predios WHERE id=$id");
  $imagens = json_decode($resultado["imagens"]);
  return count($imagens);

}




?>