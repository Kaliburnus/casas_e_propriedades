<?php

function getEmpresa(){
  $resultado = selectSql("SELECT * FROM empresa");
  return $resultado;
}

?>

