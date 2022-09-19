<?php 

$ip1=25;
$ip2=33;
$ip3=38;
$ip4=18;
$ip5=40;

$ap1=1.50;
$ap2=1.60;
$ap3=1.75;
$ap4=1.61;
$ap5=1.90;

$ma=0;
$ca=0;

$sp1=1;
$sp2=1;
$sp3=2;
$sp4=1;
$sp5=2;

if ($sp1 == 1){
$ma = $ma + $ap1;
$ca++;
}

if ($sp2 == 1){
$ma = $ma + $ap2;
$ca++;
}

if ($sp3 == 1){
$ma = $ma + $ap3;
$ca++;
}

if ($sp4 == 1){
$ma = $ma + $ap4;
$ca++;
}

if ($sp5 == 1){
$ma = $ma + $ap5;
$ca++;
}

echo "A média de altura das mulheres é ".$ma / $ca. " cm.";
 ?>
