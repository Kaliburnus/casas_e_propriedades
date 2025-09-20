<?php

function getCarousel(){
  $resultado = selectSql("SELECT * FROM carousel");
  return $resultado;
}

?>