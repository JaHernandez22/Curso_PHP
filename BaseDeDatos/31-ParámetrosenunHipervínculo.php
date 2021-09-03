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
  <A href="31-ParámetrosenunHipervínculo-Pag1.php?tabla=2">Tabla del 2</A> <br>
  <A href="31-ParámetrosenunHipervínculo-Pag2.php?tabla=3">Tabla del 3</A> <br>
  <A href="31-ParámetrosenunHipervínculo-Pag3.php?tabla=5">Tabla del 5</A>
-->
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select codigo,nombrecurso from cursos") or
        die("Problemas en el select:" . mysqli_error($conexion));

    while ($reg = mysqli_fetch_array($registros)) {
        echo "Codigo:" . $reg['codigo'] . "<br>";
        echo "Nombre del curso:<a href=\"31-ParámetrosenunHipervínculo-Pag1.php?codigo=$reg[codigo]\">" . $reg['nombrecurso'] . "</a><br>";
        echo "<hr>";
    }

    mysqli_close($conexion);
    ?>
</body>
</html>