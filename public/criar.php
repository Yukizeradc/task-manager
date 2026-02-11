<!DOCTYPE html>
<html>
<head>
    <title>Nova Tarefa</title>
</head>
<body>

<h1>Nova Tarefa</h1>

<form action="salvar.php" method="POST">
    <label>Título:</label><br>
    <input type="text" name="titulo" required><br><br>

    <label>Descrição:</label><br>
    <textarea name="descricao"></textarea><br><br>

    <button type="submit">Salvar</button>
</form>

<a href="index.php">Voltar</a>

</body>
</html>
