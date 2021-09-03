<?php
    /*
    header("Location: http://$_REQUEST[direccion]");
    */
        if ($_REQUEST['clave'] != "z80") {
            header("Location: 39-RedireccionaraOtraPágina(header).php?error=1");
        }
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
     <h2>Bienvenido</h2>
</body>
</html>