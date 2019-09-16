<?php

namespace App\Http\Controllers;

use App\User;
use App\Ong;
use App\OngHasUser;

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

    public function listarOng($id)
    {
       $ongs = Ong::find($id);       
       return view('homeOng')->with('ongs', $ongs);
    }
    
    public function buscarOng($busca)
    {
        $result = Ong::where('name', 'LIKE', "%{$busca}%")->get();  
        if(count($result) <=0){
            $result = Ong::where('district', 'LIKE', "%{$busca}%")->get(); 
        }
        
        return $result;
     }
    
 
    // Redireciona para o form de cadastro de Ong
    public function adicionarOng($id)
    {
        $user = User::find($id);
        return view('novaOng')->with('user', $user);
    }
    
     // Salva a Ong 
    public function salvarOng(Request $request)
    {
        $userId =  $request->input('id');
        $arquivo = $request->file('imagem');
       
        if($arquivo == NULL){
            $path = '';
        }else{
            $pasta = 'perfil';
            $path = Imagem::criarCaminhoImagem($arquivo, $pasta);
        }
       // Salva a ong no bando
        Ong::create([
            'name' => $request->input('nome'),
            'segment' => $request->input('segmento'),
            'description' => $request->input('descricao'),
            'address' => $request->input('endereco'),
            'district' => $request->input('bairro'),
            'city' => $request->input('cidade'),
            'uf' => $request->input('uf'),
            'avatar' => $path
        ]);  
        // Vincula a ong acima cadastrada ao usuario que cadastrou e o coloca como adm    
        $ong = Ong::all() -> last();

        OngHasUser::create([
            'id_user' =>  $userId,
            'id_ong' => $ong->id,
            'permission_level' => 1
        ]);
        return redirect('home/minhas-ongs/admin');
       
      
      
    }

}
