<?php

class UserSession{

    public function _construct(){
        session_start();
    }

    public function setCurrentUser($Correo){
        $_SESSION['Correo'] = $Correo;
    }

    public function getCurrentUser(){
        return $_SESSION['Correo'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }

}


?>