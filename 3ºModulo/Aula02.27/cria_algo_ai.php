<?php 

	include_once 'ex1.php';
	
	$valor = new Produto();

	$valor->Codigo=911;

	$valor->Descricao="policia aqui mané";

	echo $valor->Codigo . " - " . $valor->Descricao;
 ?>