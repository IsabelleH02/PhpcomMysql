<?php
include("cabecalho.php");
include("bd.php");

function insereProduto($conexao,$nome,$preco){

  $query ="Insert into PRODUTO (NOME,PRECO) values ('{$nome}', {$preco})";
  $resultadoDoInsere = mysqli_query($conexao, $query);
  return $resultadoDoInsere;
}

  $nome = $_POST["nome"];
  $preco = $_POST["preco"];

  if(insereProduto($conexao,$nome,$preco)){
    echo "<p class='alert-success'> O produto $nome, no valor $preco foi cadastrado!</p>";
}else{
    echo "<p class='alert-danger'> Ocorreu um problema ao cadastrar o produto</p>";

  }

include("rodape.php");
 ?>
