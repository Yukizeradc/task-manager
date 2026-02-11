<?php
require_once("../config/conexao.php"); // Ajuste conforme sua estrutura

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = intval($_GET['id']);

$sql = "SELECT id, titulo, descricao FROM tarefas WHERE id = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Erro na preparação: " . $conn->error);
}

$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();
$tarefa = $result->fetch_assoc();

if (!$tarefa) {
    die("Tarefa não encontrada.");
}

$stmt->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Tarefa</title>
</head>
<body>

<h1>Editar Tarefa</h1>

<form action="atualizar.php" method="POST">
    <input type="hidden" name="id" value="<?= $tarefa['id'] ?>">

    <label>Título:</label><br>
    <input type="text" name="titulo" value="<?= htmlspecialchars($tarefa['titulo']) ?>" required><br><br>

    <label>Descrição:</label><br>
    <textarea name="descricao"><?= htmlspecialchars($tarefa['descricao']) ?></textarea><br><br>

    <button type="submit">Atualizar</button>
</form>

<br>
<a href="index.php">Voltar</a>

</body>
</html>
