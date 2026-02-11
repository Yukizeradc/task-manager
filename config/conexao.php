<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "task-manager"; // nome do banco que você criou

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
