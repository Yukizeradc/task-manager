<?php
require_once("../config/conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM tarefas WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: index.php");
exit;
