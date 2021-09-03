<?php
/*
    $ancho=100;
    $alto=30;
    $imagen=imageCreate($ancho,$alto);
    $amarillo=ImageColorAllocate($imagen,255,255,0);
    ImageFill($imagen,0,0,$amarillo);
    $rojo=ImageColorAllocate($imagen,255,0,0);
    $valoraleatorio=rand(100000,999999);
    ImageString($imagen,5,25,5,$valoraleatorio,$rojo);
    for($c=0;$c<=5;$c++)
    {
    $x1=rand(0,$ancho);
    $y1=rand(0,$alto);
    $x2=rand(0,$ancho);
    $y2=rand(0,$alto);
    ImageLine($imagen,$x1,$y1,$x2,$y2,$rojo);
    }
    Header ("Content-type: image/jpeg");
    ImageJPEG ($imagen);
    ImageDestroy($imagen);
*/

    $ancho=100;
    $alto=30;
    $imagen=imageCreate($ancho,$alto);
    $grisoscuro=ImageColorAllocate($imagen,100,100,100);
    ImageFill($imagen,0,0,$grisoscuro);  
    $grisclaro=ImageColorAllocate($imagen,200,200,200);
    ImageFilledRectangle($imagen,5,5,95,25,$grisclaro);
    $rojo=ImageColorAllocate($imagen,200,0,0);  
    ImageString($imagen,10,10,5,"Boton 1",$rojo);  
    Header ("Content-type: image/jpeg");
    ImageJPEG ($imagen);
    ImageDestroy($imagen);
    
?>
