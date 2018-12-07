<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>recibe</title>
</head>
<body>
    <header>
        <h2>recibe datos</h2>
    </header>

 <section>

   <article>

    <?php

    $nombre = $_POST["codigo"];
    $precio = $_POST["nombre"];
    $descripcion = $_POST["stock"];
    $descripcion = $_POST["precio"];

    echo "nombre: " . $nombre . "<br>";
    print "codigo: $ $codigo <br> ";
    echo 'stock:' . $stock. "<br>";
    print "precio: $ $precio <br> ";

    ?>

  </article>
  <article>
  
  <h2>Conexión</h2>
    <?php
         $servidor = "localhost";
         $usurario = "root";
         $password = "root";
         #nombre de la bd.
         $nombreBD = "empresa";

          #se crea la conexion.
         $conexion = new mysqli($servidor, $usurario, $password, $nombreBD);
         #chequeamos la conexion.
         if($conexion ->connect_error){
             die("conexion fallida" .$conexion ->connect_error);

         }

          echo "Conexion Realizada con exito!";

    ?>



  </article>

  <article>

  <h2>ingresar datos:</h2>

  <?php
  $sql = "insert into producto(nombre, codigo, stock, precio)
  values('loratadina',5454787,2,2000)";

  #se realiza ingreso de datos []

  if ($conexion -> query($sql) == TRUE){

    echo "DATOS INGRESADOS CON EXITO!!";

  }else {
     echo "ERROR: " . $sql. " " .$conexion -> connect_error;

  }

   $conexion -> close();
  ?>


  </article>


 </section>

</body>
</html>