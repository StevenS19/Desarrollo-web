<?php

    include("db.php");

    if(isset($_POST['Register'])){
    
        if(strlen($_POST['Nombre']) >= 1 && strlen($_POST['Correo']) >= 1 && strlen($_POST['Clave']) >=1) {
            $Nombre= trim($_POST['Nombre']);
            $Correo = trim($_POST['Correo']);
            $fecha_reg=date("d/m/y");
            $Clave=trim($_POST['Clave']);
    
            $consulta="INSERT INTO usuario(Nombre, Correo, fecha_reg, Clave) VALUES ('$Nombre','$Correo','$fecha_reg','$Clave')";
            $resultado= mysqli_query($conex,$consulta);
    
            if($resultado){
                ?>
                <link rel="stylesheet" href="Notificaciones.css">
                <h2>Registrado correctamente</h2>
                <?php
            }else{
                ?>
                <link rel="stylesheet" href="Notificaciones.css">
                <h2>No se registro correctamente</h2>
                <?php
            }
        }   else{    
                ?>
                <link rel="stylesheet" href="Notificaciones.css">
                <h2>Llenar campos</h2>
                <?php
        }
    } 
   
?>