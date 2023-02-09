<?php 
$n1 = 13;
$n2 = 10;
$n3 = 15;

echo "Digite 3 numeros diferentes.<br/>";

if ($n1 > $n2 && $n1 > $n3 && $n2 > $n3){
	echo "A sua ordem em decrescente seria ".$n1." ".$n2." ".$n3;
}
if ($n1 > $n2 && $n1 > $n3 && $n3 > $n2){
	echo "A sua ordem em decrescente seria ".$n1." ".$n3." ".$n2;
}
if ($n2 > $n1 && $n2 > $n3 && $n3 > $n1){
	echo "A sua ordem em decrescente seria ".$n2." ".$n3." ".$n1;
}
if ($n2 > $n1 && $n2 > $n3 && $n1 > $n3){
	echo "A sua ordem em decrescente seria ".$n2." ".$n1." ".$n3;
}
if ($n3 > $n1 && $n3 > $n2 && $n1 > $n2){
	echo "A sua ordem em decrescente seria ".$n3." ".$n1." ".$n2;
}
if ($n3 > $n1 && $n3 > $n2 && $n2 > $n1){
	echo "A sua ordem em decrescente seria ".$n3." ".$n2." ".$n1;
}



 ?>