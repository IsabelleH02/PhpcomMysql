<?php
function listar_categoria($conexao){
  $categorias = array();
  $query = "SELECT * FROM CATEGORIA";
  $resultado = mysqli_query($conexao,$query);

  while($categoria = mysqli_fetch_assoc($resultado)){
    array_push($categorias,$categoria);
  }
  return $categorias;
}
function insereCategoria($conexao,$categoria,$descricao){
  $query ="Insert into CATEGORIA (NOME,DESCRICAO) values ('{$categoria}', '{$descricao}')";
  $resultado_categoria = mysqli_query($conexao, $query);
  return $resultado_categoria;
}


?>
