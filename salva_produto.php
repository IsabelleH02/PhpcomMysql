<?php
include("cabecalho.php");
  $nome = $_POST["nome"];
  $preco = $_POST["preco"];

  $query ="Insert into PRODUTO (NOME,PRECO) values ('{$nome}', {$preco})";

  $conexao = mysqli_connect ('localhost','root','','ecommerce');

  mysqli_query($conexao, $query);

  if(mysqli_query($conexao, $query)){
    echo "<p class='alert-success'> O produto $nome, no valor $preco foi cadastrado!</p>";
}else{
    echo "<p class='alert-danger'> Ocorreu um problema ao cadastrar o produto</p>";

  }

include("rodape.php");
 ?>
