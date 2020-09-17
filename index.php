<?php

$conexao = new mysqli('127.0.0.1', 'root', '', 'treinaweb'); // MYSQLI = Orientada a Objetos (classes)

$sql = "SELECT * FROM alunos";
$resultado = $conexao->query($sql);

// Lendo os registros a partir de um loop

# fetch_assoc
while ($linha = $resultado->fetch_assoc()) {
    var_dump($linha);
    var_dump($linha["nome"]);
}