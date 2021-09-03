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
            ?>
            <form method="post" action="52 - mysqli (POO) - modificación de un registro de la tabla rubros-Pag3.php">
            Descripción del rubro:
            <input type="text" name="descripcion" size="50" value="<?php echo $reg['descripcion']; ?>">
            <input type="hidden" name="codigo" value="<?php echo $_REQUEST['codigo']; ?>">
            <br>
            <input type="submit" value="Confirmar">
            </form>
    <?php
    } else
        echo 'No existe un rubro con dicho código';

  $mysql->close();

  ?>
</body>
</html>