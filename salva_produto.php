<?php
include("cabecalho.php");
include("bd.php");
include("produto_bd.php");

$nome = $_POST["nome"];
$preco = $_POST["preco"];
if (insereProduto($conexao,$nome,$preco)){
 header("Location: cadastro_produto.php?cadastrou=true&nome={$nome}&preco={$preco}");
}else{
   header("Location: cadastro_produto.php?cadastrou=false");
}
include("rodape.php");
 ?>
