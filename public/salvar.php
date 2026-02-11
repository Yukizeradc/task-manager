<?php
require_once("../config/conexao.php");

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO tarefas (titulo, descricao) VALUES (?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $titulo, $descricao);
$stmt->execute();

header("Location: index.php");
exit;
