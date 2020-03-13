<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilosL.css">
</head>
<body>
    <form class="formulario" method="POST">     
        <h1>Login</h1>
        <div class="contenedor">
        <div class="input-contenedor">
            <i class="far fa-envelope icon"></i>
            <input type="email" name='Correo' placeholder="Correo">
        </div>

        <div class="input-contenedor">
            <i class="fas fa-key icon"></i>
            <input type="password" name='Clave' placeholder="Contraseña">
        </div>

        <input type="submit" value="Login" class="button">
        <p>Al registrarte, aceptas nuestras condiciones de uso y política de privacidad</p>
        <p>¿No tienes cuenta?<a class="link" href="http://localhost/Desarrollo/signIn.php">Registrate</a></p>

        </div>
    </form>
<script src="https://kit.fontawesome.com/bf8cf2da55.js" crossorigin="anonymous"></script>

<?php

    include_once 'user.php';
    include_once 'user_session.php';
    

    $userSession = new UserSession();
    $Correo = new User();

    if(isset($_SESSION['Correo'])){
        echo 'Hay sesión';
    }else if(isset($_POST['Correo']) && isset($_POST['Clave'])){
        
        $userForm= $_POST['Correo'];
        $passForm= $_POST['Clave'];

        if($Correo->userExists($userForm , $passForm)){
            // echo "Usuario validado";
            header("Location: http://localhost/Desarrollo/indexlogin.php", true, 301);

        }else{
            ?>
            <link rel="stylesheet" href="Notificaciones.css">
            <h2>Nombre de usuario y/o password incorrecto</h1>
            <?php
        }

    }else{

    }

?>
</body>
</html>