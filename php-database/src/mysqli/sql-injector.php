<?php

$conexao = new mysqli('127.0.0.1', 'root', '704802', 'tw_php');

$id = "2 OR 1=1";

$sql = "SELECT * FROM alunos WHERE id = {$id}";

$resultado = $conexao->query($sql);

$linhas  = $resultado->fetch_all(MYSQLI_ASSOC);

foreach ($linhas as $linha) {
    echo $linha['id'] . ' ' . $linha['nome'] . '<br>';
}