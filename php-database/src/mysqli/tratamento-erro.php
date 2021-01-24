<?php

/*
 * connect_errno: return an error code from the last connection error, if any
 * connect_error: return the error description from the last connection error, if any
 *
 */

try {
    $conexao = new mysqli('127.0.0.1', 'root', '704802', 'tw_php');

    // Check connection
    if ($conexao->connect_errno) {
        throw new Exception($conexao->connect_error, $conexao->connect_errno);
    }

    $resul = $conexao->query('SELECT * FROM alunos');

    if (!$resul) {
        throw new Exception($conexao->error, $conexao->errno);
    }

    var_dump($resul->fetch_all());

} catch (\Throwable $exception) {
    echo "mensagem: " . $exception->getMessage();
    echo "<br>codigo: " . $exception->getCode();
}