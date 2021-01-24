<?php

$conexao = new mysqli('127.0.0.1', 'root', '704802', 'tw_php');

$id = "2 OR 1=1";

$stmt = $conexao->stmt_init();

$stmt->prepare('SELECT * FROM alunos WHERE id=?');
$stmt->bind_param('i', $id);

$stmt->execute();

$stmt->bind_result($idAluno, $nomeAluno);
$stmt->fetch();

var_dump($idAluno, $nomeAluno);

/*
 * https://www.php.net/manual/pt_BR/class.mysqli-stmt.php
 */