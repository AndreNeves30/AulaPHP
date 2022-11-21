<?php 

$fibo = array(1,1);

for ($i=2;$i<9;$i++){
	$fibo[$i] = $fibo[$i - 2] + $fibo[$i - 1];
}


foreach ($nome as $nomes) {
	echo "<br/>".$nomes;
}


$salarios = array("Karyna" => 2000, "André" => 1500, "Bruno" => 500, 1 => 200);

echo "<br/><br/>".$salarios['Karyna']."<br/>";
echo $salarios['André']."<br/>";
echo $salarios['Bruno']."<br/>";


$salarios['Karyna'] = "Alto";
$salarios['André'] = "medio";
$salarios['Bruno'] = "baixo";

echo "<br/>".$salarios['Karyna']."<br/>";
echo $salarios['André']."<br/>";
echo $salarios['Bruno']."<br/>";

echo $salarios[1]."<br/>";



 ?>