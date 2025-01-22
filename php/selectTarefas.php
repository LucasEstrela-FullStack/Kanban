<?php

include "conexao.php";

$sql = "SELECT * FROM tb_tarefas";

try {
    $tarefas = $conn->query($sql);
    $registros = $tarefas->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo $e->getMessage() . " Erro ao consultar";
}