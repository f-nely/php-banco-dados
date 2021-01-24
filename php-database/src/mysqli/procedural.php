<?php

$conexao =  mysqli_connect('127.0.0.1', 'root', '704802', 'tw_php');

$resul = mysqli_query($conexao, 'SELECT * FROM alunos');

var_dump(mysqli_fetch_all($resul));