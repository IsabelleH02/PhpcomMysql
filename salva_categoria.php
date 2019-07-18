<?php
include("cabecalho.php");
include("bd.php");
include("categoria_bd.php");

$categoria = $_POST["nome_categoria"];
$descricao = $_POST["descricao"];

  if(insereCategoria($conexao,$categoria,$descricao)){
    header("Location: cadastro_categoria.php?cadastrou=true&nome_categoria={$categoria}");
  }else{
    header("Location: cadastro_categoria.php?cadastrou=false");
        //  echo msqli_error($conexao); --para aparecer o erro do codigo
  }
include("rodape.php");
 ?>
