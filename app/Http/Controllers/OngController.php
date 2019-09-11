<?php

namespace App\Http\Controllers;

use App\Ong;
use Illuminate\Http\Request;
use App\Http\Controllers\Imagem;

class OngController extends Controller
{
   // Busca todas as ongs cadastradas e redireciona para view ongs
    public function index()
    {
       $ongs = Ong::all();       
       return view('ongs')->with('ongs', $ongs);
    }

    // Redireciona para o form de cadastro de Ong
    public function adicionarOng()
    {
        return view('adicionarOng');
    }
    
     // Salva a Ong 
    public function salvarOng(Request $request)
    {
        $arquivo = $request->file('imagem');
       
        if($arquivo == NULL){
            $path = '';
        }else{
            $pasta = 'perfil';
            $path = Imagem::criarCaminhoImagem($arquivo, $pasta);
        }
       
        Ong::create([
            'name' => $request->input('nome'),
            'segment' => $request->input('segmento'),
            'description' => $request->input('descricao'),
            'address' => $request->input('endereco'),
            'district' => $request->input('bairro'),
            'city' => $request->input('cidade'),
            'avatar' => $path
        ]);    

        
      
        return redirect('home');
       
      
      
    }

}
