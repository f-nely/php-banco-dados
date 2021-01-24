<?php

$conexao = new mysqli('127.0.0.1', 'root', '704802', 'tw_php');

$id1 = "1";
$id2 = "2";

$stmt = $conexao->stmt_init();

$stmt->prepare('SELECT * FROM alunos WHERE id=? OR id=?');
$stmt->bind_param('ii', $id1, $id2);

$stmt->execute();

$stmt->bind_result($idAluno, $nomeAluno);

while ($stmt->fetch()) {
    var_dump($idAluno, $nomeAluno);
}



/*
 * https://www.php.net/manual/pt_BR/class.mysqli-stmt.php
 */