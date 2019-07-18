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
    <td><a href="remove_produto.php?id=<?= $produto['ID'] ?>" class="text-danger" >Remover</a></td>
  </tr>
<?php
}
?>
</table>
<?php include("rodape.php");?>
