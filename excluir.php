<?php
$conn = new mysqli("localhost", "root", "", "loja");
$id = $_GET['id'];

// Pega a imagem para excluir do servidor
$result = $conn->query("SELECT imagem FROM produtos WHERE id=$id");
$row = $result->fetch_assoc();
if ($row && file_exists($row['imagem'])) {
    unlink($row['imagem']); // remove arquivo do servidor
}

$conn->query("DELETE FROM produtos WHERE id=$id");

header("Location: index.php");
?>
