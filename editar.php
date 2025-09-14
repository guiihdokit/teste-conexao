<?php
$conn = new mysqli("localhost", "root", "", "loja");
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM produtos WHERE id=$id");
$produto = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Editar Produto</title>
</head>
<body>
  <h2>Editar Produto</h2>
  <form action="atualizar.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
    Nome: <input type="text" name="nome" value="<?php echo $produto['nome']; ?>" required><br><br>
    Preço: <input type="number" step="0.01" name="preco" value="<?php echo $produto['preco']; ?>" required><br><br>
    Quantidade: <input type="number" name="quantidade" value="<?php echo $produto['quantidade']; ?>" required><br><br>
    Cor: <input type="text" name="cor" value="<?php echo $produto['cor']; ?>"><br><br>
    Imagem atual: <br>
    <img src="<?php echo $produto['imagem']; ?>" width="120"><br><br>
    Trocar imagem: <input type="file" name="imagem"><br><br>
    <button type="submit">Atualizar</button>
  </form>
  <br>
  <a href="index.php">Voltar</a>
</body>
</html>
