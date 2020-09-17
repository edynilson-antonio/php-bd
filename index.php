<?php

$conexao = new mysqli('127.0.0.1', 'root', '', 'treinaweb'); // MYSQLI = Orientada a Objetos (classes)
$conexao2 = mysqli_connect('127.0.0.1', 'root', '', 'treinaweb'); // PROCEDURAL = Funções

var_dump([
    $conexao,
    $conexao2
]);
