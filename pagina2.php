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
    <?php
    /*$contenedor = "0";
    if (isset($_REQUEST['check1'])) {
        $contenedor++;
    }
    if (isset($_REQUEST['check2'])) {
        $contenedor++;
    }
    if (isset($_REQUEST['check3'])) {
        $contenedor++;
    }
    if (isset($_REQUEST['check4'])) {
        $contenedor++;
    }
    echo $_REQUEST['nombre'];
    echo "<br>";
    echo "Practica $contenedor";
    echo "<br>";*/
   
// 2.2 
   /* echo $_REQUEST['nombre'];
    echo "<br>";
    if ($_REQUEST['operacion'] == "opcion3") {
        echo "Necesita pagar impuestos...";
    } 
    */
// 2.3 
    /*echo "El curriculum: " . $_REQUEST['curriculum'];*/
//2.4
    /*$dias[] = "Lunes";
    $dias[] = "Martes";
    $dias[] = "Miercoles";
    $dias[] = "Jueves";
    $dias[] = "Viernes";
    $dias[] = "Sabado";
    $dias[] = "domingo";
    
    echo "Primer elemento del Vector:  $dias[0]";
    echo "<br>";
    echo "Ultimo elemento del Vector:  $dias[6]";
    */

//2.5

    /*$ar = fopen("datos.txt", "a") or
    die("Problemas en la creacion");
    fputs($ar, $_REQUEST['nombre']);
    fputs($ar, "\n");
    fputs($ar, $_REQUEST['direccion']);
    fputs($ar, "\n");
    if (isset($_REQUEST['jamonYqueso'])) {
        fputs($ar, "Jamon y Queso");
    }
    fputs($ar, "\n");
    fputs($ar, $_REQUEST['cantDJamon']);
    fputs($ar, "\n");
    if (isset($_REQUEST['napolitana'])) {
        fputs($ar, "Napolitana");
    }
    fputs($ar, "\n");
    fputs($ar, $_REQUEST['cantNapolitana']);
    fputs($ar, "\n");
    if (isset($_REQUEST['muzzarella'])) {
        fputs($ar, "Muzzarella");
    }
    fputs($ar, "\n");
    fputs($ar, $_REQUEST['cantDMuzzarella']);
    fputs($ar, "\n");
    fputs($ar, "--------------------------------------------------------");
    fputs($ar, "\n");
    fclose($ar);
    echo "Los datos se cargaron correctamente.";*/

// 2.7

   /* $suma = 0;
    foreach ($_REQUEST as $clave => $valor) {
    echo "Valor: " . $valor;
    echo "<br>";
    $suma = $suma + $valor;
    }
    echo "La suma es: " . $suma;*/
    /*
    $clave['ana'] = "abc123";
    $clave['luis'] = "z67yui";
    $clave['carlos'] = "sdf3sdf";
    $clave['laura'] = "dsf3k32";
    $clave['pedro'] = "axldds23";
  
    echo "La clave de luis es:" . $clave['luis'];
    */
// 2.8

    function evaluarContraseña($contraseña1, $contraseña2){
        if($contraseña1 == $contraseña2){
            echo "Las contraseñas son iguales";
        }
        else{
            echo "Las contraseñas ingresadas son diferentes!";
        }
    }
    evaluarContraseña($_REQUEST['contraseña'], $_REQUEST['contraseñaRep']);

    
    ?>
</body>
</html>