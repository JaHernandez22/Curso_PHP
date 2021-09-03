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
        copy($_FILES['foto']['tmp_name'], $_FILES['foto']['name']);
        echo "La foto se registro en el servidor.<br>";
        $nom = $_FILES['foto']['name'];
        echo "<img src=\"$nom\">";
    */

    if ($_FILES['foto1']['tmp_name'] != "") {
        copy($_FILES['foto1']['tmp_name'], $_FILES['foto1']['name']);
        $nom = $_FILES['foto1']['name'];
        echo "<img src=\"$nom\">";
    }
    if ($_FILES['foto2']['tmp_name'] != "") {
        copy($_FILES['foto2']['tmp_name'], $_FILES['foto2']['name']);
        $nom = $_FILES['foto2']['name'];
        echo "<img src=\"$nom\">";
    }
    if ($_FILES['foto3']['tmp_name'] != "") {
        copy($_FILES['foto3']['tmp_name'], $_FILES['foto3']['name']);
        $nom = $_FILES['foto3']['name'];
        echo "<img src=\"$nom\">";
    }
    ?>
</body>
</html>