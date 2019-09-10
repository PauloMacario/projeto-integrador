<?php

namespace App\Http\Controllers;

use App\Ong;
use Illuminate\Http\Request;
use App\Http\Controllers\Imagem;

class OngController extends Controller
{
   
    public function index()
    {
       $ongs = Ong::all();
       
       return view('ongs')->with('ongs', $ongs);
    }

    public function adicionarOng()
    {
        return view('adicionarOng');
    }

   
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
            'image' => $path
        ]);    

        
      
        return redirect('home');
       
      
      
    }

}
