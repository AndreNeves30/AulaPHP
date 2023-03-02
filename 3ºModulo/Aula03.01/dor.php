<?php 

	class Pessoa
	{
		var $codigo;
		var $nome;
		var $altura;
		var $idade;
		var $nascimento;
		var $escolaridade;
		var $salario;



		function crescer($centimentos)
		{
			if ($centimentos > 0) {
				$this->altura += $centimentos;
			}
		}
	
		function formar($titulacao){
			$this->escolaridade = $titulacao;
		}

		function envelhecer($anos){
			if ($anos > 0) {
				$this->idade += $anos;
			}
		}
	}



 ?>