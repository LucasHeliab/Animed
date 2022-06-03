<?php

$usuario = 'root';
$senha = '021298';
$database = 'animed';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error){
  die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

mysqli_set_charset($mysqli, "utf8");

?>