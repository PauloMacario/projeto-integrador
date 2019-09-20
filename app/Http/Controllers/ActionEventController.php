<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ong;
use App\ActionEvent;

class ActionEventController extends Controller
{
    public function index()
    {
       $eventos = ActionEvent::all();       
       return view('eventos')->with('eventos', $eventos);
    }

    public function listaEvento($id)
    {
        
        $evento = ActionEvent::find($id);
        $idOng = $evento->id_ong;
        $ong = Ong::find($idOng);

        return view('homeEventos', compact('evento', 'ong'));
    }

    public function adicionarEvento(){

        $permission = OngHasUser::('permission_level')->where('permission_level', '=', 1);
        return view('novoEvento');
    }

         // Salva o Evento 
         public function salvarEvento(Request $request, $id)
         {
     
             //$user = Ong::find($id); 
             $arquivo = $request->file('imagem');
            
             if($arquivo == NULL){
                 $path = '';
             }else{
                 $pasta = 'perfil-eventos';
                 $path = Imagem::criarCaminhoImagem($arquivo, $pasta);
             }
            // Salva evento no banco
             ActionEvent::create([
                 'title' => $request->input('title'),
                 'description' => $request->input('descricao'),
                 'address' => $request->input('endereco'),
                 'district' => $request->input('bairro'),
                 'city' => $request->input('cidade'),
                 'uf' => $request->input('uf'),
                 'date' => $request->input('date'),
                 'image' => $path
             ]);  
        
             return redirect('home/'); 
          
              }
             
}
