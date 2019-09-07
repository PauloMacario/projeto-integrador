<?php

namespace App\Http\Controllers;

class Imagem extends Controller
    {
    public function criarCaminhoImagem($arquivo, $pasta)
    {

        if($arquivo == NULL){
            $arquivo = 'images/avatar-default.png';
        }
        
        $arquivo->storePublicly($pasta);
        $nomeArquivo = rand(000,999).$arquivo->getClientOriginalName();       
        $caminhoAbs  = public_path() . "/storage/$pasta";
        $caminhoRel  = "storage/$pasta/$nomeArquivo";
        $arquivo->move($caminhoAbs, $nomeArquivo);

        return  $caminhoRel;
    }
}

?>