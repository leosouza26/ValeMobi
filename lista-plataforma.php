<?php include("cabecalho.php"); 
 include("conecta.php"); 
 include("banco-plataforma.php"); ?>

<table class="table table-striped table-bordered">
	<?php
		$mercadorias = listaMercadorias($conexao);
		foreach($mercadorias as $mercadoria) :
	?>
	<tr>
		<td><?= $mercadoria['cod_mercadoria'] ?></td>
		<td><?= $mercadoria['tipo_mercadoria'] ?></td>
		<td><?= $mercadoria['nome_mercadoria'] ?></td>
		<td><?= $mercadoria['qtde'] ?></td>
		<td><?= $mercadoria['preco'] ?></td>
		<td><?= $mercadoria['tipo-negocio']?></td>
	</tr>
	<?php
		endforeach
	?>	
</table>		


<?php include("rodape.php"); ?>
