<?php 

	class Assalariado extends Empregado{

		var $salario;


        function __construct($nome, $sobrenome, $cpf, $salario){
        parent:: __construct($nome, $sobrenome, $cpf);
		$this->salario = $salario;

		}

		function vencimento($salrock,$salwater){
        $salrock = $this->salario;
        $salwater = $salrock - $desconto;
 	}


 		function __destruct(){
        echo "<br> {$this->nome} foi banido... <br>";
    }


	}

 ?>