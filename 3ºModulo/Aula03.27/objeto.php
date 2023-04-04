<?php 

include_once "empregado.php";
include_once "comissionado.php";
include_once "assalarioado.php";
include_once "horista.php";

$joseph = new Assalariado;
$joseph->nome = "Joseph";
$joseph->sobrenome = "Boston";
$joseph->cpf = 48990388811;
$joseph->salario = 2555.00;

$maria = new Comissionado;
$maria->nome = "Maria";
$maria->sobrenome = "Silva";
$maria->cpf = 48990388811;
$maria->totalVenda = 8000.00;
$maria->taxaComissao = 0.97;

$nicolas = new Horista;
$nicolas->nome = "Nicolas";
$nicolas->sobrenome = "Gaiola";
$nicolas->cpf = 48990388811;
$nicolas->precoHoras = 3000.00;
$nicolas->horasTrabalhadas = 8;



 ?>