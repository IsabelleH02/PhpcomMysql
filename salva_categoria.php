<?php
include("cabecalho.php");
include("bd.php");

function insereCategoria($conexao,$categoria,$descricao){
  $query ="Insert into CATEGORIA (NOME,DESCRICAO) values ('{$categoria}', '{$descricao}')";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}

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
