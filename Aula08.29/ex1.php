<?php 
$ano = 2020;
function exibir(){
	GLOBAL $ano;
	$ano+=2;
	return $ano;
}
echo "<br/> Ano: ".$ano;
echo "<br/> Ano: ".exibir();
echo "<br/> Ano: ".$ano;
echo "<br/> Ano: ".exibir();
echo "<br/> Ano: ".exibir();
echo "<br/> Ano: ".exibir();
echo "<br/> Ano: ".exibir(); ?>
