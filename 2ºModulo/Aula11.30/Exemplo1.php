<?php 

$con = mysqli_connect("localhost","etecia","123456");

if (mysqli_connect_errno()){

	echo "Erro ao conectar no banco de dados ".
	mysqli_connect_error();
}else {
	$sql= "CREATE DATABASE db_2HPW2";
	if (mysqli_query($con,$sql)){
		echo "<br/>Base de Dados criado com sucesso!";
	}

else {
	echo "<br/>Erro :".	mysqli_error($con);
}
mysqli_close($con);
}
 ?>