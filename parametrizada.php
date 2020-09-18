<?php

$conexao = new mysqli('127.0.0.1', 'root', '', 'treinaweb');

$id = '2 or 1 = 1'; // Trouxe o registro, e ignorou 'or 1 = 1'
$stmt = $conexao->stmt_init(); // retorna a instância

$stmt->prepare("SELECT * FROM alunos WHERE id = ?");
$stmt->bind_param('i', $id); // i = integer | d = double | s = string | b = blob

$stmt->execute();

$stmt->bind_result($idAluno, $nomeAluno);

# Se fosse um único registro, bastaria o fetch()
$stmt->fetch();

var_dump($idAluno, $nomeAluno);
