<?php
include("cabecalho.php");
  $categoria = $_POST["nome_categoria"];
  $descricao = $_POST["descricao"];

  if(mysqli_query($conexao, $query)){
    echo "<p class='alert-success'>A $categoria e $descricao foram inseridos com sucesso!</p>";
  }else{
      echo "<p class='alert-danger'>Ocorreu um erro</p>";
  }
include("rodape.php");
 ?>
