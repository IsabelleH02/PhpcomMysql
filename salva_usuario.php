<?php
include("cabecalho.php");
include("bd.php");
include("usuario_bd.php");

$email = $_POST["email"];
$senha = $_POST["senha"];
  if (insereUsuario($conexao,$email,md5($senha))){
    header("Location: cadastro_usuario.php?cadastrou=true&email={$email}");
  }else{
    mysqli_error($conexao);
    //header("Location: cadastro_usuario.php?cadastrou=false");
  }
include("rodape.php");
 ?>
