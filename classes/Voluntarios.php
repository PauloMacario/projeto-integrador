<?php

class Voluntarios
{
 
    public function loginVoluntario($conexao, $usuario)
    {
       $sql = "SELECT * FROM voluntarios WHERE email =:email";
       $query = $conexao->prepare($sql);
       $query->execute([":email" => $usuario]);
       $result = $query->fetch(PDO::FETCH_ASSOC);
       return $result;
    }    
}    


