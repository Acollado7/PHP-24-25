<h1>Datos recogidos</h1>
    <?php

        echo "<p><strong>Nombre: </strong>".$_POST["nombre"]."</p>";
        echo "<p><strong>Apellidos: </strong>".$_POST["apellidos"]."</p>";
        echo "<p><strong>Contraseña: </strong>"($_POST["clave"])."</p>";
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