<?php
if (isset($_REQUEST['pos']))
  $inicio = $_REQUEST['pos'];
else
  $inicio = 0;
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
    <?php
       /*
       $conexion = mysqli_connect("localhost", "root", "", "base1") or
            die("Problemas con la conexión");

        $registros = mysqli_query($conexion, "select alu.codigo as  
                                                    codigo,
                                                    nombre,
                                                    mail,
                                                    codigocurso, 
                                                    nombrecurso 
                                                    from alumnos as alu
                                                inner join cursos as cur on cur.codigo=alu.codigocurso
                                                limit $inicio,2") or
            die("Problemas en el select:" . mysqli_error($conexion));
        $impresos = 0;
        while ($reg = mysqli_fetch_array($registros)) {
            $impresos++;
            echo "Codigo:" . $reg['codigo'] . "<br>";
            echo "Nombre:" . $reg['nombre'] . "<br>";
            echo "Mail:" . $reg['mail'] . "<br>";
            echo "Curso:" . $reg['nombrecurso'] . "<br>";
            echo "<hr>";
        }
        if ($inicio == 0)
            echo "anteriores ";
        else {
            $anterior = $inicio - 2;
            echo "<a href=\"pagina1.php?pos=$anterior\">Anteriores </a>";
        }
        if ($impresos == 2) {
            $proximo = $inicio + 2;
            echo "<a href=\"pagina1.php?pos=$proximo\">Siguientes</a>";
        } else
            echo "siguientes";
        mysqli_close($conexion);
        */
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
        die("Problemas con la conexión");
    
        $registros = mysqli_query($conexion, "select codigo,
                                                   nombrecurso
                                              from cursos
                                              limit $inicio,3") or
         die("Problemas en el select:" . mysqli_error($conexion));
        $impresos = 0;
        while ($reg = mysqli_fetch_array($registros)) {
        $impresos++;
        echo "Codigo:" . $reg['codigo'] . "<br>";
        echo "Nombre:" . $reg['nombrecurso'] . "<br>";
        echo "<hr>";
        }
        mysqli_close($conexion);
        if ($inicio == 0)
        echo "anteriores ";
        else {
        $anterior = $inicio - 3;
        echo "<a href=\"pagina1.php?pos=$anterior\">Anteriores </a>";
        }
         if ($impresos == 3) {
        $proximo = $inicio + 3;
        echo "<a href=\"pagina1.php?pos=$proximo\">Siguientes</a>";
        } else
        echo "siguientes";
        
    ?>
</body>
</html>