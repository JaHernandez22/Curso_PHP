<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 30 - Cláusula Group By de SQL. -->
    <?php
    /*
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
            die("Problemas con la conexión");

        $registros = mysqli_query($conexion, "select count(alu.codigo) as cantidad,
                                                    nombrecurso 
                                                from alumnos as alu
                                                inner join cursos as cur on cur.codigo=alu.codigocurso
                                                group by alu.codigocurso") or
            die("Problemas en el select:" . mysqli_error($conexion));
        while ($reg = mysqli_fetch_array($registros)) {
            echo "Nombre del curso:" . $reg['nombrecurso'] . "<br>";
            echo "Cantidad de inscriptos:" . $reg['cantidad'] . "<br>";
            echo "<hr>";
        }
        mysqli_close($conexion);
    */
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

        $registros = mysqli_query($conexion, "select count(alu.codigo) as cantidad,
                                            nombrecurso,
                                            codigocurso 
                                        from alumnos as alu
                                        inner join cursos as cur on cur.codigo=alu.codigocurso
                                        group by alu.codigocurso") or
        die("Problemas en el select:" . mysqli_error($conexion));

        while ($reg = mysqli_fetch_array($registros)) {
        echo "Nombre del curso:" . $reg['nombrecurso'] . "<br>";
        echo "Cantidad de inscriptos:" . $reg['cantidad'] . "<br>";
        $registros2 = mysqli_query($conexion, "select nombre 
                                            from alumnos 
                                            where codigocurso=$reg[codigocurso]") or
        die("Problemas en el select:" . mysqli_error($conexion));
        while ($reg2 = mysqli_fetch_array($registros2)) {
        echo $reg2['nombre'] . "-";
        }
        echo "<hr>";
        }
        mysqli_close($conexion);
    ?>
</body>
</html>