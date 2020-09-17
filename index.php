<?php

$conexao = new mysqli('127.0.0.1', 'root', '', 'treinaweb'); // MYSQLI = Orientada a Objetos (classes)

$sql = "SELECT * FROM alunos";
$resultado = $conexao->query($sql);

// Posso especificar o ponteiro (neste exemplo, pegaria o 3° registro da tabela)
$resultado->data_seek(2);

// Retorna uma linha por vez
var_dump($resultado->fetch_assoc());