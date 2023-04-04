<?php 

	class Assalariado extends Empregado{

		var $salario;


        function Assalariado__construct($nome, $sobrenome, $cpf, $salario){
        parent:: __construct($nome, $sobrenome, $cpf, $salario);
		$this->salario = $salario;

		}

		function vencimento($salrock,$salwater){
        $salrock = $this->salario;
        $salwater = $salrock * 0.85;
 	}


 		function __destruct(){
        echo "<br> {$this->nome} foi banido... <br>";
    }


	}

 ?>