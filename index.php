<?php
$conn = new mysqli("localhost", "root", "", "loja");
$result = $conn->query("SELECT * FROM produtos");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Lista de Produtos</title>
</head>
<body>
  <h2>Lista de Produtos</h2>
  <a href="adicionar.php">+ Adicionar Produto</a>
  <hr>
  <?php while ($row = $result->fetch_assoc()) { ?>
    <div>
      <h3><?php echo $row['nome']; ?></h3>
      <p>Preço: R$ <?php echo $row['preco']; ?></p>
      <p>Quantidade: <?php echo $row['quantidade']; ?></p>
      <p>Cor: <?php echo $row['cor']; ?></p>
      <img src="<?php echo $row['imagem']; ?>" width="120"><br><br>
      <a href="editar.php?id=<?php echo $row['id']; ?>">✏️ Editar</a> | 
      <a href="excluir.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Tem certeza?')">❌ Excluir</a>
    </div>
    <hr>
  <?php } ?>
</body>
</html>
