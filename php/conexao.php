<?php

$servidor   = "localhost";
$banco      = "kanban";
$usuario    = "root";
$senha      = "";
$cdn        = "mysql:host=$servidor;dbname=$banco";

try{
    $conn = new PDO($cdn, $usuario, $senha);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    echo $e->getMessage()."Erro de conexao";
}