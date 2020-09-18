<?php

$conexao = new mysqli('127.0.0.1', 'root', '', 'treinaweb'); // MYSQLI = Orientada a Objetos (classes)

$sql = "SELECT * FROM alunos";
$resultado = $conexao->query($sql);

# fetch_all
$linhas = $resultado->fetch_all(MYSQLI_NUM); // opcional: MYSQLI_ASSOC, MYSQLI_NUM, or MYSQLI_BOTH

var_dump($linhas);