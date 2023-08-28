<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta_al_formulario</title>
    <link rel="stylesheet" type="text/css" href="estilo.css"></link>
</head>
<body>
    <?php
    $texto = "Datos del Formulario";
    $textofinal = "<h1>".$texto."</h1>";
    echo $textofinal;
    echo "<hr>";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["nombre"])) {
            echo "<h2>".$nombrecom = "No se puso un nombre"."</h2>";
        } else {
            echo "<h4>"."El nombre es: ".$_POST["nombre"]."</h4>";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["correo"])) {
            echo "<h2>".$correocom = "No se puso un correo"."</h2>";
        } else {
            echo "<h4>"."El correo es: ".$_POST["correo"]."</h4>";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["genero"])) {
            echo "<h2>".$generocom = "No se seleccionó un genero"."</h2>";
        } else {
            echo "<h4>"."El genero es es: ".$_POST["genero"]."</h4>";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["contraseña"])) {
            echo "<h2>".$contracom = "No se puso una contraseña"."</h2>";
        } else {
            echo "<h4>"."La contraseña es: ".$_POST["contraseña"]."</h4>";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["comentarios"])) {
            echo "<h2>".$comentarioscom = "No se pusieron comentarios"."</h2>";
        } else {
            echo "<h4>"."Los comentarios son: ".$_POST["comentarios"]."</h4>";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["ciudad"])) {
            echo "<h2>".$ciudadcom = "No se seleccionó una ciudad"."</h2>";
        } else {
            echo "<h4>"."La ciudad es: ".$_POST["ciudad"]."</h4>";
        }
    }  
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["interesa"])) {
            echo "<h2>".$interesacom = "No me interesa"."</h2>";
        } else {
            echo "<h4>"."Si me ".$_POST["interesa"]."</h4>";
        }
    }
    include('conexion.php');    
    ?>
</body>
</html>