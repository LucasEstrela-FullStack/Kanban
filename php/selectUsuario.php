<?php

include "conexao.php";

$sql = "SELECT * FROM tb_usuarios";

try{
    $tarefas = $conn->query($sql);
}catch(Exception $e){
    echo $e->getMessage()."Erro ao consultar";
}