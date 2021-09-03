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
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
            die("Problemas con la conexión");

        $registros = mysqli_query($conexion, "update alumnos
                            set codigocurso=$_REQUEST[codigocurso]
                            where mail='$_REQUEST[mailviejo]'") or
            die("Problemas en el select:" . mysqli_error($conexion));
        echo "El curso fue modificado con exito";
        */
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

        $registros = mysqli_query($conexion, "update alumnos                          
                                           set digocurso=$_REQUEST[codigocurso],                                                                          
                                               nombre='$_REQUEST[nombre]',mail='$_REQUEST[mail]'	  
                                           where codigo=$_REQUEST[codigo]") or
                die("Problemas en el select:" . mysqli_error($conexion));
        echo "El curso fue modificado con exito";
    ?>
</body>
</html>