<?php

$conexao = new mysqli('127.0.0.1', 'root', '', 'treinaweb'); // MYSQLI = Orientada a Objetos (classes)

$sql = 'CREATE TABLE alunos (id int primary key, nome varchar(100))';
var_dump($conexao->query($sql));
