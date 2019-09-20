<?php

namespace App\Http\Controllers;

use App\User;
use App\Ong;
use App\OngHasUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Imagem;

class UserController extends Controller
{
   
    

    public function  listarUp($id)
    {
        $user = User::find($id);
        $a = $user->ongs;
        return view('home')->with('user', $a);  
    }

    
  
    public function editarUser()
    {
        return view('perfilEditar');
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
        
        $request->validate([
            "nome" => "max:100 | min:3",
            "biografia" => "max:1000",
            "email" => "max:45",
            "ocupacao" => "max:50|nullable",
            "website1" => "max:100",
            "areas" => "max:255",
            "bairro" => "max:45",
            "cidade" => "max:45",
            "avatar" => "max:100"
        ]); 


        
        $user->name       = $request->input('nome');
        $user->email      = $request->input('email');
        $user->occupation = $request->input('ocupacao');
        $user->biography  = $request->input('biografia');
        $user->areas      = $request->input('areas');
        $user->district   = $request->input('bairro');
        $user->city       = $request->input('cidade');
        $user->website1   = $request->input('website1');
        $user->avatar     = $path;

        $user->save();
        
        return redirect('home/');
    }

    public function listarOngs($id){
        $user = User::find($id);
        $a = $user->ongs;
        return view('home')->with('user', $a);  
    }

 
    
    //teste do Ajax listagem de Ongs do usuario

    public function allOngs($id)
    {
        $user = User::find($id);
        $user->ongs;
        return $user;
    }

    public function allOngsAdmin($id)
    {
       $ongAdmin = User::with('ongs')->get();
        return $ongAdmin;
    }

    public function delete(Request $request)
    {
        // pega o id do usuario que esta oculto
        $userId = $request->input('identificador');
        $user = User::find($userId);
        $userOng = $user->ongs;
        $userOng = json_decode($userOng, true);


       if(count($userOng) > 0){
           $user->ongs()->delete();
        }

        $user->delete();


        return redirect('/');

    }



}
