<?php

require_once("Usuarios.php");

class Ongs extends Usuarios
{
    
    
    
    
    
    public function loginOng($conexao, $email)
    {
        $login = setEmail($email);
        $sql = "SELECT * FROM ongs WHERE email = :email";
        $sql = $conexao->prepare($sql);
        $sql->bindValue(":email", $login);
        $sql->execute();
        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
    }    
}    

