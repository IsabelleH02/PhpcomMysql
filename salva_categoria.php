<?php
include("cabecalho.php");
include("bd.php");
include("categoria_bd.php");

$categoria = $_POST["nome_categoria"];
$descricao = $_POST["descricao"];
if(isset($_POST['id'])){
  $id = $_POST["id"];
  if(alterarCategoria($conexao,$categoria,$descricao,$id)){
      header("Location: cadastro_categoria.php?alterou=true&nome_categoria={$categoria}&descricao={$descricao}");
    }else{
      header ("Location: cadastro_categoria.php?alterou=false");
  }
} else {
  if(insereCategoria($conexao,$categoria,$descricao)){
    header("Location: cadastro_categoria.php?cadastrou=true&nome_categoria={$categoria}");
  }else{
    header("Location: cadastro_categoria.php?cadastrou=false");
  //  echo msqli_error($conexao); --para aparecer o erro do codigo
  }
}
include("rodape.php");
 ?>
