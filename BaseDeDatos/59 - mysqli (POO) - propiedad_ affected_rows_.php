<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    <form method="post" action="59 - mysqli (POO) - propiedad_ affected_rows_Pag2.php">
        Ingrese el código de artículo a borrar:
        <input type="text" name="codigo" size="10" required>
        <br>
        <input type="submit" value="Borrar">
    </form>
    -->

    <?php
        $mysql = new mysqli("localhost", "root", "", "base1");
        if ($mysql->connect_error)
            die("Problemas con la conexión a la base de datos");

        $mysql->query("update articulos set precio=precio*1.10 where precio<=5") or
            die($mysql->error);

        echo 'La cantidad de artículos que aumentaron su precio es:';
        echo $mysql->affected_rows;

        $mysql->close();
    ?>
</body>
</html>