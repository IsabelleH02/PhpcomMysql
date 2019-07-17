<?php
include("cabecalho.php");
include("bd.php");
include("produto_bd.php");

  $nome = $_POST["nome"];
  $preco = $_POST["preco"];

  if(insereProduto($conexao,$nome,$preco)){
    echo "<p class='alert-success'> O produto $nome, no valor $preco foi cadastrado!</p>";
}else{
    echo "<p class='alert-danger'> Ocorreu um problema ao cadastrar o produto</p>";

  }

include("rodape.php");
 ?>
