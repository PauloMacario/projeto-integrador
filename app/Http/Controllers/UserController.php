<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function editarUser()
    {
        return view('editarPerfil');
    }

    public function atualizarUser(Request $request, $id)
    {
        $user = User::find($id);       
        $arquivo = $request->file('imagem');
        $pasta = 'perfil';
        
        $user->name       = $request->input('nome');
        $user->email      = $request->input('email');
        $user->occupation = $request->input('ocupacao');
        $user->biography  = $request->input('biografia');
        $user->areas      = $request->input('areas');
        $user->district   = $request->input('bairro');
        $user->city       = $request->input('cidade');
        $user->avatar     = $user->path;

        $user->save();
        
        return redirect('home');
    }


}
