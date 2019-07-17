<?php
include("cabecalho.php");
include("bd.php");

$categoria = $_POST["nome_categoria"];
$descricao = $_POST["descricao"];

  if(insereCategoria($conexao,$categoria,$descricao)){
    echo "<p class='text-success'>A $categoria e $descricao foram inseridos com sucesso!</p>";
  }else{
      echo "<p class='text-danger'>Ocorreu um erro</p>";
    //  echo msqli_error($conexao); --para aparecer o erro do codigo
  }
include("rodape.php");
 ?>
