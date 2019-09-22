<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function exibirPerfil(){
        return view('perfil');
    }

    public function cadastrandoUsuario(Request $request){
        echo "em construção";
        exit;
    }
}
