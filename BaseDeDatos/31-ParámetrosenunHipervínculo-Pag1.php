<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       /*
       echo "Listado de la tabla del $_REQUEST[tabla] <br>";
        for ($f = 1; $f <= 10; $f++) {
            $valor = $f * $_REQUEST['tabla'];
            echo $valor . "-";
        }
        */
 
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
         die("Problemas con la conexión");

        $registros = mysqli_query($conexion, "select nombre from alumnos where codigocurso=$_REQUEST[codigo]") or
            die("Problemas en el select:" . mysqli_error($conexion));

        echo "Alumnos inscriptos a dicho curso<br>";
        while ($reg = mysqli_fetch_array($registros)) {
            echo $reg['nombre'] . " - ";
        }
        mysqli_close($conexion);
  ?>

    ?>
</body>
</html>