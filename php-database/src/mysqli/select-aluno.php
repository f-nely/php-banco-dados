<?php

$conexao = new mysqli('127.0.0.1', 'root', '704802', 'tw_php');

$sql = "SELECT * FROM alunos";

var_dump($conexao->query($sql));
