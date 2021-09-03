<?php
/*
session_start();
*/
?>

<html>

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
        if ($_SESSION['numeroaleatorio'] == $_REQUEST['numero'])
            echo "Ingresó el valor correcto";
        else
            echo "Incorrecto";
    */
    $ancho=100;
    $alto=30;
    $imagen=imageCreate($ancho,$alto);
    $amarillo=ImageColorAllocate($imagen,255,255,0);
    ImageFill($imagen,0,0,$amarillo);
    $rojo=ImageColorAllocate($imagen,255,0,0);
    $x=10;
    for($c=0;$c<$_REQUEST['puntos'];$c++)
    {
      imagefilledellipse($imagen,$x,15,6,6,$rojo);
      $x=$x+15;
    }
    Header ("Content-type: image/jpeg");
    ImageJPEG ($imagen);
    ImageDestroy($imagen);
    ?>
</body>
</html>