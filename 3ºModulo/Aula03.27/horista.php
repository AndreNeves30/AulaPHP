<?php 

	class Horista extends Empregado{

		var $precoHora;
		var $horasTrabalhadas;

		function __construct($nome, $sobrenome, $cpf, $precoHora, $horasTrabalhadas){
        parent:: __construct($nome, $sobrenome, $cpf);
		$this->precoHora = $precoHora;
		$this->horasTrabalhadas = $horasTrabalhadas;

		}

		function vencimento($salrock,$salwater){
        $salrock = $this->horasTrabalhadas * $this->precoHora;
        $salwater = $salrock - $desconto;
 	}


 		function __destruct(){
        echo "<br> {$this->nome} foi banido... <br>";
    }


	}

 ?>