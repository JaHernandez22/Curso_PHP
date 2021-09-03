<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 2.1 -->
    <form action="pagina2.php" method="post">
        Ingrese el nombre:
        <input type="text" name="nombre">
        <br>
        <input type="checkbox" name="check1">futbol
        <br>
        <input type="checkbox" name="check2">backet
        <br>
        <input type="checkbox" name="check3">tennis
        <br>
        <input type="checkbox" name="check4">voley
        <br>
        <input type="submit" name="operar">
        <br>
    </form>

    <!-- 2.2 -->
    <br>
    <form action="pagina2.php" method="post">
        Ingrese tu nombre:
        <input type="text" name="nombre">
        <br>
        <select name="operacion">
        <option value="opcion1">1 - 1000</option>
        <option value="opcion2">1001 - 3000</option>
        <option value="opcion3">> 3000</option>
        </select>
        <br>
        <input type="submit" name="operar">
        <br>
    </form>

    <!-- 2.3 -->
    <br>
        <form action="pagina2.php" method="post">
            <textarea name="curriculum" row = "8" cols = "80"> En la ciudad de [........], se acuerda entre la Empresa [..........] representada por el Sr. [..............] en su carácter de Apoderado, con domicilio en la calle [..............] y el Sr. [..............], futuro empleado con domicilio en [..............], celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.
            </textarea>
            <br>
            <input type="submit" value="Confirmar">
        </form>

    <!-- 2.4 -->
    <?php
        echo "<br>";
        $nombres[] = "juan";
        $nombres[] = "pedro";
        $nombres[] = "ana";
        for ($f = 0; $f < count($nombres); $f++) {
            echo $nombres[$f];
            echo "<br>";
        }
    ?>
    <!-- 2.5 -->
        <br>
        <!--<form action="pagina2.php" method="post">
            Ingrese su nombre:
            <input type="text" name="nombre">
            <br>
            <br>
            Ingrese su dirección:
            <input type="text" name="direccion">
            <br>
            <input type="checkbox" name = "jamonYqueso">Jamon y Queso
            <br>
            Ingrese la cantidad:
            <input type="text" name="cantDJamon" size = "3">
            <br> 
            <input type="checkbox" name = "napolitana">Napolitana
            <br>
            Ingrese la cantidad:
            <input type="text" name="cantNapolitana" size = "3">
            <br> 
            <input type="checkbox" name = "muzzarella">Muzzarella
            <br>
            Ingrese la cantidad:
            <input type="text" name="cantDMuzzarella" size = "3">
            <br> 
            <input type="submit" value="Registrar">
            <br>
        </form>-->
    <!-- 2.6 -->
        <?php
        /*
        $ar = fopen("datos.txt", "r") or
            die("No se pudo abrir el archivo");
        while (!feof($ar)) {
            $linea = fgets($ar);
            $lineasalto = nl2br($linea);
            echo $lineasalto;
        }
        fclose($ar);
        */

    // 2.7
        $articulo = array(
        'codigo' => 1,
        'descripcion' => 'manzanas',
        'precio' => 30.25
        );
    
        foreach ($articulo as $clave => $valor) {
            echo 'Para la clave :' . $clave . " almacena el valor: " . $valor;
            echo "<br>";
        }
        ?> 
        <br>
        <form action="pagina2.php" method="post">
            Ingrese primer valor:
            <input type="text" name="valor1">
            <br>
            Ingrese segundo valor:
            <input type="text" name="valor2">
            <br>
            Ingrese tercer valor:
            <input type="text" name="valor3">
            <br>
            Ingrese cuarto valor:
            <input type="text" name="valor4">
            <br>
            Ingrese quinto valor:
            <input type="text" name="valor5">
            <br>
            <input type="submit">
        </form>
  
    <!-- 2.8 -->

        <!--<?php
        function mostrartitulo($men)
        {
            echo "<h1 style=\"text-align:center\">";
            echo $men;
            echo "</h1>";
        }
        mostrartitulo("Primer titulo");
        echo "<br>";
        mostrartitulo("Segundo segundo");

        function retornarpromedio($valor1, $valor2)
        {
          $pro = $valor1 / $valor2;
          return $pro;
        }
        $v1 = 100;
        $v2 = 50;
        $p = retornarpromedio($v1, $v2);
        echo $p;
    
         ?>-->
         <br>    
         <form action="pagina2.php" method="post">
             ingresa tu nombre:
            <input type="text" name="nombre ">
            <br>
            ingesa tu contrseña:
            <input type="text" name="contraseña">
            <br>
            Repide tu contraseña:
            <input type="text" name="contraseñaRep">
            <br>
            <input type="submit" value="Evaluar">
        </form>
    

</body>
</html>