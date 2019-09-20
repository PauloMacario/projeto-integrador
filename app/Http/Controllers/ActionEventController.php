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
}
