<?php include("cabecalho.php"); 		
 include("conecta.php");			
 include("banco-plataforma.php"); 
$cod_mercadoria = $_POST['cod_mercadoria'];
$tipo_mercadoria = $_POST['tipo_mercadoria'];
$nome_mercadoria = $_POST['nome_mercadoria'];
$qtde = $_POST['qtde'];
$preco = $_POST['preco'];
$tipo_negocio = $_POST['tipo_negocio'];

if(inserirMercadoria($conexao, $cod_mercardoria, $tipo_mercardoria, $nome_mercardoria, $qtde, $preco, $tipo_negocio)) { ?>
	<p class="text-success">A mercadoria <?= $nome_mercadoria ?>, <?= $preco ?> ,<?= $descricao?>foi adicionada.</p>
<?php } else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">A mercadoria <?= $nome_mercadoria ?>, <?= $preco ?> ,<?= $descricao?> não foi adicionado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>	