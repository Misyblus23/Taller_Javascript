<?php
//Realizar el programa que calcule las areas de un circulos,

//calcular el area de un cuadrado//
$lado=5;

$area= pow ($lado,2);
echo ("El area de un cuadrado es: ".$area);
echo "<br>";

//carcular el area de un triangulo//

$base=12;
$altura=15;

$areaT=($base*$altura)/2;
echo ("El area de un triangulo es: ".$areaT);
echo "<br>";

//carcular el area de un circulo//
$r=9.5;

$areaC= pow ($r,2)*314156;
echo ("El area de un circulo es:".$areaC);
echo "<br>";

?>