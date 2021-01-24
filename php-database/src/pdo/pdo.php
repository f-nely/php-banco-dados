<?php

try {
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=tw_php', 'root', '704802');

    $resultado = $conexao->query('SELECT * FROM alunos');

    $resultado->setFetchMode(PDO::FETCH_ASSOC);
    foreach ($resultado as $aluno) {
        var_dump($aluno);
    }

} catch (PDOException $PDOException) {
    echo $PDOException->getMessage();
}

