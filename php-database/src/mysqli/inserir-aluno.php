<?php

$conexao = new mysqli('127.0.0.1', 'root', '704802', 'tw_php');

$sql = "INSERT INTO alunos (id, nome) VALUES (1, 'Taylor Otwell')";

var_dump($conexao->query($sql));