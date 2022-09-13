<?php
// Llamadas de menos de 3 minutos cuesta $200 y 
// cada minuto adicional $30
$m=15;
echo " la llamada tuvo una duracion de $m minutos";
echo "<br>";
if ($m<-3){
    print("La llamada tiene un costo de $200");
}
else {
    print("Lallamada tiene un valor de ").($m-3)*30+200;
}
?>