<?php 

function getTodosPrediosPorPai($id_projecto){
  $resultado = selectSql("SELECT * FROM predios WHERE id_projecto=$id_projecto");
  return $resultado;

}
function getPredioEspecifico($id){
  $resultado = selectSqlUnico("SELECT * FROM predios WHERE id=$id LIMIT 1");
  return $resultado;

}
function getTodosPrediosHome($id){
  $resultado = selectSql("SELECT * FROM predios WHERE mostrar=1");
  return $resultado;

}


?>