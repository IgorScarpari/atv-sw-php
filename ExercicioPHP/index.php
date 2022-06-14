<?php require_once "includes/db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bem-vindo - HOME</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <main style="padding: 21px;">
      <form action="cadastrar.php" method="post" style="border-top: 1px solid black; padding-top: 16px;">

        <fieldset>
          <div class="form-group">
            <label for="nomeProduto">Preencha os campos abaixo:</label><br />
            <label>Nome: <input type="text" id="nomeProduto" name="nome" class="form-control" /></label><br />
            <label>Descrição: <input type="text" id="descricaoProduto" name="descricao" class="form-control" /></label><br />
            <label>Marca: <input type="text" id="marcaProduto" name="marca" class="form-control" /></label><br />
            <label>Categoria: <input type="text" id="categoriaProduto" name="categoria" class="form-control" /></label><br />
          </div>
          <button class="btn btn-primary btn-lg">Cadastrar</button>
        </fieldset>
      </form>
      
      <br />
      <br />
      <p><strong>Lista de Produtos:</strong></p>
      <?php
      	$query = $db->query("SELECT * FROM produtos");
      	$rows = $query->fetchAll(PDO::FETCH_ASSOC);
      ?>
      <ul>
        <?php foreach ($rows as $curso): ?>
        <li><?php echo "Nome: ".$curso['nome']." Descricao: ".$curso['descricao']." Marca: ".$curso['marca']." Categoria: ".$curso['categoria']; ?> | <a href="excluir.php?id=<?php echo $curso['id']; ?>">Excluir #<?php echo $curso['id']; ?></a></li>
        <?php endforeach;?>
      </ul>
    </main>
  </div>
</body>
</html>
