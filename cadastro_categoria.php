<?php include("cabecalho.php"); ?>

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
