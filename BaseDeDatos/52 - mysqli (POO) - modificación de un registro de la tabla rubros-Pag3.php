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
        $mysql = new mysqli("localhost", "root", "", "base1");
        if ($mysql->connect_error)
            die("Problemas con la conexión a la base de datos");

        $mysql->query("update rubros set descripcion='$_REQUEST[descripcion]' 
                                where codigo=$_REQUEST[codigo]") or
            die($mysql->error);

        echo 'Se modificó la descripción del rubro';

        $mysql->close();
    ?>
</body>
</html>