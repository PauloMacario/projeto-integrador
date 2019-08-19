<?php

class Conexao
{
    public static function conectar()
    {
        $conexao = new PDO('mysql:dbname=db_paginas_do_bem;host=localhost', 'root', 'root');
       
        return $conexao;
    }
}
