<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function listandoVideos()
    {
        $videos = Video::all();
        return view('index')->with('videos', $videos);
    }

    public function cadastrandoVideos(array $data)
    {
        return validator::make($data, [
            'id_youtube' => ['required', 'string', 'max:1000'],
            'titulo' => ['required', 'string', 'max:50'],
            'descricao' =>['required', 'string', 'max:1000'],
            'tags' => ['required', 'string', 'max:1000'],
            'inicio_hora' => ['required'],
            'inicio_minuto' =>['required'],
            'inicio_segundo' => ['required'],
            'fim_hora' => ['required'],
            'fim_minuto' =>['required'],
            'fim_segundo' => ['required']

        ]);
            
        
        echo "em construção";
        exit;
    }

    public function buscandoVideos()
    {
        echo "em construção";
        exit;
    }

    public function reproduzir($id)
    {
        $video = Video::find($id);
        return view('reproduzir')->with('video', $video);
    }

    public function logandoUsuario(){
        echo "em construção";
        exit;
    }

    public function cadastrandoUsuario(Request $request){
        echo"em construção ";
        exit;
    }

   
}
