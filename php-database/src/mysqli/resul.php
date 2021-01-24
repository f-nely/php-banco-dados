<?php

$conexao = new mysqli('127.0.0.1', 'root', '704802', 'tw_php');

$sql = "SELECT * FROM alunos";

$resultado = $conexao->query($sql);

while ($linha = $resultado->fetch_object()) {
    var_dump($linha);
}


