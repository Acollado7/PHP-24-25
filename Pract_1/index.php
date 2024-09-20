<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 1</title>
</head>

<body>
    <h1>Rellena tu CV</h1>
    <form action="recogida_datos.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="nombre">Nombre</label>
        <br>
            <input type="text" name="nombre" id="nombre">
        </p>
        <p>
            <label for="apellidos">Apellidos</label>
        <br>
            <input type="text" name="apellidos" id="apellidos">
</p>
<p>   <label for="clave">Contraseña</label>
        <br>
            <input type="password" name="clave" id="clave"></p>
      <p>      <label for="dni">DNI</label>
        <br>
            <input type="text" name="dni" id="dni"></p>
      
        <p>
        Sexo
        <br>
            <input type="radio" name="sexo" id="hombre" value="hombre">
            <label for="hombre">Hombre</label>
        <br>
            <input type="radio" name="sexo" id="mujer" value="mujer">
            <label for="mujer">Mujer</label>
        </p>
        <p><label for="archivo">Incluir mi foto:</label>
        <input type="file" name="archivo" id="archivo" accept="image/*"></p>
<p><label for="nacido">Nacido en: </label>
                <select name="nacido" id="nacido">
                    <option value="malaga" selected>Malaga</option>
                    <option value="istan">Istan</option>
                    <option value="ojen">Ojen</option>
                </select></p>
            <p><label for="comentarios">Comentarios: </label>
            <textarea name="comentarios" id="comentarios"></textarea></p>
            
<p>  <input type="checkbox" name="sub" id="sub" checked>
<label for="sub">Subscribirse al boletin de Novedades</label></p>
          

            <button type="submit" name="btn_guardar_cambios" id="btn_guardar_cambios">Guardar Cambios</button>
            <button type="reset" name="btn_borrar" id="btn_borrar">Borrar los datos introducidos</button>



    </form>

</body>

</html>