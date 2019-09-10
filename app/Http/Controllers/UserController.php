<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Imagem;

class UserController extends Controller
{
   
    public function listarOngs($id){
        $user = User::find($id);
        $a = $user->ongs;
        return view('home')->with('user', $a);  
    }

    //teste do Ajax listagem de Ongs do usuario

    public function allOngs($id)
    {
        $user = User::find($id);
        $a = $user->ongs;
    

       return $a;

     
    }







    public function editarUser()
    {
        return view('editarPerfil');
    }

    public function  listarUp($id)
    {
        $user = User::find($id);
        $a = $user->ongs;
        return view('home')->with('user', $a);  
    }

    public function atualizarUser(Request $request, $id)
    {
        $user = User::find($id);  
        
        
        $arquivo = $request->file('imagem');
        if($arquivo == NULL){
            $path = $user->avatar;
        }else{
            $pasta = 'perfil';
            $path = Imagem::criarCaminhoImagem($arquivo, $pasta);
        }
        
        
        $user->name       = $request->input('nome');
        $user->email      = $request->input('email');
        $user->occupation = $request->input('ocupacao');
        $user->biography  = $request->input('biografia');
        $user->areas      = $request->input('areas');
        $user->district   = $request->input('bairro');
        $user->city       = $request->input('cidade');
        $user->avatar     = $path;

        $user->save();
        
        return view('home');
    }


}
