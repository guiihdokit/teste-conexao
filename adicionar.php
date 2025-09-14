<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Adicionar Produto</title>
</head>
<body>
  <h2>Novo Produto</h2>
  <form action="salvar.php" method="post" enctype="multipart/form-data">
    Nome: <input type="text" name="nome" required><br><br>
    Preço: <input type="number" step="0.01" name="preco" required><br><br>
    Quantidade: <input type="number" name="quantidade" required><br><br>
    Cor: <input type="text" name="cor"><br><br>
    Imagem: <input type="file" name="imagem" required><br><br>
    <button type="submit">Salvar</button>
  </form>
  <br>
  <a href="index.php">Voltar</a>
</body>
</html>
