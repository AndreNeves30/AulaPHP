<?php 

$a1 = 1;

if ($a1 % 10 == 0){

echo "Ele  é divisivel por 10";
}
if ($a1 % 5 == 0){

echo "<br/>Ele  é divisivel por 5";
}
if ($a1 % 2 == 0){

echo "<br/>Ele  é divisivel por 2";
}

if ($a1 % 10 != 0 && $a1 % 5 != 0 && $a1 % 2 != 0){
echo "<br/>Ele não é divisivel nem por 10, 5 e 2.";
 }
 ?>
