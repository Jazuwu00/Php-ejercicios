<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS del bootstrap  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../estilos/estilos.css">
  <link rel="shortcut icon" href="../imagenes/icono.png" type="image/x-icon">
  <title>Tienda</title>
</head>
<body>
<div class=" bg-dark text-light text-center pb-3" >
  <h1 class="text-center p-2">Tienda de ropa</h1>
  <button class="btn btn-primary " type="submit"><a  class="text-light text-decoration-none" href="../index.html">Inicio</a></button>
  <button class="btn btn-primary" type="submit"><a  class="text-light text-decoration-none"href="../listar.php">ver ropa</a></button>
  <button class="btn btn-primary" type="submit"><a class="text-light text-decoration-none" href="../abm/agregar.html">Agregar ropa</a></button>
  </div>


<div class="mt-3 text-center">
    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra todos los articulas de la tienda menores a $500.</p>
    </div>
    <section>
    <div class="container-fluid">
      <div class="row align-items-center px-3 " >


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
        $consulta= "SELECT * FROM ropa where precio <500 ";
        // 3) Ejecutar la orden y obtenemos los registros
        $datos= mysqli_query($conexion, $consulta);

        // 4) el while recorre todos los registros y genera una CARD PARA CADA UNA
        while ($reg = mysqli_fetch_array($datos)) {?>
          <div class="col"  >
          <div class="card mx-auto mt-3 text-center" style="width: 220px;  font-size:20px;">
            <img style="width: 200px;  height:150px;" class="card-img-top mt-2" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="100px" height="200px")>
            <a href="ver.php?id=<?php echo $reg['ropa'];?>" class="card-body">
              <h3 class="card-title" style="width: 100%; font-size:25px;"><?php echo ucwords($reg['ropa'].' '. $reg['marca']) ?></h3>
              <p class="card-subtitle "><?php echo ucwords( 'Talle' .' : '.$reg['talle']) ?></p>
              <span class="card-text "><?php echo(' $'. $reg['precio']); ?></span>
             <br>
            </a>
            <div class="btn-group  mt-1"   style="width:200px; height:50px; margin: 0 auto; gap:5px; ">
              <button style="font-size:12px;" class=" btn btn-primary btn-sm" type="submit">Comprar</button>
              <button style="font-size:12px;" class=" btn btn-primary btn-sm" type="submit">Agregar al carrito</button>
              </div>
          </div>
          </div>

        <?php } ?>

      </div>
    </div>
  </section>
    <div class="text-center mt-5">
 <span class=" text-decoration-underline"> <p>Otras categorias que pueden interesarte</p></span>
<button class="  btn btn-primary btn-sm" type="submit"><a  class="text-light text-decoration-none" href="nike.php">Nike</a></button>
  <button class="btn btn-primary btn-sm" type="submit"><a  class="text-light text-decoration-none"href="buzos.php">Buzos</a></button>
  <button class="btn btn-primary btn-sm" type="submit"><a class="text-light text-decoration-none" href="menora500.php">Menor a $500</a></button> </div>
  
  <footer class="footer bg-dark text-center text-lg-start mt-4">
  <!-- Copyright -->
  <div class="text-center p-3 text-light">
    © 2020 Copyright:
  </div>
</footer>
     <!-- JavaScript del bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
