<?php




$editar_mp= (!empty($_GET["editar_emp"])) ? ($_GET["editar_emp"]) : 0;

function getEmpresaEspecifica($editar_emp){
  $resultado = selectSqlUnico("SELECT * FROM empresa WHERE id=$editar_emp LIMIT 1");
  return $resultado;
}


$verf = !empty($_GET["titulo_emp"]) && !empty($_GET["texto_emp"]);
if($verf){
  $editar_emp = $_GET["editar_emp"];
  $titulo_emp = $_GET["titulo_emp"];
  $texto_emp = $_GET["texto_emp"];
  
  iduSql("UPDATE empresa SET titulo='$titulo_emp', texto='$texto_emp' WHERE id=$editar_emp");

  
}






?>
