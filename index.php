<?php

$conexao = new mysqli('127.0.0.1', 'root', '', 'treinaweb'); // MYSQLI = Orientada a Objetos (classes)

$sql = "INSERT INTO alunos (id, nome) VALUES (1, 'João da Silva')";
var_dump($conexao->query($sql));
