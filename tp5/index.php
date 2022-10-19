<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS del bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Inicio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

  <div class=" bg-dark text-light text-center pb-3" >
  <h1 class="text-center p-2">Tienda de ropa</h1>
  <button class="btn btn-primary " type="submit"><a  class="text-light text-decoration-none" href="index.html">Inicio</a></button>
  <button class="btn btn-primary" type="submit"><a  class="text-light text-decoration-none"href="listar.php">Listar ropa</a></button>
  <button class="btn btn-primary" type="submit"><a class="text-light text-decoration-none" href="agregar.html">Agregar ropa</a></button>
  </div>
<div class="text-center">  <h2 class="mt-3">Lista de ropa</h2>
  <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
</div>

  <section>
    <div class="container">
      <div class="row">


        <?php
        // 1) Conexion
        $conexion = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($conexion, "tiendaderopa");

        // 2) Preparar la orden SQL
        // Sintaxis SQL SELECT
        // SELECT * FROM nombre_tabla
        // => Selecciona todos los campos de la siguiente tabla
        // SELECT campos_tabla FROM nombre_tabla
        // => Selecciona los siguientes campos de la siguiente tabla
        $consulta='SELECT * FROM ropa';

        // 3) Ejecutar la orden y obtenemos los registros
        $datos= mysqli_query($conexion, $consulta);

        // 4) el while recorre todos los registros y genera una CARD PARA CADA UNA
        while ($reg = mysqli_fetch_array($datos)) {?>
          <div class="card col-sm-12 col-md-6 col-lg-3 mt-3 ">
            <img class="card-img-top mt-2" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="100px" height="200px")>
            <a href="ver.php?id=<?php echo $reg['ropa'];?>" class="card-body">
              <h3 class="card-title text-center" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['ropa']." ".$reg['marca']) ?></h3>
              <span>$ <?php echo $reg['precio']; ?></span>
            </a>
          </div>

        <?php } ?>

      </div>
    </div>
  </section>
  <div class="text-center mt-5">
 
<button class=" footer btn btn-primary " type="submit"><a  class="text-light text-decoration-none" href="nike.php">Nike</a></button>
  <button class="btn btn-primary" type="submit"><a  class="text-light text-decoration-none"href="buzos.php">Buzos</a></button>
  <button class="btn btn-primary" type="submit"><a class="text-light text-decoration-none" href="menora500.php">Menor a $500</a></button> </div>
  
  <footer class="bg-dark text-center text-lg-start mt-4">
  <!-- Copyright -->
  <div class="text-center p-3 text-light">
    © 2020 Copyright:
  </div>
</footer>
  
  <!-- JavaScript del bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
