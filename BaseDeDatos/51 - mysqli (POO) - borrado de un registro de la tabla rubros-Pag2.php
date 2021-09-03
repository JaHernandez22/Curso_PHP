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

        $registro = $mysql->query("select descripcion from rubros where codigo=$_REQUEST[codigo]") or
            die($mysql->error);

        if ($reg = $registro->fetch_array()) {
            $mysql->query("delete from rubros where codigo=$_REQUEST[codigo]") or
            die($mysql->error);
            echo 'La descripción del rubro que se eliminó es:' . $reg['descripcion'];
        } else
            echo 'No existe un rubro con dicho código';

        $mysql->close();
    ?>
</body>
</html>