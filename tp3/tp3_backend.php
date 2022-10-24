<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="estilos/css.css">
<title></title>

</head>

<body>

<h1>Trabajo Practico N4</h1>
<p>Ejercicios</p>
<ol>
    <li>Mostrar los números del 1 al 100.</li>
    <li>Mostrar los números del 100 al 1.</li>
    <li>Mostrar los números pares del 1 al 100.</li>
    <li>Mostrar los números impares del 1 al 100.</li>
    <li>Mostrar la suma de los números de 1 a 20.</li>
    <li>Mostrar la suma de números pares de 1 a 20</li>
</ol>
<br>
<p>Respuestas</p>
<ol>
    <li>
    <?php
    for ($i=1; $i <=100 ; $i++) { 
        echo($i . ",");
        
    } ?>
    </li>
    <br>
    <li>
    <?php
    for ($i=100; $i >=1 ; $i--) { 
        echo($i . ",");
    }
     ?>
    </li>
    <br>
    <li>
    <?php
    for ($i=1; $i <=100 ; $i++) { 
        if($i%2==0){
            echo $i.',';
        }
        
    }
     ?>
    </li>
    <br>
    <li>
    <?php
    for ($i=1; $i <=100 ; $i++) { 
        if($i%2==!0){
            echo $i.',';
        }
    }
     ?>
    </li>

    <br>
    <li>
    <?php
     $s=0;
    $suma=0;
    for ($i=1; $i <=20 ; $i++) { 
        $s +=$i;
        echo  ($suma."+" . $i) ." = ". ($s)."<br>";
        $suma= $s;
           
            
    }
     ?>
    </li>
    <br>
    <li>
    <?php
    $suma=0;
    for ($i=1; $i <=20 ; $i++) { 
           if(($i%2)==0){
           $n= $suma + $i;
           
           echo $suma ." + ". $i . ' = '. $n ."<br>";
           $suma= $n ;
          

           }
        
    }
     ?>
    </li>
</ol>


</body>

</html>