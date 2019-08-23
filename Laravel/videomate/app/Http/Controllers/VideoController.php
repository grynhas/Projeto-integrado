<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function listandoVideos(){
        $videos = Video::all();

        return view('index')->with('videos', $videos);
    }
}
