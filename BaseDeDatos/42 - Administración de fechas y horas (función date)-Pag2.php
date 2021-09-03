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
        echo "La fecha de hoy es:";
        $fecha = date("j/n/y");
        echo $fecha;
        echo "<br>";
    */
        $ar = fopen("datos.txt", "a") or
            die("Problemas en la creacion");
        fputs($ar, $_REQUEST['nombre']);
        fputs($ar, "\n");
        fputs($ar, $_REQUEST['queja']);
        fputs($ar, "\n");
        fputs($ar, "Fecha y Hora:");
        $fecha = date("d/m/Y");
        fputs($ar, $fecha);
        fputs($ar, "  ");
        $hora = date("H:i:s");
        fputs($ar, $hora);
        fputs($ar, "\n");
        fputs($ar, "------------------------------\n");
        fclose($ar);
        echo "Los datos se cargaron correctamente.";
    ?>
    <!-- <a href="42 - Administración de fechas y horas (función date)-Pag3.php">Siguiente problema</a> -->
</body>
</html>