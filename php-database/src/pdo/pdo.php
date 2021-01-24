<?php

try {
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=tw_php', 'root', '704802');

    $resultado = $conexao->query('SELECT * FROM alunos');

    $alunos = $resultado->fetchAll(PDO::FETCH_ASSOC);

    var_dump($alunos);

} catch (PDOException $PDOException) {
    echo $PDOException->getMessage();
}

