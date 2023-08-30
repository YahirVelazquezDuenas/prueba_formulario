<?php
include ('conexion.php');
var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["nombre"])) {
        echo "<h2>".$nombrecom = "No se puso un nombre"."</h2>";
    } else {
        $nombre = $_POST['nombre'];
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["correo"])) {
        echo "<h2>".$correocom = "No se puso un correo"."</h2>";
    } else {
        $correo = $_POST['correo'];
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["genero"])) {
        echo "<h2>".$generocom = "No se seleccionó un genero"."</h2>";
    } else {
        $genero = $_POST['genero'];
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["contraseña"])) {
        echo "<h2>".$contracom = "No se puso una contraseña"."</h2>";
    } else {
        $contrasena = $_POST['contraseña'];
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["comentarios"])) {
        echo "<h2>".$comentarioscom = "No se pusieron comentarios"."</h2>";
    } else {
        $comentario = $_POST['comentarios'];
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["ciudad"])) {
        echo "<h2>".$ciudadcom = "No se seleccionó una ciudad"."</h2>";
    } else {
        $ciudad = $_POST['ciudad'];
    }
}  
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["interesa"])) {
        echo "<h2>".$interesacom = "No me interesa"."</h2>";
    } else {
        $intereses = $_POST['interesa'];
    }
}
$sql = "INSERT INTO aspirante (nombre, correo, genero, contrasena, comentario, ciudad, intereses)
VALUES ('$nombre','$correo', '$genero','$contrasena','$comentario','$ciudad','$intereses')";
    $conn->exec($sql);
    header('Location: index.php');
?>