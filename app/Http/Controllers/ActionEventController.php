<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActionEvent;

class ActionEventController extends Controller
{
    public function index()
    {
       $eventos = ActionEvent::all();       
       return view('eventos')->with('eventos', $eventos);
    }
}