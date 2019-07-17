<?php
include("cabecalho.php");
include("bd.php");
include("produto_bd.php");?>
<table class="table">;
<?php
$produtos = listar_produtos($conexao);
foreach ($produtos as $produto) {
?>
  <tr>
    <td><?= $produto['Nome']?></td>
    <td><?= $produto['PRECO']?></td>
  </tr>
<?php
}
?>
</table>
<?php include("rodape.php");?>
