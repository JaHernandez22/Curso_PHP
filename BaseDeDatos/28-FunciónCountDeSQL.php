<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 28 - Función count de SQL. -->
    <?php
       /* 
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
            die("Problemas con la conexión");

        $registros = mysqli_query($conexion, "select count(*) as cantidad from alumnos") or
            die("Problemas en el select:" . mysqli_error($conexion));
        $reg = mysqli_fetch_array($registros);
        echo "La cantidad de alumnos inscriptos son :" . $reg['cantidad'];
        */
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select nombrecurso from cursos") or
    die("Problemas en el select:" . mysqli_error($conexion));

    while ($reg = mysqli_fetch_array($registros)) {
        echo "Nombre del curso:" . $reg['nombrecurso'] . "<br>";
        echo "<hr>";
    }

    $registros = mysqli_query($conexion, "select count(*) as cantidad from cursos") or
        die("Problemas en el select:" . mysqli_error($conexion));

    $reg = mysqli_fetch_array($registros);
    echo "La cantidad de cursos son :" . $reg['cantidad'];

    mysqli_close($conexion);
       
    ?>
</body>
</html>