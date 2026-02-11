<?php
require_once("../config/conexao.php"); // Ajuste conforme sua estrutura

$result = $conn->query("SELECT * FROM tarefas ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Task Manager</title>
</head>
<body>

<h1>Lista de Tarefas</h1>

<a href="criar.php">+ Nova Tarefa</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Status</th>
        <th>Ações</th>
    </tr>

    <?php if ($result && $result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['titulo']) ?></td>
                <td><?= htmlspecialchars($row['status']) ?></td>
                <td>
                    <a href="editar.php?id=<?= $row['id'] ?>">Editar</a>
                    |
                    <a href="excluir.php?id=<?= $row['id'] ?>">Excluir</a>
                </td>
            </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr>
            <td colspan="4">Nenhuma tarefa cadastrada</td>
        </tr>
    <?php endif; ?>
</table>

</body>
</html>
