<?php

if (!isset($_POST["btn_guardar_cambios"])) {
    header("Location:index.php");
        exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recogida de datos </title>
</head>
<body>
    <h1>Datos recogidos</h1>
    <?php

        echo "<p><strong>Nombre: </strong>".$_POST["nombre"]."</p>";
        echo "<p><strong>Apellidos: </strong>".$_POST["apellidos"]."</p>";
        echo "<p><strong>Contraseña: </strong>".md5($_POST["clave"])."</p>";
        echo "<p><strong>DNI: </strong>".$_POST["dni"]."</p>";
        echo "<p><strong>Sexo: </strong>";
        if (isset($_POST["sexo"])) {
            echo $_POST["sexo"];
        }
        
        echo "</p>";
        echo "<p><strong>Nacido en: </strong>".$_POST["nacido"]."</p>";
        echo "<p><strong>Comentarios: </strong>".$_POST["comentarios"]."</p>";
        echo "<p><strong>Subscribirse: </strong>";
        if (isset($_POST["sub"])) {
            echo "si";
        }else{
            echo "no";
        }
        echo "</p>";

    ?>
    
</body>
</html>