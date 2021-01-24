<?php

$conexao = new mysqli('127.0.0.1', 'root', '704802', 'tw_php');

if ($conexao->connect_errno) {
    echo "código:" . $conexao->connect_errno;
    echo "<br>mensagem: " . $conexao->connect_error;
}

$resul = $conexao->query('aa');

if (!$resul) {
    echo "código: " . $conexao->errno;
    echo "<br>mensagem: " . $conexao->error;
}