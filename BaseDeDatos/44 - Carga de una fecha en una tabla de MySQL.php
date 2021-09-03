<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="43 - Validación de una fecha ingresada por teclado (checkdate)-Pag2.php" method="post">
        Ingrese nombre:
        <input type="text" name="nombre"><br>
        Ingrese mail:
        <input type="text" name="mail"><br>
        Ingrese la fecha de nacimiento (dd/mm/aaaa):
        <input type="text" name="dia" size="2">
        <input type="text" name="mes" size="2">
        <input type="text" name="anio" size="4">
        <br>
        Seleccione el curso:
        <select name="codigocurso">
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "base1") or
                die("Problemas con la conexión");

            $registros = mysqli_query($conexion, "select codigo,nombrecurso from cursos") or
                die("Problemas en el select:" . mysqli_error($conexion));
            while ($reg = mysqli_fetch_array($registros)) {
                echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
            }
        ?>
        </select>
        <br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>