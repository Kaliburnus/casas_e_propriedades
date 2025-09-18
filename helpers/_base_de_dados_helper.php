<?php 

$base_dados = [
  "host" => "localhost",
  "dbname" => "casas_e_prop_bd",
  "user" => "root",
  "pass" => "",
];

$pdo = new PDO("mysql:host=$base_dados[host];dbname=$base_dados[dbname];charset=utf8mb4","$base_dados[user]","$base_dados[pass]");

function selectSql($sql){
  global $pdo;
  $consulta = $pdo->query($sql);
  $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
  return $resultado;
}

function selectSqlUnico($sql){
  global $pdo;
  $consulta = $pdo->query($sql);
  $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
  return $resultado;
}

// Esta função funcionará para o inserte, delete e update.

function iduSql($sql){
  global $pdo;
  $consulta = $pdo->query($sql);
}




?>