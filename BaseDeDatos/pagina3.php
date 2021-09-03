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
/* 2.10 INSERT (Alta de registros en una tabla)
_______________________________________________*/
/*
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "insert into alumnos(nombre,mail,codigocurso) values 
                        ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso])")
        or die("Problemas en el select" . mysqli_error($conexion));

    mysqli_close($conexion);

    echo "El alumno fue dado de alta.";

    $conexion2 = mysqli_connect("localhost", "root", "","base1") or
                die("Problemas de Conexion");
    
    mysqli_query($conexion2, "insert into cursos(nombrecurso) values
                ('$_REQUEST[nombreCurso]')") or
                die("Problemas en el select". mysqli_error($conexion2));
    mysqli_close($conexion2);

    echo "El alumno fue dado de alta...";
*/

/* 3.1 - Listado (selección de registros de una
________________________________________________*/

    /*$conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select codigo,nombre,mail,codigocurso
                        from alumnos") or
    die("Problemas en el select:" . mysqli_error($conexion));

    while ($reg = mysqli_fetch_array($registros)) {
        echo "Codigo:" . $reg['codigo'] . "<br>";
        echo "Nombre:" . $reg['nombre'] . "<br>";
        echo "Mail:" . $reg['mail'] . "<br>";
        echo "Curso:";
        switch ($reg['codigocurso']) {
        case 1:
            echo "PHP";
            break;
        case 2:
            echo "ASP";
            break;
        case 3:
            echo "JSP";
            break;
        }
        echo "<br>";
        echo "<hr>";
    }

  mysqli_close($conexion);
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select codigo,nombrecurso
                        from cursos") or
    die("Problemas en el select:" . mysqli_error($conexion));

    while($regi = mysqli_fetch_array($registros)){
        echo "Codigo: ". $regi['codigo']. "<br>";
        echo "Nombre del curso: ". $regi['nombrecurso']; 

        echo "<br>";
        echo "<hr>";
    }
    mysqli_close($conexion);*/

/* 3.1 - Listado (selección de registros de una
________________________________________________*/
    /*$conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select codigo,nombre,codigocurso
                        from alumnos where mail='$_REQUEST[mail]'") or
    die("Problemas en el select:" . mysqli_error($conexion));

    if ($reg = mysqli_fetch_array($registros)) {
    echo "Nombre:" . $reg['nombre'] . "<br>";
    echo "Curso:";
    switch ($reg['codigocurso']) {
    case 1:
        echo "PHP";
        break;
    case 2:
        echo "ASP";
        break;
    case 3:
        echo "JSP";
        break;
    }
    } else {
    echo "No existe un alumno con ese mail.";
    }
    mysqli_close($conexion);
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select codigo,nombre, codigocurso
                            from alumnos where nombre='$_REQUEST[nombre]'") or
        die("Problemas en el select:" . mysqli_error($conexion));

    $cant = 0;
    while ($reg = mysqli_fetch_array($registros)) {
        echo "Nombre:" . $reg['nombre'] . "<br>";
        echo "Curso:";
        switch ($reg['codigocurso']) {
        case 1:
            echo "PHP";
            break;
        case 2:
            echo "ASP";
            break;
        case 3:
            echo "JSP";
            break;
        }
        $cant++;
        echo "<hr>";
    }

    if ($cant == 0) {
        echo "No existen alumnos con dicho nombre";
    }

    mysqli_close($conexion);
    */
/* 3.3 - DELETE (Baja de un registro en una tabla)
________________________________________________*/

    /*$conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select codigo from alumnos
                            where mail='$_REQUEST[mail]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conexion, "delete from alumnos where mail='$_REQUEST[mail]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
        echo "Se efectuó el borrado del alumno con dicho mail.";
    } else {
        echo "No existe un alumno con ese mail.";
    }
    mysqli_close($conexion);*/
/*
    $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "select codigo from cursos
                            where nombrecurso='$_REQUEST[curso]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
    if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conexion, "delete from cursos where nombrecurso='$_REQUEST[curso]'") or
        die("Problemas en el select:" . mysqli_error($conexion));
        echo "Se efectuó el borrado del curso.";
    } else {
        echo "No existe el curso ingresado.";
    }
    mysqli_close($conexion);
*/
/* 3.4 -  DELETE (Baja de todos los registros de una tabla)
________________________________________________*/
/*    $conexion = mysqli_connect("localhost", "root", "", "base1") or
    die("Problemas con la conexión");

    mysqli_query($conexion, "delete from alumnos") or
    die("Problemas en el select:" . mysqli_error($conexion));

    echo "Se efectuó el borrado de todos los alumnos.";

    mysqli_close($conexion);
*/
    ?>
</body>
</html>