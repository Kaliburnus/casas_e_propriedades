<?php 


// function getProjectos(){
//   $resultado = selectSql("SELECT * FROM projectos");
//   return $resultado;

// }

function getProjectosDropdown(){
  $resultado = selectSql("SELECT id, nome FROM projectos");
  return $resultado;

}

function getProjetoEspecifico($id){
  $resultado = selectSqlUnico("SELECT * FROM projectos WHERE id=$id LIMIT 1");
  return $resultado;
}

?>