<?php 

function Somars($n1,$n2){
	return ($n1 + $n2);
}
$a1 = 25;
$a2 = 74;
$d1 = Somars($a1,$a2);
echo "a soma ai deu ".Somars($a1,$a2);

function dobrar($n){
	return ($n * 2);
}
$d2 = dobrar($d1);
$d3 = dobrar($d2);
$d4 = dobrar($d3);
echo "<br/> o dobrooo ".dobrar($d1);
echo "<br/>".$d3.$d4;
 ?>