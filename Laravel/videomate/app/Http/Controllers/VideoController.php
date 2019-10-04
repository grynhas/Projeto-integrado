<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Tag;
use SebastianBergmann\Environment\Console;
use Symfony\Component\Console\Input\Input;

class VideoController extends Controller
{
    public function listandoVideos()
    {
        $videos = Video::all();
        $tags = Tag::all();
        return view('index')->with(["videos"=>$videos, "tags"=>$tags]);
    }

    public function cadastroDeVideos(){
        $videos = Video::all(); 
        return view('/video/upload',compact('videos'));
    }

     public function salvandoVideo(Request $request ) { 
       
        
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
    public function alterandoVideo(Request $request, $id) { 
        $video = Video::find($id);

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
            $video->id_usuario = $request->input('id_usuario');
            $video->id_youtube = $request->input('id_youtube');
            $video->titulo = $request->input('titulo');
            $video->descricao = $request->input('descricao');
            $video->tags = $request->input('tags');
            $video->inicio_hora = $request->input('inicio_hora');
            $video->inicio_minuto = $request->input('inicio_minuto');
            $video->inicio_segundo = $request->input('inicio_segundo');
            $video->fim_hora = $request->input('fim_hora');
            $video->fim_minuto = $request->input('fim_minuto');
            $video->fim_segundo = $request->input('fim_segundo');

        $video->save();

        return redirect('/index');
        
    } 
    //Atulização 22.09
    public function listandoMeusVideos($id_usuario)
    {

        $videos = Video::where('id_usuario', '=', $id_usuario)->get();
        //$videos = Video::all( );
        return view('myvideos')->with('videos', $videos);
    }


    public function buscandoVideos(Request $request)
    {
        // echo $request->input("titulo");
        // exit;

        $videos = Video::where('titulo', '=', $request->input("titulo"))->get();

        return view('busca')->with('videos', $videos);
    }

    public function reproduzir($id)
    {
        $video = Video::find($id);
        return view('reproduzir')->with('video', $video);
    }
    public function removendoVideo($id){
        $video = Video::find($id);

        $video->delete();

        return redirect('index');
    }
}
