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
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
            die("Problemas con la conexión");

        $fechanacimiento = $_REQUEST['anio'] . "-" . $_REQUEST['mes'] . "-" . $_REQUEST['dia'];
        mysqli_query($conexion, "insert into alumnos(nombre,mail,codigocurso,fechanac) values 
                ('$_REQUEST[nombre]','$_REQUEST[mail]',
                    $_REQUEST[codigocurso],'$fechanacimiento')") or
            die("Problemas en el select" . mysqli_error($conexion));
        mysqli_close($conexion);
        echo "El alumno fue dado de alta.";
    ?>
    <br>
    <a href="43 - Validación de una fecha ingresada por teclado (checkdate)-Pag3.php">ver listado de alumnos</a>
</body>
</html>