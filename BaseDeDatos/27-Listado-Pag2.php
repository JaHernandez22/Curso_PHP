<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- 27 - Listado (selección de registros de varias tablas - INNER JOIN)-->
   <?php/*
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
            die("Problemas con la conexión");

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
        mysqli_close($conexion);*/

     $conexion = mysqli_connect("localhost", "root", "", "base1") or
     die("Problemas con la conexión");
    
     $registros = mysqli_query($conexion, "select nombre,
                                                   mail,
                                                   nombrecurso
                                                   from alumnos as alu
                                              inner join cursos as cur on cur.codigo=alu.codigocurso
                                              where alu.codigo=$_REQUEST[codigo]") or
     die("Problemas en el select:" . mysqli_error($conexion));
    
     if ($reg = mysqli_fetch_array($registros)) {
        echo "Nombre:" . $reg['nombre'] . "<br>";
        echo "Mail:" . $reg['mail'] . "<br>";
        echo "Curso:" . $reg['nombrecurso'] . "<br>";
     } else {
        echo "No existe un alumno con ese código.";
      }
      mysqli_close($conexion);
    ?>
</body>
</html>