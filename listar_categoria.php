<?php
include("cabecalho.php");
include("bd.php");
include("categoria_bd.php");?>
<table class="table">;
<?php
$categorias = listar_categoria($conexao);
foreach ($categorias as $categoria) {
?>
  <tr>
    <td><?= $categoria['NOME']?></td>
    <td><?= $categoria['DESCRICAO']?></td>
  </tr>
<?php
}
?>
</table>
<?php include("rodape.php");?>
