<?php 
if (isset($_POST["btnEnviar"])) {
    
    $error_nombre = $_POST["nombre"]== "";
    $error_sexo = !isset($_POST["sexo"]);

    $errores_form = $error_nombre || $error_sexo;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pract_2</title>
    <style>.error{
        color:red;
    }</style>
</head>
<body>
<?php
   if(isset($_POST["btnEnviar"]) && !$errores_form)
   {
      require "vistas/vista_recogida.php";
   }
   else
   {
      require "vistas/vista_formulario.php";
   }
?>
</body>
</html>