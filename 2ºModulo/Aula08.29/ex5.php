<?php 

$operador = 1 ;
$num1 = 0;
$num2= 3;
$resul = 0.0;
$operacao = "";

function somarValor($num1,$num2){
	return ($num1 + $num2);
}
function subtrairValor($num1,$num2){
	return ($num1 - $num2);
}
function multiplicarValor($num1,$num2){
	return ($num1 * $num2);
}
function dividirValor($num1,$num2){
	if ($num1==0 || $num2==0){
	return "impossivel";
	}
	return ($num1 / $num2);
}

switch ($operador) {
	case '1':
		$resul= somarValor($num1,$num2);
		$operacao = "soma";
		break;
	case '2':
		$resul= subtrairValor($num1,$num2);
		$operacao = "subtração";
		break;
	case '3':
		$resul= multiplicarValor($num1,$num2);
		$operacao = "multiplicação";
		break;
	case '4':
		$resul= dividirValor($num1,$num2);
		$operacao = "divisão";
		break;
	default:
		echo "saindo ";
		break;
}
if ($operador ==1 || $operador ==2 || $operador ==3 || $operador ==4 ){
echo "O resultado da ".$operacao. " é ".$resul;
}
 ?>