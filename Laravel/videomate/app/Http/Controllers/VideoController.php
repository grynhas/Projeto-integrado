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

    public function cadastrandoVideos(Request $request)
    {
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
}
