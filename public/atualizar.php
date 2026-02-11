<?php
require_once("../config/conexao.php"); // ajusta conforme sua estrutura

// Verifica se os dados foram enviados via POST
if (!isset($_POST['id'], $_POST['titulo'])) {
    die("Dados incompletos.");
}

$id = intval($_POST['id']);
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'] ?? '';

// Prepara a query de atualização
$sql = "UPDATE tarefas SET titulo = ?, descricao = ? WHERE id = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Erro na preparação: " . $conn->error);
}

// Passa os parâmetros
$stmt->bind_param("ssi", $titulo, $descricao, $id);

if ($stmt->execute()) {
    // Atualização bem-sucedida, redireciona para index
    header("Location: index.php");
    exit;
} else {
    die("Erro ao atualizar a tarefa: " . $stmt->error);
}

$stmt->close();
$conn->close();
?>
