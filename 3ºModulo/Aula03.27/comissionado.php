<?php 

class Comissionado extends Empregado{

		var $totalVenda;
		var $taxaComissao;


		function Comissionado__construct($nome, $sobrenome, $cpf, $totalVenda, $taxaComissao){
        parent:: __construct($nome, $sobrenome, $cpf);
		$this->totalVenda = $totalVenda;
		$this->taxaComissao = $taxaComissao;

		}

		function vencimento($salrock,$salwater){
        $salrock = $this->totalVenda * $this->taxaComissao;
        $salwater = $salrock * 0.85;
 	}


 		function __destruct(){
        echo "<br> {$this->nome} foi banido... <br>";
    }


	}

 ?>