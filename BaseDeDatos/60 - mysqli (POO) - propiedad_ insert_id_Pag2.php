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

        $mysql->query("insert into articulos(descripcion,precio,codigorubro) 
                values ('$_REQUEST[descripcion]',$_REQUEST[precio],$_REQUEST[codigorubro])") or
            die($mysql_error);

        echo "Se cargó el artículo y se se generó el código de artículo:";
        echo $mysql->insert_id;

        $mysql->close();
    ?>

</body>
</html>