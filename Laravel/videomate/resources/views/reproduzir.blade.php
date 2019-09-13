@extends('layouts.master')

@section('content')

<div id="player" class="col-7 embed-responsive embed-responsive-16by9">
    <iframe id="ytplayer" type="text/html" class="embed-responsive-item" src="{{ $video->urlPlay() }}"
        frameborder="0" allow="autoplay; fullscreen"></iframe>
</div>

<div class="col-3 col-md-3 video">
    <strong>{{ $video->titulo }}</strong>
    <p>{{ $video->descricao }}</p>
</div>

@endsection