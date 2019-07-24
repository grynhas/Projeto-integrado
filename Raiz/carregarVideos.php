<?php
require_once("classes/Video.php");

if (file_exists("videos.json")) {
    $videosJSON = file_get_contents("videos.json");
    $videosJSON = json_decode($videosJSON, true);
} else
    $videosJSON  = array();

// var_dump($videosJSON);

$videos = array();

if (count($videosJSON) > 0) {
    foreach ($videosJSON["videos"] as $key => $value) {
        $video = new Video();
        $video->id = $value["id"];
        $video->titulo = $value["titulo"];
        $video->descricao = $value["descricao"];
        $video->tags = $value["tags"];
        $video->inicioHora = $value["inicioHora"];
        $video->inicioMinuto = $value["inicioMinuto"];
        $video->inicioSegundo = $value["inicioSegundo"];
        $video->fimHora = $value["fimHora"];
        $video->fimMinuto = $value["fimMinuto"];
        $video->fimSegundo = $value["fimSegundo"];

        array_push($videos, $video);
    }

    // var_dump($videos);
}

// exit;
