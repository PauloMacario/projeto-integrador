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

   
    public function salvarOng(Request $request)
    {
        $arquivo = $request->file('imagem');
      
       


        $nomePasta = 'perfil';
        $arquivo->storePublicly($nomePasta);
        $caminhoAbs = public_path() . "/storage/$nomePasta";
        $nomeArquivo = rand(000,999).$arquivo->getClientOriginalName();
        $caminhoRel = "storage/$nomePasta/$nomeArquivo";
        $arquivo->move($caminhoAbs, $nomeArquivo);

            $registro = Ong::create([
            'name' => $request->input('nome'),
            'segment' => $request->input('segmento'),
            'description' => $request->input('descricao'),
            'address' => $request->input('endereco'),
            'district' => $request->input('bairro'),
            'city' => $request->input('cidade'),
            'image' => $caminhoRel
             ]);

        

        
      
                return redirect('ongs');
       
      
      
    }

}
