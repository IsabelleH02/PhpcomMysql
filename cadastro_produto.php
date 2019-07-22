<?php include("cabecalho.php"); ?>
<?php include("produto_bd.php"); ?>
<?php include("bd.php"); ?>
<?php
  if (isset($_GET["cadastrou"])){
    $cadastrou = $_GET["cadastrou"];
    $nomeCadastrado = $_GET["nome"];
    $precoCadastrado = $_GET["preco"];
    if($cadastrou){
      echo "<p class='alert-success'> O produto $nomeCadastrado, no valor $precoCadastrado foi cadastrado!</p>";
    }else{
      echo "<p class='alert-danger'> Ocorreu um problema ao cadastrar o produto</p>";
    }
  }
?>
<?php
  if (isset($_GET['removeu'])){
  $removeu = $_GET['removeu'];
    if($removeu){
      echo "<p class = 'text-success'>Produto removido </p>";
    }else{
      echo "<p class = 'text-danger'> Ocorreu um problema ao remover o produto</p>";
    }
  }
 ?>
 <?php
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $produtoAlteracao = buscarProduto($conexao, $id);
      ?>
      <form action="/salva_produto.php" method="post">
          <table class ="table">
            <input type="hidden" value="<?= $produtoAlteracao['ID']?>"name="id"/>
            <tr>
            <td>Nome :</td>
             <td><input type="text" name="nome" value="<?= $produtoAlteracao['Nome']?>"/></td>
           </tr>
           <tr>
            <td>Preço :</td>
               <td><input type="number" name ="preco" value="<?= $produtoAlteracao['PRECO']?>"/></td>
             </tr>
             <tr>
            <td><input class = "btn btn-primary"type="submit" value="Alterar"/></td>
          </tr>
          </table>
        </form>
<?php
    }else{
  ?>
    <form action="/salva_produto.php" method="post">
        <table class ="table">
          <tr>
          <td>Nome :</td>
           <td><input type="text" name="nome"/></td>
         </tr>
         <tr>
          <td>Preço :</td>
             <td><input type="number" name ="preco"/></td>
           </tr>
           <tr>
          <td><input class = "btn btn-primary"type="submit" value="Cadastrar"/></td>
        </tr>
        </table>
      </form>
    <?php } ?>
<?php include("listar_produtos.php");?>
<?php include("rodape.php"); ?>
