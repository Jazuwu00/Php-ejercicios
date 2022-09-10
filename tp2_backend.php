<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Crear un archivo “tp2_backend.php” y realizar los siguientes ejercicios</h2>
   
       <p>1.Crear una variable n y validar que sea un número positivo.</p>
    
    <?php
    $numero= 4;
    if($numero>0){
        echo'El numero '. $numero .' es positivo';
    }else{
        echo'El numero '. $numero .' no es positivo';
    }
    ?>
    <p>2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</p>

    <?php
  
   if($numero>1 && $numero< 10){
       echo'El numero '. $numero .' es mayor a 10 o menor a 2.';
   }else{
    echo'El numero '. $numero .' no es mayor a 10 o menor a 2.';
   }
    ?>
    <p>3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</p>

    <?php
   
   if($numero>10 || $numero< 2){
       echo'El numero '. $numero .' es mayor a 10 o menor a 2.';
   }else{
    echo 'El numero '.$numero .' no es mayor a 10 o menor a 2';
   }
    ?>

    <p>4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es 
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1, 
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y 
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”
</p>
<?php
   $numero1=34336;
   $numero2=34336;

   if($numero1>$numero2 ){
       echo  $numero1 .' - ' . $numero2 . ' = ' . ($numero1-$numero2).'<br>';
       echo  $numero1 .' + ' . $numero2 . ' = ' . ($numero1+$numero2).'<br>';
   }elseif($numero2> $numero1){
    echo  $numero1 .' / ' . $numero2 . ' = ' . ($numero1-$numero2).'<br>';
    echo  $numero1 .' % ' . $numero2 . ' = ' . ($numero1+$numero2).'<br>';
   }else{
    echo 'Los números ingresados son iguales' ;
   }
    ?>
</body>
</html>