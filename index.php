<?php

$conexao = new mysqli('127.0.0.1', 'root', '', 'treinaweb'); // MYSQLI = Orientada a Objetos (classes)

$sql = "SELECT * FROM alunos";
var_dump($conexao->query($sql));
