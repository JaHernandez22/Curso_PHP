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

        $registros = mysqli_query($conexion, "select * from alumnos
                            where mail='$_REQUEST[mail]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)) {
        ?>

        <form action="web3.php" method="post">
            Ingrese nuevo mail:
            <input type="text" name="mailnuevo" value="<?php echo $reg['mail'] ?>">
            <br>
            <input type="hidden" name="mailviejo" value="<?php echo $reg['mail'] ?>">
            <input type="submit" value="Modificar">
        </form>

        <?php
        } else
        echo "No existe alumno con dicho mail";



        $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

        $registros = mysqli_query($conexion, "select * from cursos
                            where codigo='$_REQUEST[codigo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
        if ($reg = mysqli_fetch_array($registros)) {
        ?>

        <form action="web3.php" method="post">
            Ingrese nuevo curso:
            <input type="text" name="nombrecurso" value="<?php echo $reg['nombrecurso'] ?>">
            <br>
            <input type="hidden" name="codigo" value="<?php echo $reg['codigo'] ?>">
            <input type="submit" value="Modificar">
        </form>

        <?php
        } else
        echo "No existe alumno con dicho mail";
*/      
    ?>


</body>
</html>