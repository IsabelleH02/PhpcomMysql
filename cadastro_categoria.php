<?php include("cabecalho.php"); ?>
<?php
  if (isset($_GET["cadastrou"])){
    $cadastrou = $_GET["cadastrou"];
    $categoriaCadastrado = $_GET["nome_categoria"];
    if($cadastrou){
      echo "<p class='alert-success'> A categoria $categoriaCadastrado foi cadastrado!</p>";
    }else{
      echo "<p class='alert-danger'> Ocorreu um problema ao cadastrar a categoria</p>";
    }
  }
?>
<?php
  if (isset($_GET['removeu'])){
  $removeu = $_GET['removeu'];
    if($removeu){
      echo "<p class = 'text-success'>Categoria removida </p>";
    }else{
      echo "<p class = 'text-danger'> Ocorreu um problema ao remover a categoria</p>";
    }
  }
 ?>
  <form action="/salva_categoria.php" method="post">
    <table class="table">
      <tr>
        <td>Categoria:</td>
        <td> <input type="text" name="nome_categoria"/></td>
      </tr>
      <tr>
        <td>Descrição :</td>
        <td><input type="text" name="descricao"/></td>
      </tr>
        <tr>
          <td><input class = "btn btn-primary" type="submit" value="Cadastrar"/></td>
        </tr>
      </table>
    </form>
<?php include("listar_categoria.php");?>
<?php include("rodape.php"); ?>
