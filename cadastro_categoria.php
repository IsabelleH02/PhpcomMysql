<?php include("cabecalho.php"); ?>
<form action="/salva_categoria.php" method="post">
  Categoria: <input type="text" name="nome_categoria"/><br>
  Descrição : <input type="text" name="descricao"/><br>

  <input type="submit" value="Cadastrar"/>
<?php include("rodape.php"); ?>
