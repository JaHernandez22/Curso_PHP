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
    // PHP 1.3
        echo "Hola Mundo";
        echo "<br>";

    //PHP 1.4
        echo "<br>";
        $dia = date("d");
        if ($dia <= 10) {
        echo "sitio activo ";
        } else {
        echo "sitio fuera de servicio";
        }
        echo "<br>";

    //PHP 1.5
        echo "<br>";
        $dia = 24; 
        $sueldo = 758.43; 
        $nombre = "juan"; 
        $exite = true; 
        echo "Variable entera:";
        echo $dia;
        echo "<br>";
        echo "Variable double:";
        echo $sueldo;
        echo "<br>";
        echo "Variable string:";
        echo $nombre;
        echo "<br>";
        echo "Variable boolean:";
        echo $exite;
        echo "<br>";

    //PHP 1.6
        echo "<br>";
        $cadena1 = "diego";
        $cadena2 = "juan";
        $cadena3 = "ana";
        $todo = $cadena1 . $cadena2 . $cadena3 . "<br>";
        echo $todo;
        $edad1 = 24;
        echo $cadena1 . " tiene $edad1 de edad";
        echo "<br>";

    //PHP 1.7
        echo "<br>";
        $valor = rand(1, 100);
        echo "El valor sorteado es $valor<br>";
        if ($valor <= 9) {
          echo "Tiene un dígito";
        } else {
          if ($valor < 100) {
            echo "Tiene 2 dígitos";
          } else {
            echo "Tiene 3 dígitos";
          }
        }
        echo "<br>";
    //PHP 1.8
        /*echo "<br>";
        for ($f = 1; $f <= 100; $f++) {
            echo $f;
            echo "<br>";
          }
        echo "<br>";

        $valor = rand(1, 100);
        $inicio = 1;
        while ($inicio <= $valor) {
          echo $inicio;
          echo "<br>";
          $inicio++;
        }

        $dia = date("d");
        $inicio = 1;
        while ($inicio <= $dia) {
          echo $inicio . "<br>";
          $inicio++;
        }*/
    ?>
    <!-- 1.9-->
        <!--<br>;
        <form method="post" action="pagina1.php">
        "Ingrese su nombre:"
        <input type="text" name="nombre">
        <br>
        "Ingrese tu edad:"
        <input type="number" name="edad" min= "1" max= "100">
        <br>
        <input type="submit" value="confirmar">
        </form>
        <br>;-->
    
    <!-- 1.10 -->
        <br>
        <form action="pagina1.php" method="post">
        Ingrese tu nombre:
        <input type="text" name="nombre">
        <br>
        <input type="radio" name="radio1" value="No tiene estudios">No tiene estudios
        <br>
        <input type="radio" name="radio1" value="Estudios primarios">Estudios primarios
        <br>
        <input type="radio" name="radio1" value="Estudios secundarios">Estudios secundarios
        <br>
        <input type="submit" name="operar">
        </form>




    
</body>
</html>