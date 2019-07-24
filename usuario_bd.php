<?php
function insereUsuario($conexao,$email,$senha){

  $query ="INSERT INTO USUARIO (EMAIL,SENHA) VALUES ('{$email}', '{$senha}')";
  $resultadoDoInsere = mysqli_query($conexao, $query);
  return $resultadoDoInsere;
}

?>
