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
    // Problema 1.3
        echo "Hola mundo!";
        echo "<br>";
        echo "¿Como estas?";
        echo "<br>";
    
    // Problema 1.4
        echo"<br>";
        $numero = rand(1,100);
        if($numero <= 50){
            echo "el valor es menor a 50 " .$numero;
        }
        else{
            echo "el valor es mayor a 50 " . $numero;
        }
        echo"<br>";
    // Problema 1.5
        echo"<br>";
        $integer = "1";
        $double = "1.0";
        $string = "Hola";
        $boolean = "true";

        echo "Este es un Integer $integer <br>";
        echo "Este es un Double $double <br>";
        echo "Este es un String $string <br>";
        echo "Este es un Boolean $boolean <br>";
        echo "<br>";

    //Problema 1.6
        echo "<br>";
        $calificacion1 = "10";
        $calificacion2 = "9";
        $calificacion3 = "8";
        echo "Tus calificaciones son las siguientes $calificacion1  $calificacion2  $calificacion3";
        echo "<br>";

    //Problema 1.7 
        echo "<br>";
        $numeroRand = rand(1,3);
        if($numeroRand == 1){
           echo "UNO = $numeroRand";
        }
        if ($numeroRand == 2) {
            echo "DOS = $numeroRand";
        }
        if($numeroRand == 3) {
            echo "TRES = $numeroRand";
        }
        echo "<br>";

    //Problema 1.8
        echo "<br>";
        for($i = 1 ; $i <= 10 ; $i++){
            echo (2*$i). " - ";
        }
        $j = "1";
        echo "<br>";
        while($j <= 10){
            echo (2*$j). " - ";
            $j++;
        }
        echo "<br>";
        $j = "1";
        do{
            echo (2*$j). " - ";
            $j++;
        }while($j <= 10);
        echo "<br>";
     ?>
 
    <!--1.9-->
     <?php
        /*echo "<br>";
        echo $_REQUEST['nombre'];
        echo "<br>";
        if( $_REQUEST['edad'] >= 18){

            echo "Es mayor de edad ". $_REQUEST['edad'];
        }
        else{

            echo "Es mayor de edad ". $_REQUEST['edad'];  
        }
        echo "<br>";*/
    
    // 1.10
        echo "<br>";
        echo $_REQUEST['nombre'];
        if ($_REQUEST['radio1'] == "No tiene estudios") {
            echo "<br>";
            echo $_REQUEST['radio1'];
        } 
        if ($_REQUEST['radio1'] == "Estudios primarios") {
            echo "<br>";
            echo $_REQUEST['radio1'];
        }
        if ($_REQUEST['radio1'] == "Estudios secundarios") {
            echo "<br>";
            echo $_REQUEST['radio1'];
        }

    ?> 


        
   
</body>
</html>
<head></head>