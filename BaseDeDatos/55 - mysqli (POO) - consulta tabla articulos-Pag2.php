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
       $mysql = new mysqli("localhost", "root", "", "base1");
        if ($mysql->connect_error)
            die("Problemas con la conexión a la base de datos");

        $registros = $mysql->query("select ar.descripcion as descripcionart,
                                            precio,
                                            ru.descripcion as descripcionrub 
                                        from articulos as ar
                                        inner join rubros as ru on ru.codigo=ar.codigorubro
                                        where ar.codigo=$_REQUEST[codigo]") or
            die($mysql->error);

        if ($reg = $registros->fetch_array()) {
            echo 'Descripción:' . $reg['descripcionart'] . '<br>';
            echo 'Precio:' . $reg['precio'] . '<br>';
            echo 'Rubro:' . $reg['descripcionrub'] . '<br>';
        } else
            echo 'No existe un artículo con dicho código';

        $mysql->close();
        */

     
        $mysql = new mysqli("localhost", "root", "", "base1");
        if ($mysql->connect_error)
          die("Problemas con la conexión a la base de datos");
      
        $registro = $mysql->query("select ar.codigo as codigoart,
                                           precio,
                                           ru.descripcion as descripcionrub 
                                        from articulos as ar
                                        inner join rubros as ru on ru.codigo=ar.codigorubro
                                        where ar.descripcion='$_REQUEST[descripcion]'") or
          die($mysql->error);
      
        if ($reg = $registro->fetch_array()) {
          echo 'Código:' . $reg['codigoart'] . '<br>';
          echo 'Precio:' . $reg['precio'] . '<br>';
          echo 'Rubro:' . $reg['descripcionrub'] . '<br>';
        } else
          echo 'No existe un artículo con dicha descripción';
      
        $mysql->close();

    ?>
</body>
</html>