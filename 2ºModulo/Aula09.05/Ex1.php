<?php

$salB= 5000;
$salL= $salB;
$inss= 1;
$dinss= 1;
$grupo= 2;
$dgrupo= 0;
$ir=1;
$dir=1;

if ($salB < 1212){
	$inss = 1;
} 
else if ($salB < 2427) {
	$inss = 2;
}
else if ($salB < 3641) {
	$inss = 3;
}
else {
	$inss = 4;
}

switch ($inss) {
	case '1':
		$dinss = $salB * 0.075;
		break;
	case '2':
		$dinss = $salB * 0.09;
		break;
	case '3':
		$dinss = $salB * 0.12;
		break;
	case '4':
		$dinss = $salB * 0.14;
		break;
	default:
		echo "saindo ";
		break;
	}

if ($salB < 1903){
	$ir = 1;
} 
else if ($salB < 2826) {
	$ir = 2;
}
else if ($salB < 3751) {
	$ir = 3;
}
else if ($salB < 4664) {
	$ir = 4;
}
else {
	$ir = 5;
}

switch ($ir) {
	case '1':
		$dir = 0;
		break;
	case '2':
		$dir = $salB * 0.075;
		break;
	case '3':
		$dir = $salB * 0.15;
		break;
	case '4':
		$dir = $salB * 0.225;
		break;
	case '5':
		$dir = $salB * 0.275;
		break;
	default:
		break;
	}

switch ($grupo) {
	case '1':
		$dgrupo = $salB * 0.15;
		echo "</br> Voce pertence ao grupo A";
		break;
	case '2':
		$dgrupo = $salB * 0.1;
		echo "</br> Voce pertence ao grupo B ";
		break;
	case '3':
		$dgrupo = $salB * 0.05;
		echo "</br> Voce pertence ao grupo C ";
		break;
	default:
		echo "</br> Voce não pertence a nenhum grupo.";
		break;
		}
$salL= $salB - $dgrupo - $dinss - $dir;
echo "</br>Seu salário bruto é ".$salB." reais.";
echo "</br>Seu desconto do inss é ".$dinss." reais.";
echo "</br>Seu desconto do ir é ".$dir." reais.";
echo "</br>Seu desconto do grupo é ".$dgrupo." reais.";
echo "</br>Seu salário liquído é ".$salL." reais.";
 ?>