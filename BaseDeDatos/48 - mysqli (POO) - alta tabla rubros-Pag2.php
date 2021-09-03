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
            die('Problemas con la conexion a la base de datos');

        $mysql->query("insert into rubros(descripcion) values ('$_REQUEST[descripcion]')") or
            die($mysql->error);

        $mysql->close();

        echo 'El nuevo rubro se almacenó';
    ?>
  <br>
</body>
</html>