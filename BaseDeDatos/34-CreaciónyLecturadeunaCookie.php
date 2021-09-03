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
    <form action="34-CreaciónyLecturadeunaCookie-Pag2.php" method="post">
        Seleccione de que color desea que sea la página de ahora en más:<br>
        <input type="radio" value="rojo" name="radio">Rojo<br>
        <input type="radio" value="verde" name="radio">Verde<br>
        <input type="radio" value="azul" name="radio">Azul<br>
        <input type="submit" value="Crear cookie">
    </form>
    -->

    <form method="post" action="34-CreaciónyLecturadeunaCookie-Pag2.php">
    Ingrese su nombre:
    <input type="text" name="nombre" value="<?php if (isset($_COOKIE['usuario'])) echo $_COOKIE['usuario'] ?>">
    <br>
    <input type="submit" value="confirmar">
  </form>
</body>
</html>