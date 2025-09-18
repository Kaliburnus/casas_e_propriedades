<?php 

function getProjectosDropdown(){
  $resultado = selectSql("SELECT id, nome FROM projectos");
  return $resultado;

}

function getProjetoEspecifico($id){
  $resultado = selectSqlUnico("SELECT * FROM projectos WHERE id=$id LIMIT 1");
  return $resultado;
}

?>