<?php
$host = "localhost";
$user = "root"; // padrão do XAMPP
$pass = "";     // senha em branco no XAMPP
$db   = "loja";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
