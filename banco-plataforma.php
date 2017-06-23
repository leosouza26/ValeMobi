<?php

function listaMercadoria($conexao) {
	$mercadorias = array();
	$query = "select * from mercadorias";
	$resultado = mysqli_query($conexao, $query);
	while($mercadoria = mysqli_fetch_assoc($resultado)) {
		array_push($mercadorias, $mercadoria);
	}
	return $marcadorias;
}

function inserirMercadoria($conexao, $cod_mercadoria, $tipo_mercadoria, $nome_mercadoria, $qtde, $preco, $tipo_negocio) {
	$query = "insert into mercadorias (cod_mercadoria, tipo_mercadoria, nome_mercadoria, qtde, preco, tipo_negocio) values ('{$cod_mercadoria}', {$tipo_mercadoria}, '{$nome_mercadoria}', {$qtde}, {$preco}, {$tipo_negocio})";
	return mysqli_query($conexao, $query);
}