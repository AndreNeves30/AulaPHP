<?php 
$nome = "Karyna";
$idade = 20;
$sexo = 1;

echo "Digite o seu nome , idade e seu genero(sendo 1 para feminino e 2 para masculino).<br/>";
if ($idade < 25 && $sexo == 1){
	echo $nome." ACEITA!";
}
else {
	echo $nome." NÃO ACEITA";
}

 ?>