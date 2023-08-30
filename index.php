<!DOCTYPE html>
<?php include('conexion.php');?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento2</title>
    <link rel="stylesheet" type="text/css" href="estilo.css"></link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <h1>Contacto</h1>
    <hr>
    <form action="store.php" method="POST">
        <h3>Nombre</h3>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        <hr>
        <h3>Correo</h3>
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" placeholder="Correo electrónico">
        <hr>
        <h3>Genero</h3>
            <label for="genero">Genero:</label>
        <br>
            <label for="masculino">
            <input type="radio" id="masculino" name="genero" value="masculino">Masculino</label>
        <br>
            <label for="femenino">
            <input type="radio" id="femenino" name="genero" value="femenino">Femenino</label>
        <br>
            <label for="otro">
            <input type="radio" id="otro" name="genero" value="otro">Otro</label>
        <br>
            <label for="especifique">Especifique:</label>
            <input type="text" id="especifique" name="especifique" placeholder="Especifique su género">
        <br>
        <hr>
        <h3>Contraseña</h3>
            <label for="contraseña">Contraseña:
            <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" pattern=".{6,}"> <em><strong>No se permiten menos de seis caracteres</strong></em> </label>    
        <hr>
        <h3>Comentarios</h3>
            <label for="comentarios">Comentarios:</label>
        <br>
            <textarea id="comentarios" name="comentarios" placeholder="Comentarios" rows="3" cols="40"></textarea>
        <br>
        <hr>
        <h3>Ciudad</h3>
            <label for="ciudad">Seleccione una ciudad:</label>
            <select name="ciudad" id="ciudad">
            <option value="" disabled selected>Selecciona una opción</option>
            <option value="Guadalajara">Guadalajara</option>
            <option value="Zapopan">Zapopan</option>
            <option value="Tonalá">Tonalá</option>
            <option value="Otra">Otra</option>
            </select>
        <hr>
        <h3>Me interesa contratarte</h3>
            <label for="interesa">Me interesa contratarte:</label>
            <input type="checkbox" name="interesa" value="interesa">
        <hr>
        <h3>Enviar</h3>
            <label for="enviar">Enviar:</label>
            <input type="submit" id="enviar" name="enviar">
    </form>
    <div class="derechos">
        <p><strong>&copy; 2023 Yahir Velázquez Dueñas. Todos los derechos reservados.</strong></p>
    </div>
    <?php
    $sql = "SELECT * FROM aspirante";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo "Hola";

    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    echo "<ul>";
    foreach ($stmt->fetchAll() as $row) {
        echo "<li>"." - "."El nombre es: ".$row['Nombre']."</li>"."<br>";
        echo "<li>"." - "."El correo es: ".$row['Correo']."</li>"."<br>";
        echo "<li>"." - "."El genero es: ".$row['Genero']."</li>"."<br>";
        echo "<li>"." - "."La contraseña es: ".$row['Contrasena']."</li>"."<br>";
        echo "<li>"." - "."Los comentarios son: ".$row['Comentario']."</li>"."<br>";
        echo "<li>"." - "."La ciudad es: ".$row['Ciudad']."</li>"."<br>";
        echo "<li>"." - "."¿Me interesa o no?: ".$row['Intereses']."</li>"."<br>";
        echo "<hr>"."<h2>"."Siguiente Formulario"."</h2>"."<br>"."<br>";
    }
    echo "</ul>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>