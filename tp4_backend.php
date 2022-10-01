<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="estilos/css.css">
    <title>Trabajo 4</title>
</head>
<body>
    <h1> Ejercicios practico N4</h1>
    <ol>
        <li>Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro</li>
        <li>Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la 
matriz. Mostrar el esquema del array con print_r().</li>
        <li>Crear un array asociativo e introducir los siguientes valores:
        <ul>
            <li>Nombre: Pedro</li>
            <li>Apellido: Torres</li>
            <li>Apellido: Torres</li>
            <li>Teléfono: 1122334455</li>
        </ul></li>
        <li>Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y 
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array. 
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</li>
        <li>Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, 
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago. 
Ejemplo: El índice de Madrid es MD</li>
    </ol>

    <p>Respuestas</p>
    <ol>
        
        <li>
        <?php
        $NumerosPares=[];
        $n= 1;
        for ($i=1; $i <=10 ; $i++) { 
            
            if($i%2==0){
                $NumerosPares[$n] = $i;
                $n++;
            }
            
        }

        foreach($NumerosPares as $valor){
            echo "<p> $valor <p>";
        }
        ?>
         </li>
         <br>
        <li>
        <?php
        $persona=["Pedro","Ana",34,"l"];
        print_r($persona);
        ?>
        </li>
        <br>
        <li>
        <?php
        $Datos=["Nombre"=> "Pedro","Apellido" =>"Torres","Teléfono"=>1122334455];
        print_r($Datos);
        ?>
        </li>
        <br>
        <li>
        <?php
        $Ciudades=["Madrid","Barcelona","Londres","New York","Los Ángeles","Chicago"];
        print_r($Ciudades);
        ?>
        </li>
        <br>
        <li>
        <?php
        $Ciudades=["MD"=> "Madrid","BCL" =>"Barcelona","LD"=>"Londres","LD"=>"Londres","NY "=>"New York","LA"=>"Ángeles","CCG"=>"Chicago"];
        print_r($Ciudades);
        echo "<p>El indice para $Ciudades[MD] es MD </p>";
        ?>
        </li>
    </ol>
</body>
</html>