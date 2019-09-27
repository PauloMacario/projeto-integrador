<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OngHasUser;
use App\User;
use App\Ong;

class OngHasUserController extends Controller
{
    
    public function index(){
        
    }
    
    
    public function seguir(Request $request){

        $idOng = $request->input('idOng');
        $idUser = $request->input('idUser');

        $result = OngHasUser::create([
            'id_ong' => $idOng,
            'id_user' => $idUser,
            'permission_level' => 0
        ]);

        if($result){
            return redirect('homeOng/'. $idOng)->with('seguir', 'Você esta seguindo a ONG');;
        }else{
            return redirect('homeOng/'. $idOng)->with('erro', 'Não foi possível seguir');;
        }

    }
}
