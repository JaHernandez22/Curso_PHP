<?php
/*
if ($_REQUEST['radio'] == "rojo")
  setcookie("color", "#ff0000", time() + 60 * 60 * 24 * 365, "/");
elseif ($_REQUEST['radio'] == "verde")
  setcookie("color", "#00ff00", time() + 60 * 60 * 24 * 365, "/");
elseif ($_REQUEST['radio'] == "azul")
  setcookie("color", "#0000ff", time() + 60 * 60 * 24 * 365, "/");
  */
    setcookie("usuario", $_REQUEST['nombre'], time() + 60 * 60 * 24 * 365, "/");
?>

<html>
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
    Se creó la cookie.
    <br>
    <a href="34-CreaciónyLecturadeunaCookie.php">Ir a la otra página</a>
    -->

    Se creó la cookie.
    <br>
    <a href="34-CreaciónyLecturadeunaCookie.php">Ir a la otra página</a>
</body>
</html>