<?php 
$maiorAltura=0;
$menorAltura=3;
$contF=0;
$contM=0;
$alturaMedia=0;
$maiorIdadeM=0;
$menorIdadeF=1000;
$sexo = 1;
$altura = 1.85;
$altura2 = 1.95;
$idade = 10;
$idade2 = 25;
 
echo "Insira seu sexo(1 para mulher e 2 para homem)<br/>";
echo "Insira sua idade<br/>";
echo "Insira sua altura<br/>";
for ($i = 0 ;$i <= 4; $i++){

if ($sexo == 1){
	$contF++;
	$alturaMedia= $alturaMedia + $altura;

	$menorIdadeF = $idade;

	if ($idade2 < $menorIdadeF){
		$menorIdadeF = $idade2;
		$idade = $idade2;
}

	}
	if ($sexo == 2){
		$contM++;

		if ($idade > $maiorIdadeM){
			$maiorIdadeM = $idade;
		}

	}

	if ($altura > $maiorAltura){
			$maiorAltura = $altura;
		}

	if ($altura < $menorAltura){
			$menorAltura = $altura;
		}

}

$alturaMedia = ($alturaMedia / $contF);
echo "A media das alturas das mulher é: ".$alturaMedia.".";
echo "A maior altura é ".$maiorAltura." e a menor altura é ".$menorAltura.".";
echo "O homem mais velho tem ".$maiorIdadeM." anos.";
echo "A mulher mais nova tem ".$menorIdadeF." anos.";

 
 ?>
