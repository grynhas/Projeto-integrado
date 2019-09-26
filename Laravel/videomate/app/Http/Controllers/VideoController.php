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

    public function cadastroDeVideos(){
        return view('upload');
    }

     public function salvandoVideo(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'id_youtube' => ['requiered','string','max:1000'],
            'titulo' => ['requiered', 'string', 'max:50'],
            'descricao' => ['requiered', 'string', 'max:1000'],
            'tags' => ['requiered', 'string'], 'max:1000',
            'inicio_hora' => ['requiered','integer'],
            'inicio_minuto' => ['requiered','integer'],
            'inicio_segundo' => ['requiered','integer'],
            'fim_hora' => ['requiered','integer'],
            'fim_minuto' => ['requiered','integer'],
            'fim_segundo' => ['requiered','integer'],
        ]);
        
    } 

    //Atulização 22.09
    public function listandoMeusVideos($id_usuario)
    {
        $videos = Video::find($id_usuario)->get();
        //$videos = Video::all( );
        return view('myvideos')->with('videos', $videos);
    }


    public function buscandoVideos($tag, $tutilo)
    {
        $video = Video::find($tag, $tutilo);

        exit;
    }

    public function reproduzir($id)
    {
        $video = Video::find($id);
        return view('reproduzir')->with('video', $video);
    }
    public function deleteVideo($id){
        $video = Video::find($id);
        $video->delete();
        return redirect('index');
    }
}
