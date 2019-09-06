<?php

namespace App\Http\Controllers;

use App\Ong;
use Illuminate\Http\Request;

class OngController extends Controller
{
   
    public function index()
    {
       $ongs = Ong::all();
       
       return view('ongs')->with('ongs', $ongs);
    }

    public function adicionarOng()
    {
        return view('restrito.adicionarOng');
    }

   
    public function salvarOng(Request $request, Imagem $imagem)
    {
        $arquivo = $request->file('imagem');
        $pasta = 'perfil';
        if (empty($arquivo)) {
            abort(400, 'Nenhum arquivo foi enviado');
        } 
       
        $path = $imagem->criarCaminhoImagem($arquivo, $pasta);   

       /*  $nomePasta = 'perfil';
        $arquivo->storePublicly($nomePasta);
        $caminhoAbs = public_path() . "/storage/$nomePasta";
        $nomeArquivo = rand(000,999).$arquivo->getClientOriginalName();
        $caminhoRel = "storage/$nomePasta/$nomeArquivo";
        $arquivo->move($caminhoAbs, $nomeArquivo); */

        Ong::create([
            'name' => $request->input('nome'),
            'segment' => $request->input('segmento'),
            'description' => $request->input('descricao'),
            'address' => $request->input('endereco'),
            'district' => $request->input('bairro'),
            'city' => $request->input('cidade'),
            'image' => $path
        ]);    

        
      
        return redirect('ongs');
       
      
      
    }

}
