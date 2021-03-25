<?php
/* Aplicación No 1 (Sumar números)
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron.*/

$resultado=0;
$contador=0;

for($i=1;$i<1000;$i++){
 if($resultado+$i<1000){
     $contador++;
     $resultado = $resultado + $i;
 }
}

echo "Suma: $resultado";
echo "<br>";
echo "Cantidad de numeros: $contador";

?>