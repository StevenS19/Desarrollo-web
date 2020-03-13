<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sing in</title>
    <link rel="stylesheet" href="estilosL.css">
    
</head>
<body>
    <form class="formulario" method="POST">
        <h1>Registrate</h1>
        <div class="contenedor">
        <div class="input-contenedor">
            <i class="fas fa-user-alt icon"></i>
            <input type="text" name="Nombre" placeholder="Nombre Completo">
        </div>

        <div class="input-contenedor">
            <i class="far fa-envelope icon"></i>
            <input type="email" name="Correo" placeholder="Correo">
        </div>

        <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" name="Clave" placeholder="Contraseña">
        </div>

        <input type="submit" name="Register" value="Registrate" class="button">
        <p>Al registrarte, aceptas nuestras condiciones de uso y política de privacidad</p>
        <p>¿Ya tienes cuenta?<a class="link" href="http://localhost/Desarrollo/login.php">Iniciar Sesion</a></p>

</div>
</form>

<?php
include("registrar.php");

?>


<script src="https://kit.fontawesome.com/bf8cf2da55.js" crossorigin="anonymous"></script>
</body>
</html>

