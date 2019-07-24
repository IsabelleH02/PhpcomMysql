<?php include("cabecalho.php"); ?>
<?php include("usuario_bd.php"); ?>
<?php include("bd.php"); ?>
<?php
  if (isset($_GET["cadastrou"])){
    $cadastrou = $_GET["cadastrou"];
    $emailCadastrado = $_GET["email"];
    if($cadastrou){
      echo "<p class='alert-success'> O usuario $emailCadastrado foi cadastrado!</p>";
    }else{
      echo "<p class='alert-danger'> Ocorreu um problema ao cadastrar o usuario</p>";
    }
  }
?>
    <form action="/salva_usuario.php" method="post">
        <table class ="table">
          <tr>
          <td>E-mail :</td>
           <td><input type="text" name="email"/></td>
         </tr>
         <tr>
          <td>Senha :</td>
             <td><input type="password" name ="senha"/></td>
           </tr>
           <tr>
          <td><input class="btn btn-primary"type="submit" value="Cadastrar"/></td>
        </tr>
        </table>
      </form>
<?php include("rodape.php"); ?>
