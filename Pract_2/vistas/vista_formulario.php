
<form action="index.php" method="post" enctype="multipart/form-data">

<h1>Esta es mi super página</h1>
        <p>
            <label for="nombre">Nombre</label><br/>
            <input type="text" name="nombre" id="nombre" value="<?php if(isset($_POST["nombre"])) echo $_POST["nombre"];?>" placeholder="Teclee su Nombre"/>
            <?php
            if(isset($_POST["btnEnviar"])&& $error_nombre)
              echo "<span class='error'> * Campo Vacío *</span>";
            ?>
         </p>
         <p>
            <label for="nacido">Nacido en: </label>
            <select name="nacido" id="nacido">
               <option <?php if(isset($_POST["nacido"]) && $_POST["nacido"]=="Málaga") echo "selected";?> value="Málaga">Málaga</option>
               <option <?php if(isset($_POST["nacido"]) && $_POST["nacido"]=="Almería") echo "selected";?> value="Almería">Almería</option>
               <option <?php if(isset($_POST["nacido"]) && $_POST["nacido"]=="Granada") echo "selected";?> value="Granada">Granada</option>
            </select>
         </p>
         <p>
            Sexo: 
            <input type="radio" name="sexo" id="hombre" <?php if(isset($_POST["sexo"]) && $_POST["sexo"]=="hombre") echo "checked";?> value="hombre"/><label for="hombre">Hombre</label>
            <input type="radio" name="sexo" id="mujer" <?php if(isset($_POST["sexo"]) && $_POST["sexo"]=="mujer") echo "checked";?> value="mujer"/><label for="mujer">Mujer</label>
            <?php
            if(isset($_POST["btnEnviar"])&& $error_sexo)
               echo "<span class='error'> * Debes elegir un sexo *</span>";
            ?>
         </p>
         <p>
            Aficiones:
            <label for="deportes">Deportes</label><input type="checkbox" name="deportes" >
            <label for="lectura">Lectura</label><input type="checkbox" name="lectura" >
            <label for="otros">Otros</label><input type="checkbox" name="otros" >
         </p>
         <p>
            <label for="comentarios">Comentarios</label>
            <textarea name="comentarios" id="comentarios" ><?php if(isset($_POST["comentarios"])) echo $_POST["comentarios"];?></textarea>
            
         </p>
         <p>
            <input type="submit" value="Guardar Cambios" name="btnEnviar"/>  
         </p>


</form>
