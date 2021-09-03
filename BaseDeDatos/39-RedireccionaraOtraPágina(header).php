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
    <form action="39-RedireccionaraOtraPágina(header)-Pag2.php" method="post">
        Ingrese dirección de sitio web (ej www.google.com):
        <input type="text" name="direccion" size="30"><br>
        <input type="submit" value="Redireccionar">
    </form>
    -->

    <?php {
        if (isset($_REQUEST['error']))
        echo "Ingresó clave incorrecta<br>";
        }
    ?>
    <form method="post" action="39-RedireccionaraOtraPágina(header)-Pag2.php">
        Ingrese el clave:
        <input type="password" name="clave">
        <br>
        <input type="submit" value="confirmar">
    </form>
</body>
</html>