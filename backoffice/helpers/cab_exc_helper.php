<?php



$excluir_cab= (!empty($_GET["excluir_cab"])) ? ($_GET["excluir_cab"]) : 0;
$verf = !empty($_GET["excluir_cab"]);
if($verf){
  $excluir_cab = intval($_GET["excluir_cab"]);

  iduSql("DELETE FROM carousel WHERE id=$excluir_cab");

  header("Location: cabecalho.php");

  
}
else{

  echo "FAILEDDDDDDD";

}


?>
