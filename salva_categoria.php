<?php
include("cabecalho.php");
include("bd.php");
  $categoria = $_POST["nome_categoria"];
  $descricao = $_POST["descricao"];

  $query ="Insert into CATEGORIA (NOME,DESCRICAO) values ('{$categoria}', {$descricao})";

  mysqli_query($conexao, $query);

  if(mysqli_query($conexao, $query)){
    echo "<p class='alert-success'>A $categoria e $descricao foram inseridos com sucesso!</p>";
  }else{
      echo "<p class='alert-danger'>Ocorreu um erro</p>";
  }
include("rodape.php");
 ?>
