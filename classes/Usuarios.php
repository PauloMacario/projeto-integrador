<?php



class Usuarios
{

    private $nome;
    private $email;
    private $nivel;

    public function __construct()
    {
       
       
    }

    function getNome()
    {
        return $this->nome;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
        /* Validar  */
    }

    function getEmail()
    {
        return $this->email;
    }

    function setEmail($email)
    {
        $this->email = $email;
        /* Validar  */
    }

    function getNivel()
    {
        return $this->nivel;
    }

    function setNivel($nivel)
    {
        $this->nivel = $nivel;
        /* Validar  */
    }

    

   

}