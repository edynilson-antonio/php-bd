<?php

$conexao = new mysqli('127.0.0.1', 'root', '', 'treinaweb');

$id1 = '1';
$id2 = '2';
$stmt = $conexao->stmt_init(); // retorna a instância

$stmt->prepare("SELECT * FROM alunos WHERE id = ? or id = ?");
$stmt->bind_param('ii', $id1, $id2); // Mais de um parâmetro.

$stmt->execute();
$stmt->bind_result($idAluno, $nomeAluno);

while ($stmt->fetch()) {
    var_dump($idAluno, $nomeAluno);
}
