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
/*
  require_once("38-IncluirunArchivoExterno(require_once)-Pag2.php");
  cabeceraPagina("Titulo principal de la página");
  echo "<br><br><center>Este es el cuerpo de la página<br><br></center>";
  piePagina("Pie de la página");
*/

    require_once("38-IncluirunArchivoExterno(require_once)-Pag2.php");
    $conexion = retornarConexion();

    $registros = mysqli_query($conexion, "select alu.codigo as codigo,
                                                nombre,
                                            mail,
                                        codigocurso, 
                                                nombrecurso
                                    from alumnos as alu
                                            inner join cursos as cur on cur.codigo=alu.codigocurso") or
        die("Problemas en el select:" . mysqli_error($conexion));
    while ($reg = mysqli_fetch_array($registros)) {
        echo "Codigo:" . $reg['codigo'] . "<br>";
        echo "Nombre:" . $reg['nombre'] . "<br>";
        echo "Mail:" . $reg['mail'] . "<br>";
        echo "Curso:" . $reg['nombrecurso'] . "<br>";
        echo "<hr>";
    }
    mysqli_close($conexion);
 
    ?>
</body>
</html>