<?php 

function Somars($n1,$n2){
	return ($n1 + $n2);
}
$a1 = 15;
$a2 = 10;
$d1 =Somars($a1,$a2);
echo "A soma de ".$a1." + ".$a2." resulta em ".Somars($a1,$a2); 

if ($d1 > 20) {
	echo " e adicionando 8 ao resultado fica ".$d1 + 8;	
}
else{
	echo " e subtraindo 5 ao resultado fica ".$d1 - 5;
}

 ?>