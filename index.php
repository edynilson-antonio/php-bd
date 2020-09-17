<?php

$conexao = new mysqli('127.0.0.1', 'root', '', 'treinaweb'); // MYSQLI = Orientada a Objetos (classes)

$sql = "SELECT * FROM alunos";
$resultado = $conexao->query($sql);

// Lendo os registros a partir de um loop

# fetch_row
while ($linha = $resultado->fetch_row()) {
    var_dump($linha);
    var_dump($linha[0]);
}