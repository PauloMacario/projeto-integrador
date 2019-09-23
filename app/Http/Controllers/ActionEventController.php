<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Imagem;
use App\Ong;
use App\OngHasUser;
use App\ActionEvent;
use App\Segment;

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

    public function allEvents($id)
    {

        $ongEventos = ActionEvent::all()->where('id_ong', '=', $id);
        return $ongEventos;
    }





    public function adicionarEvento($id2)
    {
        $segmentos = Segment::all();
        $ong = Ong::find($id2);
        return view('novoEvento', compact('segmentos', 'ong'));
    }


    // Salva o Evento
    public function salvarEvento(Request $request)
    {

        $user = $request->input('id');
        $ong = $request->input('id2');

        $verifica = OngHasUser::all()->where('id_user', '=', $user)
                                ->where('id_ong', '=', $ong)
                                ->where('permission_level', '=', 1);

        if(count($verifica) <= 0){
            $error = 'erro';
            return redirect('home/')->with('error', $error);
        }else{


        $arquivo = $request->file('imagem');

            if($arquivo == NULL){
                $path = '';
            }else{
                $pasta = 'perfil-evento';
                $path = Imagem::criarCaminhoImagem($arquivo, $pasta);
            }
        // Salva evento no banco
            ActionEvent::create([
                'title' => $request->input('titulo'),
                'description' => $request->input('descricao'),
                'address' => $request->input('endereco'),
                'segment' => $request->input('segmento'),
                'district' => $request->input('bairro'),
                'city' => $request->input('cidade'),
                'uf' => $request->input('uf'),
                'date' => $request->input('data'),
                'id_ong' => $ong,
                'image' => $path
            ]);

            $evento = ActionEvent::all()->last();





            return redirect('evento/'. $evento->id);

            }
    }

}
