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
</div>
<div class="row">
    <form class="col-12">
        <div class="form-group row">
            <label  class="col-12 comentarios" for="exampleFormControlTextarea1">Comentarios:</label>
             <textarea class="form-control col-md-12" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="row">
            <button class="btn btn-warning">Enviar</button>
        </div>
  </form>

@endsection