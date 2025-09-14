<?php
$conn = new mysqli("localhost", "root", "", "loja");

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$cor = $_POST['cor'];

// Verificar se foi enviada nova imagem
if (!empty($_FILES["imagem"]["name"])) {
    $targetDir = "uploads/";
    $imagemNome = time() . "_" . basename($_FILES["imagem"]["name"]);
    $targetFile = $targetDir . $imagemNome;

    if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $targetFile)) {
        $sql = "UPDATE produtos SET nome='$nome', preco='$preco', quantidade='$quantidade', cor='$cor', imagem='$targetFile' WHERE id=$id";
    } else {
        echo "Erro ao fazer upload da nova imagem.";
        exit;
    }
} else {
    $sql = "UPDATE produtos SET nome='$nome', preco='$preco', quantidade='$quantidade', cor='$cor' WHERE id=$id";
}

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Erro: " . $conn->error;
}
?>
