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
        $dato = date("L");
        if ($dato == 1)
            echo "Año bisiesto";
        else
            echo "Año no bisiesto";
        echo "<br>";
        echo "Día de la semana:";
        $dato = date("w");
        switch ($dato) {
            case 0:
            echo "domingo";
            break;
            case 1:
            echo "lunes";
            break;
            case 2:
            echo "martes";
            break;
            case 3:
            echo "miércoles";
            break;
            case 4:
            echo "jueves";
            break;
            case 5:
            echo "viernes";
            break;
            case 6:
            echo "sábado";
            break;
        }
    */
    
        $ar = fopen("datos.txt", "r") or
        die("No se pudo abrir el archivo");
        while (!feof($ar)) {
        $linea = fgets($ar);
        $lineasalto = nl2br($linea);
        echo $lineasalto;
        }
        fclose($ar);
    
    ?>
</body>
</html>