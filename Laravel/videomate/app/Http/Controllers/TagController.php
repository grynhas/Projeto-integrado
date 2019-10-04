<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Tag;

class TagController extends Controller
{
    public function buscandoTags($tag){

        $videos = Video::where('tags', '=', $tag)->get();

        return view('buscaTag')->with('videos', $videos);
    }
}
