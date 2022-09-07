<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">

<title></title>

</head>

<body>

<h1>Trabajo Practico N1</h1>
<p>Ejercicios</p>
<p>1) Imprima por pantalla: “Hola mundo</p>
<?php

echo'Hola mundo <br>';

?>
<p>2) Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</p>
<br>
<?php
$mensaje = "hola mundo";
echo $mensaje;
?>
<p>3) Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división 
entera y el resto de la división entera.</p>
<br>
<?php
$num1= 16;
$num2 = 4;
echo  'Suma : ' . $num1 .' + ' . $num2 .' = ' . ($num1+$num2) ;
echo  '<br>Resta : ' . $num1 .' - ' . $num2 .' = ' . ($num1-$num2);
echo  '<br>Multiplicación : ' . $num1 .' * ' . $num2 .' = ' . ($num1*$num2);
echo  '<br>División : ' . $num1 .' / ' . $num2 .' = ' . ($num1/$num2);
?>
<p>4) Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por 
pantall</p>
<?php
$Celsius = 20 ;
$Fahrenheit = $Celsius * 9/5 + 32;
echo 'De '. $Celsius .'°C pasa a '. $Fahrenheit. ' Grados Fahrenheit'
?>
<p>5) Implementar algoritmos que permitan:
<br>a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
<br>b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm </p>
<?php
$base=18;
$altura=12;
echo 'A. Dada su base 18cm y su altura 12cm de un rectangulo <br> El perimetro es '. (2 *$base + $altura) .' <br> y su Area es de ' .( $base *$altura);
$radio= 30;
echo '<br>B. Dada el radio de 30cm de un circulo, su perimetro es el de '. (2.0*M_PI*$radio) . '<br> y su area es '.(M_PI*($radio*$radio));
?>
</body>

</html>