
<h1>Estos son los datos enviados</h1>
<p>El nombre enviado ha sido: <?=$_POST["nombre"]?></p>
<p>Ha nacido en: <?=$_POST["nacido"]?></p>
<p>El sexo es: <?=$_POST["sexo"]?></p>

<?php



//Aficiones

if (isset($_POST["deportes"]) && (isset($_POST["lectura"])) && (isset($_POST["otros"])))  {
    echo "<p>Las aficiones seleccionadas han sido:</p>";
    echo "<ol>";
    echo "<li>Deportes</li>";
    echo "<li>Lectura</li>";
    echo "<li>Otros</li>";
    echo "</ol>";
}else if (isset($_POST["deportes"]) && (isset($_POST["lectura"])) && !isset($_POST["otros"])) {
    echo "<p>La aficiones seleccionada ha sido:</p>";
    echo "<ol>";
    echo "<li>Deportes</li>";
    echo "<li>Lectura</li>";
    echo "</ol>";
}elseif(isset($_POST["deportes"]) && (isset($_POST["otros"])) && !isset($_POST["lectura"])) {
    echo "<p>La aficiones seleccionada ha sido:</p>";
    echo "<ol>";
    echo "<li>Deportes</li>";
    echo "<li>Otros</li>";
    echo "</ol>";
}elseif(isset($_POST["lectura"]) && (isset($_POST["otros"])) && !isset($_POST["deportes"])) {
    echo "<p>La aficiones seleccionada ha sido:</p>";
    echo "<ol>";
    echo "<li>Lectura</li>";
    echo "<li>Otros</li>";
    echo "</ol>";
}else if (isset($_POST["deportes"]) && (!isset($_POST["lectura"])) && !isset($_POST["otros"])) {
    echo "<p>La aficion seleccionada ha sido:</p>";
    echo "<ol>";
    echo "<li>Deportes</li>";
    echo "</ol>";

} elseif (isset($_POST["lectura"]) && (!isset($_POST["deporte"])) && !isset($_POST["otros"])){
echo "<p>La aficion seleccionada ha sido:</p>";
echo "<ol>";
echo "<li>Lectura</li>";
echo "</ol>";
} elseif(isset($_POST["otros"]) && (!isset($_POST["deporte"])) && !isset($_POST["lectura"])){
echo "<p>La aficion seleccionada ha sido:</p>";
    echo "<ol>";
    echo "<li>Otros</li>";
    echo "</ol>";
}elseif (!isset($_POST["otros"]) && (!isset($_POST["deporte"])) && !isset($_POST["lectura"])){
    echo "<p>No has seleccionado ninguna aficion</p>";
}
//comentarios
if (isset($_POST["comentarios"]) && $_POST["comentarios"]== "") {
   echo "<p>No has hecho ningun comentario:</p>";
}else{
     echo "<p>El comentario enviado ha sido: ".$_POST["comentarios"]."</p>";
}





?>