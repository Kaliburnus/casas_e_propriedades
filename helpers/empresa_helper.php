<?php 

function getEmpresaDropdown(){
  $resultado = selectSql("SELECT * FROM empresa");
  return $resultado;

}
function getEmpresaEspecifica($id){
  $resultado = selectSqlUnico("SELECT * FROM empresa WHERE id=$id LIMIT 1");
  return $resultado;

}





?>