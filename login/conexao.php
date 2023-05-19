<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysql =new mysqli($host, $usuario, $senha, $database);

if($mysql->error){
    die("falha ao se conectar ao banco de dados: " .$mysql->error);
}
?>