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

     public function salvandoVideo(Request $request )
    { 
        /* dd($request);
        exit; */
        $request->validate([
            'id_youtube' => 'required|string|max:1000',
            'titulo' => 'required|string|max:50',
            'descricao' => 'required|string|max:1000',
            'tags' => 'required|string|max:1000',
            'inicio_hora' => 'required|integer',
            'inicio_minuto' => 'required|integer',
            'inicio_segundo' => 'required|integer',
            'fim_hora' => 'required|integer',
            'fim_minuto' => 'required|integer',
            'fim_segundo' => 'required|integer'
        ]);
        $video = Video::create([
            "id_usuario" => $request->input('id_usuario'),
            "id_youtube" => $request->input('id_youtube'),
            "titulo" => $request->input('titulo'),
            "descricao" => $request->input('descricao'),
            "tags" => $request->input('tags'),
            "inicio_hora" => $request->input('inicio_hora'),
            "inicio_minuto" => $request->input('inicio_minuto'),
            "inicio_segundo" => $request->input('inicio_segundo'),
            "fim_hora" => $request->input('fim_hora'),
            "fim_minuto" => $request->input('fim_minuto'),
            "fim_segundo" => $request->input('fim_segundo')

        ]);

        $video->save();

        return redirect('/index');
        
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
