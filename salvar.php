<?php
$conn = new mysqli("localhost", "root", "", "loja");

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$cor = $_POST['cor'];

$targetDir = "uploads/";
$imagemNome = time() . "_" . basename($_FILES["imagem"]["name"]);
$targetFile = $targetDir . $imagemNome;

if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $targetFile)) {
    $sql = "INSERT INTO produtos (nome, preco, quantidade, cor, imagem) 
            VALUES ('$nome', '$preco', '$quantidade', '$cor', '$targetFile')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Erro: " . $conn->error;
    }
} else {
    echo "Erro no upload da imagem.";
}
?>
