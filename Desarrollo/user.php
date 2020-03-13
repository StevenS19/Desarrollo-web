<?php

    include ('db2.php');
    
class user extends DB{

    private $Correo;
    private $Clave;

    public function userExists($Correo, $Clave){

        $query = $this->conex()->prepare('Select * from usuario where Correo = :Correo and Clave = :Clave');
        $query->execute(['Correo'=> $Correo, 'Clave'=> $Clave]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($Correo){
        $query = $this->conex()->prepare('Select * from usuario where Correo = Correo');
        $query->execute(['Correo' => $Correo]);

        foreach($query as $currentUser){
            $this->Correo=$currentUser['Correo'];
        }
    }

    public function getCorreo(){
        return $this->Correo;
    }

}

?>