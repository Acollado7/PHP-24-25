<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 1</title>
</head>

<body>
    <h1>Rellena tu CV</h1>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre</label>
        <br>
        <input type="text" name="nombre" id="nombre">
        <br>
        <label for="apellidos">Apellidos</label>
        <br>
        <input type="text" name="apellidos" id="apellidos">
        <br>
        <label for="contraseña">Contraseña</label>
        <br>
        <input type="password" name="contra" id="contra">
        <br>
        <label for="dni">DNI</label>
        <br>
        <input type="text" name="dni" id="dni">
        <br>
        <label for="sexo">Sexo</label>
        <br>
        <input type="radio" name="hombre" id="hombre"><label for="hombre">Hombre</label>
        <br>
        <input type="radio" name="mujer" id="mujer"><label for="mujer">Mujer</label>
        <br>
        <label for="archivo">Incluir mi foto:</label><input type="file" name="archivo" id="archivo">
        <br>
        <label for="nacido">Nacido en: </label>
        <select name="nacido" id="nacido">
            <option value="malaga" selected>Malaga</option>
            <option value="istan">Istan</option>
            <option value="ojen">Ojen</option>
        </select>
        <br>
        <label for="comentarios">Comentarios: </label><textarea name="comentarios" id="comentarios"></textarea>
        <br>
        <input type="checkbox" name="sub" id="sub" checked><label for="sub">Subscribirse al boletin de Novedades</label>
        <br>
        <button type="submit" name="btn_guardar_cambios" id="btn_guardar_cambios">Guardar Cambios</button>
        <button type="submit" name="btn_borrar" id="btn_borrar">Borrar los datos introducidos</button>



    </form>

</body>

</html>