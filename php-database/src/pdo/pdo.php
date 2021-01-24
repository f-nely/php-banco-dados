<?php

try {
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=tw_php', 'root', '704802');

    /*Realizando primeira consulta com pdo
    $alunos = $conexao->query('SELECT * FROM alunos');

    foreach ($alunos as $aluno) {
        var_dump($aluno);
    }*/

    $resultado = $conexao->query('SELECT * FROM alunos');

    foreach ($resultado as $aluno) {
        var_dump($aluno);
    }

} catch (PDOException $PDOException) {
    echo $PDOException->getMessage();
}

