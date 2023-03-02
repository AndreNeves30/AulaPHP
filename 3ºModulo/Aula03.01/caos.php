<?php 

	include_once 'dor.php';
	include_once 'sofrimento.php';

	$giorge= new Pessoa;
	$giorge->Codigo = 10;
	$giorge->Nome = "Giorge Otávio";
	$giorge->Altura = 1.85;
	$giorge->Idade = 25;
	$giorge->Nascimentos = '05/06/1976';
	$giorge->Escolaridade = "Ensino Médio";

	echo "Manipulando o objeto $giorge->Nome :\n";
	echo "{$giorge->Nome} é formado em: {$giorge->Escolaridade} \n";
 
	$giorge->Formar('Técnico em Eletrecidade');
	echo "{$giorge->Nome} é formado em: {$giorge->Escolaridade} \n";
	echo "{$giorge->Nome} possui {$giorge->Idade} anos \n";

	$giorge->Envelhecer(1);
	echo "{$giorge->Nome} possui {$giorge->Idade} anos \n";


	$conta_giorge = new Conta;
	$conta_giorge->Agencia = 6677;
	$conta_giorge->DataDeCriacao = "10/07/02";
	$conta_giorge->Titular = $giorge;
	$conta_giorge->Senha = 9876;
	$conta_giorge->Saldo = 567.89;
	$conta_giorge->Cancelada = false;

	echo "\n";
	echo "Manipulando a conta de: {$conta_giorge->Titular->Nome} \n";
	echo "O saldo atual é R\$ {$conta_giorge->ObterSaldo()} \n";

	$conta_giorge->Depositar(20);
	echo "O saldo atual é R\$ {$conta_giorge->ObterSaldo()} \n";

	$conta_giorge->Retirar(10);
	echo "O saldo atual é R\$ {$conta_giorge->ObterSaldo()} \n";
 ?>