<?php 


function getPortfolioDropdown(){
  $resultado = selectSql("SELECT id, nome FROM portfolio");
  return $resultado;

}

function getPortEspecifico($id){
  $resultado = selectSqlUnico("SELECT * FROM portfolio WHERE id=$id LIMIT 1");
  return $resultado;

}

function getPortfolio(){
  $resultado = selectSql("SELECT * FROM portfolio");
  return $resultado;

}







?>