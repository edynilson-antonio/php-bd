<?php

$conexao = new mysqli('127.0.0.1', 'root', '', 'treinaweb'); // MYSQLI = Orientada a Objetos (classes)

$id = '2 or 1 = 1'; // exemplo de SQL Injection

$sql = "SELECT * FROM alunos WHERE id = {$id}";
$resultado = $conexao->query($sql);

# fetch_all
$linhas = $resultado->fetch_all(MYSQLI_ASSOC);

foreach ($linhas as $linha) {
    echo $linha['id'] . '°) ' . $linha['nome'] . '<br>';
}
