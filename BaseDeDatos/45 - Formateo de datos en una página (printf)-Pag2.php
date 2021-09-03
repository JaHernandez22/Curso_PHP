<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--
<body style="background:<?php printf("#%X%X%X", 150, 150, 100); ?>">
    Esta página definimos el color de fondo indicando la cantidad
    de rojo,verde y azul en formato decimal y solicitando a la
    función printf que haga la conversión a hexadecimal.<br><br>
    <a href="45 - Formateo de datos en una página (printf)-Pag3.php">último ejemplo</a>
</body>
-->
<body>
    <?php
        echo "Nombre:".$_REQUEST['nombre'];
        echo "<br>";
        echo "Mail:".$_REQUEST['mail'];
        echo "<br>";
        echo "Importe a donar:";
        printf("%07d",$_REQUEST['importe']);
    ?>    
</body>

</html>