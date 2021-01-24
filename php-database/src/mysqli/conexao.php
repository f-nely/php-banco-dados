<?php

// Estilo orientado à objeto
$conexao = new mysqli('127.0.0.1', 'root', '704802', 'tw_php');

$sql = "CREATE TABLE alunos (id INT PRIMARY KEY, nome VARCHAR(100) )";
var_dump($conexao->query($sql));

/*
 * Estilo procedural
   $connect = mysqli_connect('127.0.0.1', 'root', '704802', 'tw_php')
 */
