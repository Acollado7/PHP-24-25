<h1>Rellena tu CV</h1>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <p>
            <label for="nombre">Nombre</label>
        <br>
            <input type="text" name="nombre" id="nombre" value="<?php
            if (isset($_POST["nombre"])) {
                echo $_POST("nombre");
            }
            ?>">
            <?php if (isset($_POST["btn_guardar_cambios"])&& $error_nombre) {
                echo "<span class='error'>campo vacio</span>";
            } ?>
        </p>
        <p>
            <label for="apellidos">Apellidos</label>
        <br>
            <input type="text" name="apellidos" id="apellidos" value="<?php
            if (isset($_POST["apellidos"])) {
                echo $_POST("apellidos");
            }
            ?>">
            <?php if (isset($_POST["btn_guardar_cambios"])&& $error_apellidos) {
                echo "<span class='error'>campo vacio</span>";
            } ?>
</p>
<p>   <label for="clave">Contraseña</label>
        <br>
            <input type="password" name="clave" id="clave">
            <?php if (isset($_POST["btn_guardar_cambios"])&& $error_clave) {
                echo "<span class='error'>campo vacio</span>";
            } ?>
        </p>
      <p>      <label for="dni">DNI</label>
        <br>
            <input type="text" name="dni" id="dni" value="<?php
            if (isset($_POST["dni"])) {
                echo $_POST("dni");
            }
            ?>">
            <?php if (isset($_POST["btn_guardar_cambios"])&& $error_dni) {
                echo "<span class='error'>campo vacio</span>";
            } ?>
        </p>
      
        <p>
        Sexo
        <br>
            <input type="radio" name="sexo" id="hombre" value="hombre">
            <label for="hombre">Hombre</label>
        <br>
            <input type="radio" name="sexo" id="mujer" value="mujer">
            <label for="mujer">Mujer</label>
            <?php if (isset($_POST["btn_guardar_cambios"])&& $error_sexo) {
                echo "<span class='error'>debes elegir un sexo</span>";
            } ?>
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
            <textarea name="comentarios" id="comentarios" value="<?php
            if (isset($_POST["comentarios"])) {
                echo $_POST("comentarios");
            }
            ?>"></textarea>
            <?php if (isset($_POST["btn_guardar_cambios"])&& $error_comentarios) {
                echo "<span class='error'>campo vacio</span>";
            } ?>
        </p>
            
<p>  <input type="checkbox" name="sub" id="sub" checked>
<label for="sub">Subscribirse al boletin de Novedades</label></p>
          

            <button type="submit" name="btn_guardar_cambios" >Guardar Cambios</button>
            <button type="reset" name="btn_borrar" >Borrar los datos introducidos</button>



    </form>
