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
/* 3.5 UPDATE (Modificación de un registro de una tabla)
________________________________________________________ */
/*
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
            die("Problemas con la conexión");

        mysqli_query($conexion, "update alumnos
                            set mail='$_REQUEST[mailnuevo]' 
                            where mail='$_REQUEST[mailviejo]'") or
            die("Problemas en el select:" . mysqli_error($conexion));
        echo "El mail fue modificado con exito";

        $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

        mysqli_query($conexion, "update cursos
                        set nombrecurso='$_REQUEST[nombrecurso]' 
                        where codigo='$_REQUEST[codigo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
        echo "El Curso fue modificado";
*/
    ?>
</body>
</html>