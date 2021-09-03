<?php
/*
session_start();
$_SESSION['usuario'] = $_REQUEST['campousuario'];
$_SESSION['clave'] = $_REQUEST['campoclave'];
*/
session_start();
$conexion = mysqli_connect("localhost", "root", "", "base1") or
  die("Problemas con la conexión");

$registros = mysqli_query($conexion, "select codigo, nombre, codigocurso
                        from alumnos where mail='$_REQUEST[mail]'") or
  die("Problemas en el select:" . mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {
  $_SESSION['usuario'] = $reg['nombre'];
}
?>

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
    Se almacenaron dos variables de sesión.<br><br>
    <a href="37-VariablesdeSesión($_SESSION)-Pag3.php">Ir a la tercer página donde se recuperarán
    las variables de sesión</a>
-->

    <a href="37-VariablesdeSesión($_SESSION)-Pag3.php">Ingresar a pagina principal</a>;

</body>
</html>